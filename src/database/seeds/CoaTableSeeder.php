<?php

namespace Directoryxx\Finac\Database\Seeds;

use Illuminate\Database\Seeder;
use Directoryxx\Finac\Model\Coa;
use Illuminate\Support\Str;

class CoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$code = [
			"100.0.0.00",
			"101.0.0.00",
			"101.1.0.00",
			"101.1.1.01",
			"101.1.2.01",
			"101.2.0.00",
			"101.2.1.00",
			"101.2.1.01",
			"101.2.1.02",
			"101.2.1.03",
			"101.2.1.04",
			"101.2.2.00",
			"101.2.2.01",
			"101.2.2.02",
			"101.2.3.00",
			"101.2.3.01",
			"101.3.0.00",
			"101.3.1.00",
			"101.3.1.01",
			"102.0.0.00",
			"102.1.0.00",
			"102.1.1.00",
			"102.1.1.01",
			"102.2.0.00",
			"102.2.1.00",
			"102.2.1.01",
			"102.3.0.00",
			"102.3.1.00",
			"102.3.1.01",
			"103.0.0.00",
			"103.1.0.00",
			"103.1.1.01",
			"103.1.2.01",
			"103.1.3.01",
			"103.1.4.01",
			"103.2.0.00",
			"103.2.1.01",
			"103.3.0.00",
			"103.3.1.00",
			"103.3.1.01",
			"104.0.0.00",
			"104.1.0.00",
			"104.1.1.00",
			"104.1.1.01",
			"105.0.0.00",
			"105.1.1.00",
			"105.1.1.01",
			"105.1.1.02",
			"105.1.1.03",
			"106.0.0.00",
			"106.1.0.00",
			"106.1.1.00",
			"106.1.1.01",
			"106.1.2.00",
			"106.1.2.01",
			"106.1.3.00",
			"106.1.3.01",
			"107.0.0.00",
			"107.1.0.00",
			"107.1.1.01",
			"107.1.1.02",
			"107.2.0.00",
			"107.2.1.01",
			"107.2.1.02",
			"107.2.1.03",
			"107.2.1.04",
			"108.0.0.00",
			"108.1.0.00",
			"108.1.1.01",
			"108.2.0.00",
			"108.2.1.01",
			"109.0.0.00",
			"109.1.0.00",
			"109.1.1.01",
			"109.1.1.02",
			"109.1.1.03",
			"110.0.0.00",
			"110.1.0.00",
			"110.1.1.01",
			"110.1.1.02",
			"110.1.1.03",
			"200.0.0.00",
			"201.0.0.00",
			"201.1.0.00",
			"201.1.1.01",
			"201.1.1.02",
			"201.1.1.03",
			"201.1.1.04",
			"201.1.1.05",
			"201.1.1.06",
			"201.1.1.07",
			"201.1.1.08",
			"201.1.1.09",
			"201.1.1.10",
			"201.1.1.11",
			"201.1.1.12",
			"201.1.1.13",
			"201.1.1.14",
			"201.1.1.15",
			"201.1.1.16",
			"201.1.1.17",
			"201.1.1.18",
			"201.2.0.00",
			"201.2.1.01",
			"201.2.1.02",
			"201.2.1.03",
			"201.2.1.04",
			"201.2.1.05",
			"201.2.1.06",
			"201.2.1.07",
			"201.2.1.08",
			"201.2.1.09",
			"201.2.1.10",
			"201.2.1.11",
			"201.2.1.12",
			"201.2.1.13",
			"201.2.1.14",
			"201.2.1.15",
			"201.2.1.16",
			"201.2.1.17",
			"202.0.0.00",
			"202.1.0.00",
			"202.1.1.01",
			"202.2.0.00",
			"202.2.1.00",
			"202.2.1.01",
			"202.2.2.00",
			"202.2.2.01",
			"203.0.0.00",
			"203.1.0.00",
			"203.1.1.01",
			"203.1.1.02",
			"203.1.1.03",
			"203.1.1.04",
			"203.1.1.05",
			"203.1.1.06",
			"203.2.0.00",
			"203.2.1.01",
			"203.2.1.02",
			"203.3.0.00",
			"203.3.1.01",
			"203.4.0.00",
			"203.4.1.01",
			"203.4.1.02",
			"203.5.0.00",
			"203.5.1.01",
			"204.0.0.00",
			"204.1.0.00",
			"204.1.1.01",
			"204.1.1.02",
			"300.0.0.00",
			"301.0.0.00",
			"301.1.0.00",
			"301.1.1.00",
			"301.1.1.01",
			"301.1.1.02",
			"301.1.1.03",
			"301.1.1.04",
			"301.1.2.00",
			"301.1.2.01",
			"301.1.3.00",
			"301.1.3.01",
			"301.1.3.02",
			"301.1.3.03",
			"301.2.0.00",
			"301.2.1.01",
			"301.2.1.02",
			"301.2.1.03",
			"301.2.1.04",
			"301.2.1.05",
			"301.2.1.06",
			"301.2.1.07",
			"301.2.1.08",
			"301.3.0.00",
			"301.3.0.01",
			"301.3.0.02",
			"301.4.0.00",
			"301.4.1.01",
			"301.4.1.02",
			"301.5.0.00",
			"301.5.1.01",
			"301.5.1.02",
			"301.5.1.03",
			"301.5.1.04",
			"301.5.1.05",
			"301.5.1.06",
			"301.5.1.07",
			"301.5.1.08",
			"301.5.1.09",
			"301.5.1.10",
			"302.0.0.00",
			"302.1.0.00",
			"302.1.1.01",
			"302.1.1.02",
			"302.2.0.00",
			"302.2.1.01",
			"302.2.1.02",
			"302.2.1.03",
			"302.3.0.00",
			"302.3.1.01",
			"302.3.1.02",
			"302.3.1.03",
			"302.3.1.04",
			"303.0.0.00",
			"303.1.0.00",
			"303.1.1.01",
			"303.1.1.02",
			"303.1.1.03",
			"303.1.1.04",
			"303.2.0.00",
			"303.2.1.01",
			"303.2.1.02",
			"303.3.0.00",
			"303.3.1.01",
			"303.4.0.00",
			"303.4.1.01",
			"400.0.0.00",
			"401.0.0.00",
			"401.1.0.00",
			"401.1.1.01",
			"401.1.1.02",
			"401.1.1.03",
			"401.2.0.00",
			"401.2.1.01",
			"401.2.1.02",
			"401.2.1.03",
			"402.0.0.00",
			"402.1.0.00",
			"402.1.1.01",
			"403.0.0.00",
			"403.1.0.00",
			"403.1.1.01",
			"500.0.0.00",
			"501.0.0.00",
			"501.1.0.00",
			"501.1.1.01",
			"501.2.0.00",
			"501.2.1.01",
			"501.2.1.02",
			"501.2.1.03",
			"501.3.0.00",
			"501.3.1.01",
			"501.3.1.02",
			"501.4.0.00",
			"501.4.1.01",
			"501.4.1.02",
			"501.4.1.03",
			"501.5.0.00",
			"501.5.1.01",
			"502.0.0.00",
			"502.1.0.00",
			"502.1.1.01",
			"600.0.0.00",
			"601.0.0.00",
			"601.1.0.00",
			"601.1.1.01",
			"601.1.1.02",
			"601.1.1.03",
			"601.1.1.04",
			"601.1.1.05",
			"601.1.1.06",
			"601.1.1.07",
			"601.1.1.08",
			"601.2.0.00",
			"601.2.1.01",
			"601.2.1.02",
			"601.3.0.00",
			"601.3.1.01",
			"601.3.1.02",
			"601.3.1.03",
			"601.3.1.04",
			"601.4.0.00",
			"601.4.1.01",
			"601.4.1.02",
			"601.4.1.03",
			"601.4.1.04",
			"601.4.1.05",
			"601.5.0.00",
			"601.5.1.00",
			"601.5.1.01",
			"601.5.1.02",
			"601.5.1.03",
			"601.5.1.04",
			"601.5.1.05",
			"601.5.1.06",
			"601.5.1.07",
			"601.5.1.08",
			"601.5.2.00",
			"601.5.2.01",
			"601.5.2.02",
			"601.6.0.00",
			"601.6.1.01",
			"601.6.1.02",
			"601.6.1.03",
			"601.6.1.04",
			"601.6.1.05",
			"601.6.1.06",
			"601.6.1.07",
			"602.0.0.00",
			"602.1.0.00",
			"602.1.1.01",
			"602.1.1.02",
			"602.2.0.00",
			"602.2.1.01",
			"602.2.1.02",
			"602.2.1.03",
			"602.2.1.04",
			"602.2.1.05",
			"602.2.1.06",
			"602.2.1.07",
			"602.2.1.08",
			"602.2.1.09",
			"602.2.1.10",
			"602.2.1.11",
			"602.3.0.00",
			"602.3.1.01",
			"602.3.1.02",
			"602.3.1.03",
			"602.3.1.04",
			"602.3.1.05",
			"602.4.0.00",
			"602.4.1.01",
			"602.4.1.02",
			"602.4.1.03",
			"603.0.0.00",
			"603.1.0.00",
			"603.1.1.01",
			"603.1.1.02",
			"603.1.1.03",
			"603.1.1.04",
			"603.1.1.05",
			"603.2.0.00",
			"603.2.1.01",
			"603.2.1.02",
			"603.2.1.03",
			"603.3.0.00",
			"603.3.1.01",
			"603.3.1.02",
			"603.3.1.03",
			"603.3.1.04",
			"700.0.0.00",
			"701.0.0.00",
			"701.1.0.00",
			"701.1.1.01",
			"701.2.0.00",
			"701.2.1.01",
			"701.2.1.02",
			"701.2.1.03",
			"701.2.1.04",
			"701.2.1.05",
			"701.3.0.00",
			"701.3.1.01",
			"701.3.1.02",
			"701.4.0.00",
			"701.4.1.01",
			"701.4.1.02",
			"701.4.1.03",
			"701.4.1.04",
			"701.4.1.05",
			"701.4.1.06",
			"701.4.1.07",
			"701.4.1.08",
			"701.4.1.09",
			"701.5.0.00",
			"701.5.1.01",
			"701.5.1.02",
			"701.5.1.03",
			"701.5.1.04",
			"701.5.1.05",
			"701.6.0.00",
			"701.6.1.01",
			"702.0.0.00",
			"702.1.0.00",
			"702.1.1.01",
			"702.1.1.02",
			"702.1.1.03",
			"702.2.0.00",
			"702.2.1.01",
			"702.2.1.02",
			"702.2.1.03",
			"702.2.1.04",
			"702.2.1.05",
			"702.2.1.06",
			"702.2.1.07",
			"702.2.1.08",
			"702.2.1.09",
			"702.2.1.10",
			"702.2.1.11",
			"702.2.1.12",
			"702.2.1.13",
			"702.2.1.14",
			"702.2.1.15",
			"702.2.1.16",
			"702.3.0.00",
			"702.3.1.01",
			"702.3.1.02",
			"702.3.1.03",
			"702.3.1.04",
			"702.3.1.05",
			"702.3.1.06",
			"702.3.1.07",
			"702.4.0.00",
			"702.4.1.01",
			"702.4.1.03",
			"702.4.1.04",
			"703.0.0.00",
			"703.1.0.00",
			"703.1.1.00",
			"703.1.1.01",
			"703.1.1.02",
			"703.1.1.03",
			"703.1.1.04",
			"703.1.1.05",
			"703.1.2.00",
			"703.1.2.01",
			"703.1.2.02",
			"703.1.2.03",
			"703.1.2.04",
			"703.1.3.00",
			"703.1.3.01",
			"703.1.3.02",
			"703.1.3.03",
			"703.1.3.04",
			"703.1.3.05",
			"703.1.3.06",
			"703.1.3.07",
			"703.1.3.08",
			"703.1.3.09",
			"703.2.0.00",
			"703.2.1.01",
			"703.2.1.02",
			"703.2.1.03",
			"703.2.1.04",
			"703.2.1.05",
			"703.2.1.06",
			"703.2.1.07",
			"703.2.1.08",
			"703.3.0.00",
			"703.3.1.00",
			"703.3.1.01",
			"703.3.1.02",
			"703.3.1.03",
			"703.3.1.04",
			"703.3.1.05",
			"703.3.1.06",
			"703.3.2.00",
			"703.3.2.01",
			"703.3.2.02",
			"703.3.2.03",
			"703.3.2.04",
			"703.3.2.05",
			"703.3.2.06",
			"703.3.2.07",
			"703.3.2.08",
			"703.3.3.00",
			"703.3.3.01",
			"703.3.3.02",
			"703.3.3.03",
			"703.3.3.04",
			"703.3.3.05",
			"703.3.3.06",
			"703.3.3.07",
			"703.3.3.08",
			"703.3.3.09",
			"703.3.3.10",
			"703.3.3.11",
			"703.3.4.00",
			"703.3.4.01",
			"703.3.4.02",
			"703.3.5.00",
			"703.3.5.01",
			"703.3.5.02",
			"703.3.6.00",
			"703.3.6.01",
			"703.3.6.02",
			"703.3.6.03",
			"703.3.6.04",
			"703.3.6.05",
			"703.3.6.06",
			"703.4.0.00",
			"703.4.1.01",
			"703.4.1.02",
			"703.4.1.03",
			"703.4.1.04",
			"703.4.1.06",
			"703.5.0.00",
			"703.5.1.01",
			"703.5.1.02",
			"703.6.0.00",
			"703.6.1.00",
			"703.6.1.01",
			"703.6.1.02",
			"703.6.1.03",
			"703.6.1.04",
			"703.6.1.05",
			"703.6.1.06",
			"703.6.2.00",
			"703.6.2.01",
			"703.6.2.02",
			"704.0.0.00",
			"704.1.0.00",
			"704.1.1.01",
			"800.0.0.00",
			"801.0.0.00",
			"801.1.0.00",
			"801.1.1.01",
			"801.1.1.02",
			"801.2.0.00",
			"801.2.1.01",
			"801.2.1.02",
			"801.2.1.03",
			"801.3.0.00",
			"801.3.1.01",
			"801.3.1.02",
			"801.3.1.03",
			"801.3.1.04",
			"801.3.1.05",
			"801.3.1.06",
			"802.0.0.00",
			"802.1.0.00",
			"802.1.1.01",
			"802.1.1.02",
			"802.1.1.03",
			"802.1.1.04",
			"802.1.1.05",
			"802.2.0.00",
			"802.2.1.01",
			"802.2.1.02",
			"802.2.1.03",
			"802.3.0.00",
			"802.3.1.01",
			"802.3.1.02",
			"802.3.1.03",
			"802.4.0.00",
			"802.4.1.01",
			"802.4.1.02",
			"802.4.1.03",
			"802.4.1.04",
			"802.4.1.05",
			"802.4.1.06",
			"802.4.1.07",
		];

		$name = [
			"Current Asset",
			"Cash and Bank",
			"Cash",
			"Cash On Hand - Exploitation - IDR - PT.",
			"Cash On Hand - Exploitation - USD - PT.",
			"Bank",
			"Bank - BNI",
			"BNI/PT.MMF/IDR/866-866-800-6",
			"BNI/PT.MMF/IDR/888-000-868-8",
			"BNI/PT.MMF/IDR/868-979-868-6",
			"BNI/PT.MMF/USD/888-000-866-6",
			"Bank - Mandiri",
			"Man/PT.MMF/IDR/142-008-8686497",
			"Man/PT.MMF/IDR/141-008-8686498",
			"Bank - BRI",
			"BRI/PT.MMF/IDR/035-601-000918309-Jo",
			"Deposit",
			"Deposit",
			"Deposit - Bank Guarantee",
			"Temporary Investment",
			"Stock",
			"Stock",
			"Stock",
			"Stock",
			"Bond",
			"Bond",
			"Mutual Fund",
			"Mutual Fund",
			"Mutual Fund",
			"Account Receivables ",
			"Account Receivables ",
			"Account Receivables- Indonesia",
			"Account Receivables- Military (Ind)",
			"Account Receivables- Foreign",
			"Account Receivables- One Time Customer",
			"Account Receivables - Related Parties",
			"Account Receivables- Related Parties",
			"A/R Doubtful ",
			"A/R Doubtful ",
			"A/R Doubtful ",
			"Account Receivables - Other",
			"Account Receivables - Other",
			"Account Receivables- Employee",
			"Account Receivables- Employee MMF",
			"Inventories",
			"Inventories - Aircraft",
			"Component",
			"Consumable",
			"Raw Material",
			"Advance Payment",
			"Advance Payment",
			"Advance Payment - External",
			"Advance Payment - External",
			"Advance Payment - Internal ",
			"Advance Payment - Internal ",
			"Advance Payment - Other",
			"L/C Import",
			"Prepaid Tax",
			"Prepaid Tax - VAT",
			"VAT Input",
			"VAT Input - Impor",
			"Prepaid Tax - Income Tax",
			"Tax/Art 21/Fiscal",
			"Tax/Art 22/Custom Clearence",
			"Tax/Art 23/IBDR-WP DN",
			"Tax/ Art 25 ",
			"Prepaid Expense",
			"Prepaid Insurance ",
			"Prepaid Insurance ",
			"Prepaid Rent Expense",
			"Prepaid Rent Expense",
			"Accrued Revenue",
			"Accrued Revenue - Non Operational",
			"Accrued Revenue - Customer",
			"Accrued Revenue - Insurance Aircraft",
			"Accrued Revenue - Others",
			"Other Current Assets",
			"Other Current Assets",
			"Idle Inventory",
			"Scrap Inventory ",
			"Acm Depr Scrap Inventory",
			"Non Current Asset",
			"Fixed Asset",
			"Asset Class",
			"Airframe ",
			"Engine",
			"Propeller",
			"Auxiliary Power Unit",
			"Landing Gear ",
			"Rotables",
			"Ground Support Equipment",
			"Tools",
			"Land",
			"Building",
			"Office Equipment",
			"Vehicles - Cars",
			"Vehicles - Motorcycles",
			"Communication",
			"Hardware",
			"Software",
			"Scrap Assets",
			"Intangible Asset",
			"Accm Depr Asset ",
			"Accm Depr Airframe",
			"Accm Depr Engine ",
			"Accm Depr Propeller",
			"Accm Depr Auxiliary Power Unit ",
			"Accm Depr Landing Gear",
			"Accm Depr Rotables ",
			"Accm Depr Ground Support Equipment",
			"Accm Depr Tools",
			"Accm Depr Building",
			"Accm Depr Office Equipment",
			"Accm Depr Vehicles - Cars",
			"Accm Depr Vehicles - Motorcycles",
			"Accm Depr Communication",
			"Accm Depr Hardware",
			"Accm Depr Software",
			"Accm Depr Scrap Assets",
			"Accm Amort Intangible Asset",
			"Long Term Investment",
			"Long Term Receivables",
			"LT Rev - Employee",
			"Investment",
			"Investment",
			"Long Term Investment",
			"Investment in KSO",
			"Investment in KSO GMF-MMF",
			"Other Assets",
			"Def Exp - Non Aircraft",
			"Def Exp - Building Renovation",
			"Def Exp - Trainning & Education",
			"Def Exp - Maintenance and Overhaul",
			"Def Exp - Build & Land Tax ",
			"Def Exp - Rental Land",
			"Def Exp - Divest",
			"Deposit",
			"Bank Guarantee",
			"Other Deposit",
			"Assets Under Construction",
			"Assets Under Construction",
			"Idle Assets",
			"Idle Assets",
			"Accm Depr Idle Assets",
			"Escrow Account",
			"Escrow Account",
			"Deffered Expense - Tax",
			"Deffered Expense - Tax",
			"Current Tax",
			"Deffered Tax",
			"Liabilities",
			"Current Liablities",
			"Account Payables ",
			"Account Payables - Vendor",
			"Account Payable ",
			"A/P Fin Institution - Bank",
			"A/P Fin Institution  - Non Bank",
			"A/P Other Affiliated",
			"Account Payables - Employee",
			"Employee",
			"Account Payables - Related Parties",
			"Repair & Maintenance",
			"Trade",
			"Non Trade ",
			"Accrued Expense",
			"Acc Exp - Insurance",
			"Acc Exp - Maintenance & overhaul ",
			"Acc Exp - Salary",
			"Acc Exp - SKK/SPBA ",
			"Acc Exp - Transportation & Meals",
			"Acc Exp - Premi BPJS - TK",
			"Acc Exp - Premi BPJS - Kesehatan",
			"Acc Exp - General & Administration",
			"Deposit Received from Customer",
			"DP from Customer",
			"Other Deposit",
			"Unearned Revenue",
			"Un Revenue Rent",
			"Un Revenue Project MMF",
			"Tax Payable",
			"Tax Payable - PPh 21",
			"Tax Payable - PPh 22",
			"Tax Payable - PPh 23",
			"Tax Payable - PPh 26",
			"VAT",
			"Custom Clearance",
			"Land & Building Tax",
			"Withdrawal VAT ",
			"Tax Payable 4(2)",
			"Tax Payable 25/29",
			"Other Current Liabilities",
			"Interest Payable On Debt/Loan",
			"Interest Payable On Commercial Debt",
			"Interest Payable On Government Fund",
			"Affiliated & Third Party",
			"Affiliated - PTN Liability",
			"Affiliated - MNA Liability",
			"Affiliated - Other Liability",
			"Other",
			"Claim Insurance - Aircraft",
			"Claim Insurance -  Non Aircraft",
			"Claim Insurance -  Hull All Risk",
			"Third Party Legal Liability",
			"Long Term Liabilities",
			"Third Party ",
			"LT Liab - Bank ",
			"LT Liab - Non Bank",
			"LT Liab - Government",
			"LT Liab - Supplier / other third party",
			"Debt Reschuduling",
			"LT Liab - Debt Rescheduling",
			"LT Liab - Interest Rescheduling",
			"Tax",
			"LT Liab - Tax",
			"Other Long Term Liabilities",
			"LT Liab - Others",
			"Equities",
			"Capital",
			"Capital",
			"Authorized Capital",
			"Subscribed Capital",
			"Unsubscribed Capital",
			"Capital Participation",
			"Government Capital Participation",
			"Investment From MNA",
			"Investment From Thir Party",
			"Retained Earning",
			"Retained Earning",
			"Retained Earning",
			"Dividend",
			"Dividend",
			"Dividend",
			"Revenue",
			"Operating Revenue",
			"Mmf - Heavy Maintenance Revenue",
			"Mmf - Heavy Maintenance Revenue",
			"Mmf - Workshop Revenue",
			"Mmf - IERA Shop",
			"Mmf - Mechanical Shop",
			"Mmf - Propulsion And Accessories Shop",
			"Mmf - Rental Hanggar Revenue",
			"Mmf - Hangar Space",
			"Mmf - Parking Charge",
			"Mmf - Other Revenue",
			"Mmf - Logistic",
			"Mmf - Rental GSE & Tools",
			"Mmf - Other Revenue",
			"Mmf - Workshop Jakarta",
			"Mmf - Workshop Jakarta ",
			"Sales Discount",
			"Sales Discount",
			"Sales Discount",
			"Cost Of Good Sold",
			"Production Expenses",
			"Depreciation Expense",
			"Depr. Exp. Airframe",
			"Depr. Exp. Engine ",
			"Depr. Exp. Propeller",
			"Depr. Exp. Apu ",
			"Depr. Exp. Landing Gear ",
			"Depr. Exp. Rotable ",
			"Depr. Exp. GSE",
			"Depr. Exp.-Tools",
			"Insurance Expenses",
			"Hull All Risk Insurance",
			"Hangar & Product Liability",
			"Fuel Expenses",
			"Fuel Expense-Refueling",
			"Water Methanol",
			"Oil Expenses-Aircraft",
			"Oil Expenses-Others",
			"Overhoul Expenses",
			"Loan Expense  Rotable Third Party",
			"Borrow Expense  Consumable Third Party",
			"Rent  Expense  Equipment Third Party",
			"Overhaul Expense  Manhour Third Party",
			"Rotable  Repair  Expenses ",
			"Maintenance & Repair Expenses",
			"Maintenance & Repair Expenses",
			"Component Expense",
			"Consumable Expense",
			"Raw Material Expense",
			"Sub Contracting Service Expense",
			"Cleaning A/C Expense - Interior",
			"Cleaning A/C Expense - Exterior",
			"Maint.&  Repair Expense -Tools",
			"Safety Equipment Expense",
			"Maintenance & Repair Expenses",
			"Repair Component Expense -SBU MMF-JKT",
			"Module Trials Expense",
			"Joint Operation & Third Party Expense",
			"Hangar Rent to Thirt Party",
			"Manpower Rent to Third Party",
			"Engine Lycoming/Workshop to Third Party",
			"Painting & Cabin Interior to Third Party",
			"Business Con 3rd Pty",
			"AC Interior and Exterior Washing to Third Party ",
			"Allowance Technical Representative ",
			"Direct Labor ",
			"Salary - Technicians",
			"Base Salary - Technician",
			"Wages Temporary Employee",
			"Allowances & Overtime - Technicians",
			"Allowance - Technician",
			"Income Tax Allowance",
			"Pension Fund Allowance",
			"Accident Insurance Benefit Expense",
			"Other Allowance",
			"Meal & Transport Allowance - Technician",
			"Shift Allowance - Technician",
			"Over Time Expenses",
			"Add. Meal & Drinks Expenses",
			"Personal Accident Insurance Expense",
			"Uniform Benefit Expense",
			"Duty Trip Expense - Tehnicians",
			"Duty Trip Expense Domestic",
			"Duty Trip Expense (Hotel) Domestic",
			"Duty Trip Expense International ",
			"Duty Trip Expense (Hotel) International ",
			"Duty Trip Document (Int)",
			"Training Expense",
			"General Licence Course Expense",
			"Recurrent Training Expense",
			"Special Licence Course Expense",
			"Distribution Cost",
			"Expedition, Freight & Inclaring",
			"Expd. Expense-Inclaring/Handling",
			"Expd. Expense-Inclaring/Insurance",
			"Expd. Expense-Inclaring/Custom Clearance",
			"Expd. Expense-Inclaring/Vat Import",
			"Transport-Overhaul & Maintenance",
			"Landing Fees & Route Charges",
			"Landing  Fee",
			"Parking Fee",
			"Route Charges",
			"Ground Handling ",
			"Ground Handling Exp.",
			"Maint. Expense  Gse",
			"Rent Expense  Gse",
			"Gasoline Gse-Station",
			"Operating Expense",
			"Sales Cost",
			"Commision",
			"Commission Exp.-Third Party",
			"Promotion",
			"Promotion Exp.-Advertising",
			"Promotion Exp.-Giftaway",
			"Promotion Exp.-Sponsorship",
			"Entertainment Expense",
			"Sales Development Expense",
			"Salary - Sales",
			"Base Salary - Sales",
			"Wages Temporary Employee",
			"Allowances & Overtimes - Sales",
			"Allowance - Sales",
			"Income Tax Allowance",
			"Pension Insurance Benefit Expense",
			"Accident Insurance Benefit Expense",
			"Other Allowances",
			"Meal & Transport Allowance - Sales",
			"Overtime Expense",
			"Add. Meal & Drinks Expense",
			"Uniform  Expense",
			"Duty Trip Expense - Sales",
			"Duty Trip Expense Domestic",
			"Duty Trip Expense (Hotel) Domestic",
			"Duty Trip Expense International ",
			"Duty Trip Expense (Hotel) International ",
			"Duty Trip Document (Int)",
			"Training Expense - Sales",
			"Special Course/Sales Course",
			"Organization Expense",
			"Salary - Administration",
			"Base Salary - Adm",
			"Base Salary - Commitee",
			"Wages  Temporary Employee",
			"Allowances & Overtime - Administration",
			"Allowance - Adm",
			"Allowance - Committee",
			"Income Tax Allowance - Adm",
			"Income Tax Allowance - Committee",
			"Pension Insurance Benefit Expense",
			"Accident Insurance Benefit Expense",
			"Other Allowance",
			"Shift Allowance - Adm",
			"Meal & Transport Allowance - Adm",
			"Overtime Expense",
			"Health Care Hospital Expense - Committee",
			"In House Pharmacy Expense - Committee ",
			"Out Patient Laboratory Expenses - Committee",
			"Add. Meal & Drinks Expense - Adm",
			"Uniform Expense",
			"Home & Transport Allowance - Committee",
			"Duty Trip Expense - Administration",
			"Out Patient Expenses-Pharmacy Third Par",
			"Out Patient Expenses-Birth Control",
			"Duty Trip (Dom)Expense",
			"Duty Trip (Dom)Hotel Expense",
			"Duty Trip (Domestic) Trsport Expense",
			"Dt Expense (Int) Adm",
			"Dt Doc Exp (Int)-Adm",
			"Training & Recruitment Exp.- Administration",
			"Recruitment Expense - F/O",
			"Seminar, Workshop Expense ",
			"Special Course Training Expense",
			"General Expenses",
			"Maintenance & Repair Expense",
			"Maintenance & Repair Vehicle",
			"Maint. & Repair-Vehicles",
			"Gasoline Expense-Vehicles",
			"Lubricants Expense-Vehicles",
			"Tyre.Exp.-Vehicle",
			"Bateray Expense-Vehicle",
			"Maintenance & Repair Building",
			"Maint. & Repair Expense-Hangar",
			"Maint. & Repair Expense-Shop",
			"Maint. & Repair Expense-Warehouse",
			"Maint. & Repair Expense-Office ",
			"Maintenance & Repair Equipment",
			"Maint. & Repair Expense-Edp Equipment",
			"Maint. & Repair Expense-Computer",
			"Maint. & Repair Expense-Software",
			"Maint. & Repair Expense-Office Equipment",
			"Maint. & Repair Expense-Telephone",
			"Maint. & Repair Expense-Ac",
			"Maint. & Repair Expense-Fire Extinquisher",
			"Maint. & Repair Expense-Shop Tools",
			"Maint. & Repair Expense-Gse",
			"Rental Expense",
			"Rental Expense - Building",
			"Rental Expense - Vehicle ",
			"Rental Expense - Hanggar ",
			"Rental Expense - Warehouse",
			"Rental Expense - Office",
			"Rental Expense - Land ",
			"Rental Expense - Office Equipment",
			"Rental Expense - Computer",
			"Office Cost ",
			"Electricity, Water, Gas, Telephone",
			"Electricity Consumption",
			"Water Consumption",
			"Gas Consumption",
			"Telephon Office Expenses",
			"Radio Communication  Expense",
			"Data Comunication Expense",
			"Suplies Expense",
			"Office Suplies Expense",
			"Computer Suplies Expense",
			"General Supplies Expense",
			"Printed Document Expense",
			"Foto Copy Expense",
			"Sanitary Suplies Expense",
			"Sanitary Equipment Expense",
			"Utility Expense",
			"Office Operation",
			"Document Exp-Vehicle",
			"Parking-Vehicle",
			"Higway Expenses - Vehicle",
			"Gasoline Expense-Vehicles",
			"Airport Id Expenses",
			"Stamp Expenses",
			"Meeting - Expense",
			"Membership Expense ",
			"Social - Expense",
			"Sport Expense",
			"Spiritual Guidance",
			"Outsourcing Expense",
			"Outsourcing - Cleaning Service & Driver",
			"Outsourcing - Security",
			"Research & Development Expense",
			"Research & Development - Consultant",
			"Research & Development - Library",
			"Office Operation Jakarta",
			"Office Suplies Expense - JKT",
			"Gasoline Expense-Vehicles JKT",
			"Higway Expenses - Vehicle JKT",
			"Meal & Drinks Expense - Adm JKT",
			"Stamp Expense Expense JKT",
			"Meeting - Expense JKT",
			"Public Relation Expense",
			"Pr. Expense - Birthday Of Republic Indonesian",
			"Pr. Expense - Birthday Of MMF",
			"Pr. Expense - Birthday Of Merpati Nusantara",
			"Pr. Expense - Magazine / Newspaper",
			"Pr. Expense - Others",
			"Tax Expense",
			"Building &Land Tax Expenses",
			"Income Tax Article 4 (2)",
			"Depresiation & Amortization Expense",
			"Depresiation Expense",
			"Depr. Expenses Building",
			"Depr. Expenses-Communication Equipment",
			"Depr. Expenses Vechile - Cars",
			"Depr. Expenses Vechile - Motorcycles",
			"Depr. Expenses.- Edp",
			"Depr. Expenses - Office Equipment",
			"Amortization Expense",
			"Amort. Expenses Building",
			"Amort. Expenses Electricity Power House ",
			"Others Expense",
			"Removing Receivable Expense",
			"A/R Doubtful Exp. - Non Traffic",
			"Non Operating Revenue (Expense)",
			"Non Operating Revenue",
			"Interest Income",
			"Interest Income (Deposit)",
			"Interest Income (Bank)",
			"Exchange Rate Gap Income",
			"Realized Gain From Exchange Rate Differential",
			"Unrealized Gain From Exchange Rate Differential",
			"Cash Balances Differential",
			"Others Income",
			"Asset Sold Income",
			"Rental Income - Other",
			"Non Operating Income Other",
			"Insurance Claim Income-Non Aircraft",
			"Deffered Tax Income",
			"Extraordinary Gain / Aircraft",
			"Non Operating Expenses",
			"Bank & Non Bank Expense",
			"Debt Restructuring Expenses",
			"Bank Expenses",
			"Income Tax / Bank Service",
			"Interest Expense-Bank",
			"Interest Expense-Non Bank",
			"Exchange Rate Gap Income",
			"Realized Losses From Exchange Rate Differential",
			"Unrealized Losses From Exchange Rate Differential",
			"Cash Balances Differential",
			"Pinalty & Tax Expense ",
			"Pinalty Expense From Tax",
			"Tax Expenses",
			"Deffered Tax Expense",
			"Others Expense",
			"Asset Sold Expense",
			"Scrapping Expense",
			"Compensation And Benefit",
			"Management Expenses",
			"Non Operating Expense Other",
			"Aircraft Material Expense Third Party",
			"Loss from Stock Opname",
		];

		$type_id = [
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			203,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			204,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			205,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			207,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
			206,
		];
		
		$description = [
			"Header",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Detail",
			"Detail",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Detail",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"header",
			"header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
			"Header",
		];

		for($a = 0; $a < count($code); $a++) {
			$data[] = [
				'uuid' => Str::uuid()->toString(),
				'code' => $code[$a],
				'name' => $name[$a],
				'description' => $description[$a],
				'type_id' => $type_id[$a],
				'created_at' => date('Y-m-d H:i:s'),
			];
		}

		Coa::insert($data);
    }
}
