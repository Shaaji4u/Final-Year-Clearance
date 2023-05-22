<?php
require_once('tcpdf_include.php');
session_start();
require_once '../settings/connection.php';
$user_name = $profile_Pics =$email=$state=$local_gov=$phone_no =$phone_no =$dateprint =$perm_address=$contact_address=$id_count=$total_amount_summary="";
$from_date = $to_date= "";		
		$date500 = new DateTime("Now");
		$J = date_format($date500,"D");
		$Q = date_format($date500,"d-F-Y, h:i:s A");
		$dateprint = "Printed On: ".$J.", ".$Q;	

		//$link ="?from_date=".$from_date."&to_date=".$to_date."&type=".$type;
if(!isset($_SESSION['staff_id'])){
	header("location: ../logout.php");
}
		
if(!isset($_GET['ticket_id'])){
	header("location: ../logout.php");
}else{
	$ticket_id = $_GET['ticket_id'];
	if($ticket_id ==""){
		header("location: ../logout.php");
	}
	$ticket_id = str_ireplace("_"," ",$ticket_id);
}
// create new PDF document

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF 
{
	// Page footer
		public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('dejavusans', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Linee Classic World - 2017 - - Page '.$this->getAliasNumPage().' Of '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		
		//getAliasNumPage() from the immediate line mean the current page
		//getAliasNbPages() from the immediate line mean the total number of pages
		//remember you can remove them and put a common string there
	}
}



$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Abdulraheem Sherif A');
$pdf->SetTitle('Linee Classic World');
$pdf->SetSubject('My Payment List');

$pdf->SetKeywords('Linee, Classic, Nigeria, World, Fashion');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// to remove default header use this
$pdf->setPrintHeader(false);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
// set alpha to semi-transparency

$html = '<table cellspacing="0" cellpadding="1" border="0" align="center">
    <tr >
        <td  align="center" colspan="3" style="font-size:15;font-weight:bold;color:blue" >Linee Classic World</td>
    </tr>
	<tr >
        <td  align="center" colspan="3" ><hr></td>
    </tr>
    <tr >
    	 <td align="left" style="font-size:7;font-weight:bold"><u>Head Office :</u> <br/> N<u>o</u> 66 Market Roads, Rumuomasi Port Harcourt <br/> River State Nigeria.</td>
		 <td align="left" style="font-size:7;font-weight:bold"><u>Branch Office :</u> <br/> N<u>o</u> 56 Old Aba Roads, Rumuobiakani Port Harcourt <br/> River State Nigeria.</td>
		 <td align="left" style="font-size:7;font-weight:bold"><u>Branch Office :</u> <br/> N<u>o</u> 105 Wojiroad, Rumuobiakani Port Harcourt <br/> River State Nigeria.</td>
    </tr>
	<tr >
        <td  align="center" colspan="3" ><hr></td>
    </tr>
	 <tr >
    	 <td colspan="3" align="center" style="font-size:6;">Contact Us :Call / SMS to: 08037984010 Or info@lineeclassicworld.com.com | Esales@lineeclassicworld.com.com | EGtalk: lineeconcept@gmail.com.</td>
    </tr>
	<tr >
        <td  align="center" colspan="3" ><hr></td>
    </tr>
    <tr>
       <td align="center" colspan="3" style="font-size:10;font-weight:bold;color:black">LIST OF ALL YOUR CLEARED PAYMENT ON '.$ticket_id.' </td>
    </tr>

</table>';
$pdf->writeHTML($html, true, false, true, false, '');


$html ='<table cellspacing="0" cellpadding="1" border="0" align="center">
    <tr style="bottom-border:1 solid;">
		<td align="Left" style="font-size:8;font-weight:bold;color:brown">PAYMENT SUMMARY LIST FOR - '.$_SESSION['my_name'].'</td> 
		<td  align="Right" style="font-size:8;">'.$dateprint.'</td> 
    </tr>
</table><hr>';

$pdf->writeHTML($html, true, false, false, false, '');


// -----------PERSONALINFORMATION GOODS DETAIL TABLE----------------------------------------------

$html1 ="";$status="1";
$stmt = $conn->prepare("SELECT  staff_work.work_id,staff_work.staff_id,staff_work.quantity,staff_work.sec_app,staff_work.date_secapp,work_booking.work_id,work_booking.price_quantity,work_booking.c_name,work_booking.sewing_cost FROM staff_work INNER JOIN work_booking ON  staff_work.work_id = work_booking.work_id 
where staff_work.sec_app=? and staff_work.status=? and staff_work.withdraw=? and staff_work.staff_id=? and staff_work.date_status = ? ORDER BY  staff_work.date_status DESC, staff_work.staff_id ASC ");
												$stmt->execute(array($status,$status,"0",$_SESSION['staff_id'],$ticket_id));
if ($stmt->rowCount () >= 1)
{
	 $html1 .= '<tr style="background-color:grey;color:yellow;">
			<th>S/N<u>o</u>.</th>
			<th>Customer Name</th>
			<th>Work ID N<u>o</u></th>
			<th>Date Work App</th>
			<th >Quantity </th>
			<th >Price (Pieces) </th>
			<th >Staff (%) </th>
			<th >Staff Pay </th>
		</tr>';
		$id=1;	
		$j=1;$data=$staff_name=$staff_id="";$tot_amount=$tot_amount_A=0;
		while($row_two = $stmt->fetch(PDO::FETCH_ASSOC))
		{
					$date500_two = new DateTime($row_two['date_secapp']);
					$date_two = date_format($date500_two,'d F, Y  h:i:s A');
				///
			$Amount_display = number_format($row_two['price_quantity'], 2);
			$sewing_cost =" &#8358; ".$Amount_display;
			
			$tot_amount_A = $tot_amount_A + ($row_two['price_quantity'] * $row_two['quantity']) ;
			
			$staf_pay = ((20/100)* $row_two['price_quantity']);
			
			$staff_total = $staf_pay * $row_two['quantity'];
			$tot_amount = $tot_amount + $staff_total;
			$staff_total = number_format($staff_total, 2);
			$staff_total =" &#8358; ".$staff_total;
			
			$staf_pay = number_format($staf_pay, 2);
			$staf_pay =" &#8358; ".$staf_pay;
			$html1 .= '<tr >
								<td>'.$j.'</td> 	
								<td>'.$row_two['c_name'].'</td>
								<td>'.$row_two['work_id'].'</td>
								<td>'.$date_two.'</td>
								<td>'.$row_two['quantity'].'</td>
								<td>'.$sewing_cost.'</td>
								<td>'.$staf_pay.'</td>
								<td>'.$staff_total.'</td>
								
						</tr>
						<tr width="400">
							<td align="Center" colspan ="6" style="font-size:8;"></td>
						</tr>';
						$id = $id + 1;
		}
		
		$tot_amount_A = number_format($tot_amount_A, 2);
		$tot_amount_A =" &#8358; ".$tot_amount_A;
		$tot_amount = number_format($tot_amount, 2);
		$tot_amount =" &#8358; ".$tot_amount;
		$html  = '<table border="1" cellpadding="1" width="100%">'.$html1.'
		<tr>
			<td style="text-align:right;color:blue" colspan="2">Total Amount (Pieces) :</td>
			<td style="text-align:left;"  colspan="2">'.$tot_amount_A.'</td>
			<td style="text-align:right;color:blue" colspan="2">Total Amount (Staff Pay) :</td>
			<td style="text-align:left;" colspan="2">'.$tot_amount.'</td>
		</tr></table>';
		// output the HTML content
		$pdf->writeHTML($html, true, false, false, false, '');
}
$pdf->Output('All_MyPay.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

