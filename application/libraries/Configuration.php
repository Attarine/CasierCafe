<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Configuration
{
    public function __construct()
    {
        define('SQL_HOST', 'localhost');
        define('SQL_USER', 'root');
        define('SQL_PASSWORD', '');
        define('SQL_DB', 'ims_mitra_utama');
        define('PAGGING', '10');
        define('LIMIT', 'E5BWpg==');

        /* $this->Month							= array(
													'01'		=> "January",
													'02'		=> "February",
													'03'		=> "March",
													'04'		=> "April",
													'05'		=> "May",
													'06'		=> "June",
													'07'		=> "July",
													'08'		=> "August",
													'09'		=> "September",
													'10'		=> "October",
													'11'		=> "November",
													'12'		=> "December",
												);
										
		$this->MonthName						= array(
													'January'		=> "01",
													'February'		=> "02",
													'March'			=> "03",
													'April'			=> "04",
													'May'			=> "05",
													'June'			=> "06",
													'July'			=> "07",
													'August'		=> "08",
													'September'		=> "09",
													'October'		=> "10",
													'November'		=> "11",
													'December'		=> "12",
												);

		
		$this->WarehouseOutRequisitionStatus		= array (9 => "Draft", 1 => "Approved", 0 => "Rejected");
		$this->WarehouseTransferRequisitionStatus	= array (0 => "Draft", 1 => "Approved", 9 => "Rejected");
		
		$this->PurchaseOrderType					= array (0 => "Non Production", 1 => "Production");
		$this->SupplierType							= array (0 => 'Lem', 1 => 'Plastik');
		$this->PurchaseOrderStatus					= array (0 => "Reject", 1 => "Accepted", 9 => "Draft", 2 => "Ordered", 3 => "Partial Ordered", 4 => "Closed");
		$this->SalesmanStatus						= array (0 => 'Not Active', 1 => 'Active');
		$this->SalesOrderStatus						= array (1 => "Approved", 9 => "Draft", 0 => "Rejected");
		$this->SalesShipmentPlanningStatus			= array (0 => 'Belum Dikirim', 1 =>'Terkirim');
		$this->WorkOrderStatus						= array (0 => 'New', 1 =>'Processed', 2 =>'All Released', 3 =>'Partial Release', 9 => 'Closed');
		$this->ItemStockType						= array (0 => 'Non PPn', 1 => 'PPn');
		
		$this->ItemMaterialStatus					= array (0 => 'Material - BOM', 1 => 'Material - Release', 2 => 'Material - Result', 3 => 'Material - Work Order');
		
		$this->SalesDeliveryOrderStatus				= array (0 => 'Belum Dikirim', 1 =>'Terkirim', 2 =>'Partial', 4 => 'Closed');
		$this->CollectionGiroStatus					= array (9 => 'Draft', 0 => 'Reject', 1 => 'Approved');
		$this->PaymentGiroStatus					= array (9 => 'Draft', 0 => 'Reject', 1 => 'Approved');
		$this->AcctAccountSettingStatus				= array (1 => 'Debet', 0 => 'Credit');
		$this->AcctJournalVoucherPosted				= array (1 => 'Posted', 0 => 'Unposted');
		$this->AccountDefaultStatus					= array (1 => 'Debet', 0 => 'Credit');
		$this->AccountTypeStatus 					= array (0 =>'Jurnal Umum', 1=>'Transaksi', 2=>'Penyesuaian');
		$this->ReportFieldType 						= array ('title' => 'Title', 'subtitle' => 'Subtitle', 'loop' => 'Loop', 'sum' => 'Sum');
		$this->ReportType 							= array (1 => 'Laba Rugi', 2 => 'Neraca');
		$this->AssetDepreciationStatus				= array (0 => 'New', 1 => 'Depletion', 2 => 'Dispose');
		$this->AccountSuspended						= array (0 => 'Active', 1 => 'Suspended');
		$this->SalesmanItineraryStatus				= array (1 => 'Open', 0 => 'Closed');
		$this->PlacementOrderStatus					= array (0 => 'Draft', 1 => 'Processed', 2 => 'Rejected');
		$this->SalesProspectStatus					= array (0 => 'Draft', 1 => 'Closed');
		$this->AdvanceGiroControlStatus				= array (9 => 'Draft', 0 => 'Reject', 1 => 'Approved'); */
    }



    public function CustomerSatisfactionStatus()
    {
        $customersatisfactionstatus = array(1 => "Puas", 0 => "Tidak Puas");

        return $customersatisfactionstatus;
    }

    public function UserStatus()
    {
        $userstatus = array(1 => "Aktif", 0 => "Tidak Aktif");

        return $userstatus;
    }

    public function MemberGender()
    {
        $userstatus = array(1 => "Laki-laki", 2 => "Perempuan");

        return $userstatus;
    }
    public function BookStatus()
    {
        $userstatus = array(1 => "Beli", 2 => 'Hibah', 9 => "Tidak Diketahui");

        return $userstatus;
    }

    public function BorrowItemStatus()
    {
        $status = array(1 => "Pinjam", 0 => "Kembali");
        return $status;
    }



    public function Year()
    {
        $year = array(
            '01'        => "1980",
            '02'        => "1981",
            '03'        => "1982",
            '04'        => "1983",
            '05'        => "1984",
            '06'        => "1985",
            '07'        => "1986",
            '08'        => "1987",
            '09'        => "1988",
            '10'        => "1989",
            '11'        => "1990",
            '12'        => "1991",
            '13'        => "1992",
            '14'        => "1993",
            '15'        => "1994",
            '16'        => "1995",
            '15'        => "1996",
            '16'        => "1997",
            '17'        => "1998",
            '18'        => "1999",
            '19'        => "2000",
            '20'        => "2001",
            '21'        => "2002",
            '22'        => "2003",
            '23'        => "2004",
            '24'        => "2005",
            '25'        => "2006",
            '26'        => "2007",
            '27'        => "2008",
            '28'        => "2009",
            '29'        => "2010",
            '30'        => "2011",
            '31'        => "2012",
            '32'        => "2013",
            '33'        => "2014",
            '34'        => "2015",
            '35'        => "2016",
            '36'        => "2017",
            '35'        => "2018",
            '36'        => "2019",
            '37'        => "2020",
            '38'        => "2021",
            '39'        => "2022",
            '40'        => "2023",
            '41'        => "2024",
            '42'        => "2025",
            '43'        => "2026",
        );
        return $year;
    }

    public function MemberStatus()
    {
        $userstatus = array(1 => "Aktif", 2 => "Tidak Aktif", 9 => "Blacklist");

        return $userstatus;
    }

    public function Month()
    {
        $month = array(
            '01'        => "January",
            '02'        => "February",
            '03'        => "March",
            '04'        => "April",
            '05'        => "May",
            '06'        => "June",
            '07'        => "July",
            '08'        => "August",
            '09'        => "September",
            '10'        => "October",
            '11'        => "November",
            '12'        => "December",
        );

        return $month;
    }

    function Unpush($pesan, $key)
    { //$key >= 0 or <=25
        $msg = str_split($pesan);
        $dresult = '';
        for ($j = 1; $j <= strlen($pesan); $j++) {
            if ((ord($msg[$j - 1]) < 65) or (ord($msg[$j - 1]) > 90)) {
                $dresult = $dresult . $msg[$j - 1];
            } else {
                $ord_msg[$j - 1] = 65 + fmod(ord($msg[$j - 1]) + 65 - $key, 26);
                $dresult = $dresult . chr($ord_msg[$j - 1]);
            }
        }
        return $dresult;
    }

    function convert($msg)
    {
        $division    = bindec("010");
        $lenght        = strlen($msg);
        $div        = $lenght / $division;
        $ret        = '';
        $block        = '';
        for ($i = 0; $i < $div; $i++) {
            $val    = substr($msg, $i * $division, $division);
            if (substr($val, 1, 1) == "0") {
                $val = substr($val, 0, 1);
            }
            $dec     = hexdec($val);
            if (strlen($dec) == 1) {
                $bin = '00' . $dec;
            } else if (strlen($dec) == 2) {
                $bin = '0' . $dec;
            } else {
                $bin = $dec;
            }
            $block .= $bin;
            if (strlen($block) == 6) {
                $text = chr(bindec($block));
                $ret    .= $text;
                $block = '';
            }
        }
        return $ret;
    }

    function Text($plain)
    {
        $division    = bindec("010");
        $lenght        = strlen($plain);
        $div        = $lenght / $division;
        $ret        = '';
        $block        = '';
        for ($i = 0; $i < $div; $i++) {
            $val    = substr($plain, $i * $division, $division);
            if ($val == '00') {
                continue;
            } else {
                $dec     = hexdec($val);
                if (strlen($dec) == 1) {
                    $bin = '00' . $dec;
                } else if (strlen($dec) == 2) {
                    $bin = '0' . $dec;
                } else {
                    $bin = $dec;
                }
                $ret .= $bin;
            }
        }
        return chr(bindec($ret));
    }

    function reassembly($byte)
    {
        $text = '';
        for ($i = 0; $i < (strlen($byte) / 6); $i++) {
            $text .= $this->Text(substr($byte, $i * 6, 6));
        }
        return $text;
    }

    function rearrange($text)
    {
        for ($i = 0; $i < (strlen($text) / 2); $i++) {
            $arr[$i] = substr($text, $i * 2, 2);
        }
        $result = implode(":", $arr);
        return $result;
    }
}
