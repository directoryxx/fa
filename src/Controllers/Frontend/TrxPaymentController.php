<?php

namespace Directoryxx\Finac\Controllers\Frontend;

use Illuminate\Http\Request;
use Directoryxx\Finac\Model\TrxPayment;
use Directoryxx\Finac\Request\TrxPaymentUpdate;
use Directoryxx\Finac\Request\TrxPaymentStore;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\Currency;

class TrxPaymentController extends Controller
{
    public function index()
    {
        return view('supplierinvoiceview::index');        
    }

    public function create()
    {
        return view('supplierinvoicegeneralview::create');        
    }

    public function store(TrxPaymentStore $request)
    {
        $trxpayment = TrxPayment::create($request->all());
        return response()->json($trxpayment);
    }

    public function edit(TrxPayment $trxpayment)
    {
        return response()->json($trxpayment);
    }

    public function update(TrxPaymentUpdate $request, TrxPayment $trxpayment)
    {

        $trxpayment->update($request->all());

        return response()->json($trxpayment);
    }

    public function destroy(TrxPayment $trxpayment)
    {
        $trxpayment->delete();

        return response()->json($trxpayment);
    }

    public function api()
    {
        $trxpaymentdata = TrxPayment::all();

        return json_encode($trxpaymentdata);
    }

    public function apidetail(TrxPayment $trxpayment)
    {
        return response()->json($trxpayment);
    }

    public function datatables()
    {
		$data = $alldata = json_decode(
			TrxPayment::with([
				'vendor'
			])->get()
		);

		$datatable = array_merge([
			'pagination' => [], 'sort' => [], 'query' => []
		], $_REQUEST);

		$filter = isset($datatable['query']['generalSearch']) && 
			is_string($datatable['query']['generalSearch']) ? 
			$datatable['query']['generalSearch'] : '';

        if (!empty($filter)) {
            $data = array_filter($data, function ($a) use ($filter) {
                return (bool) preg_grep("/$filter/i", (array) $a);
            });

            unset($datatable['query']['generalSearch']);
        }

		$query = isset($datatable['query']) && 
			is_array($datatable['query']) ? $datatable['query'] : null;

        if (is_array($query)) {
            $query = array_filter($query);

            foreach ($query as $key => $val) {
                $data = $this->list_filter($data, [$key => $val]);
            }
        }

		$sort  = !empty($datatable['sort']['sort']) ? 
			$datatable['sort']['sort'] : 'asc';
		$field = !empty($datatable['sort']['field']) ? 
			$datatable['sort']['field'] : 'RecordID';

        $meta    = [];
		$page    = !empty($datatable['pagination']['page']) ? 
			(int) $datatable['pagination']['page'] : 1;
		$perpage = !empty($datatable['pagination']['perpage']) ? 
			(int) $datatable['pagination']['perpage'] : -1;

        $pages = 1;
        $total = count($data);

        usort($data, function ($a, $b) use ($sort, $field) {
            if (!isset($a->$field) || !isset($b->$field)) {
                return false;
            }

            if ($sort === 'asc') {
                return $a->$field > $b->$field ? true : false;
            }

            return $a->$field < $b->$field ? true : false;
        });

        if ($perpage > 0) {
            $pages  = ceil($total / $perpage);
            $page   = max($page, 1);
            $page   = min($page, $pages);
            $offset = ($page - 1) * $perpage;

            if ($offset < 0) {
                $offset = 0;
            }

            $data = array_slice($data, $offset, $perpage, true);
        }

        $meta = [
            'page'    => $page,
            'pages'   => $pages,
            'perpage' => $perpage,
            'total'   => $total,
        ];

		if (
			isset($datatable['requestIds']) && 
			filter_var($datatable['requestIds'], FILTER_VALIDATE_BOOLEAN)) 
		{
            $meta['rowIds'] = array_map(function ($row) {
                return $row->RecordID;
            }, $alldata);
        }

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

        $result = [
            'meta' => $meta + [
                'sort'  => $sort,
                'field' => $field,
            ],
            'data' => $data,
        ];

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

	//GRN
	
    public function grnCreate()
    {
        return view('supplierinvoicegrnview::create');        
    }

    public function grnStore(TrxPaymentStore $request)
    {
		$request->merge([
			'id_supplier' => 
			Vendor::where('uuid', $request->id_supplier)->first()->id
		]);

		$request->request->add([
			'transaction_number' => TrxPayment::generateCode(),
			'x_type' => 'GRN',
		]);

        $trxpayment = TrxPayment::create($request->all());
        return response()->json($trxpayment);
    }

    public function grnEdit(Request $request)
    {
		$data['data'] = TrxPayment::where(
			'uuid', 
			$request->trxpayment
		)->first();

		$data['vendor'] = Vendor::all();
		$data['currency'] = Currency::selectRaw(
			'code, CONCAT(name, " (", symbol ,")") as full_name'
		)->whereIn('code',['idr','usd'])
		->get();

        return view('supplierinvoicegrnview::edit', $data);        
    }

	public function getVendor()
	{
		$vendor = Vendor::all();

		$type = [];

		for ($i = 0; $i < count($vendor); $i++) {
			$x = $vendor[$i];

			$type[$x->id] = $x->name;
		}

        return json_encode($type, JSON_PRETTY_PRINT);
	}

}
