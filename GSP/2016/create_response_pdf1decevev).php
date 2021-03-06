<?php

define("DOMPDF_ENABLE_PHP", true);

require_once("dompdf/dompdf_config.inc.php");

include('website_db.php');

$sql_token_details = $_REQUEST['id'];
$sql_email_school = mysql_fetch_assoc(mysql_query("SELECT `email`, `attribute_1`, `tid` FROM lime_tokens_266617 WHERE `token` = '" . $sql_token_details . "'"));
$sql_data = mysql_fetch_assoc(mysql_query("SELECT * FROM lime_survey_266617 WHERE `token` = '" . $sql_token_details . "'"));

$sql_country = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `countries` WHERE `id` = '" . $sql_data['266617X34X1593'] . "'"));
$sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '" . $sql_data['266617X34X1594'] . "'"));


$address = "";
if ($sql_data['266617X34X1591'] != "") { //address1
    $address = $sql_data['266617X34X1591'];
}

if ($sql_data['266617X34X1592'] != "") { //address 2
    $address .=", " . $sql_data['266617X34X1592'];
}

if ($sql_data['266617X34X1656'] != "") { //city
    $address.=", " . $sql_data['266617X34X1656'];
}

if ($sql_data['266617X34X1611'] != "") { //district
    $address.=", " . $sql_data['266617X34X1611'];
}

if ($sql_data['266617X34X1594'] != "") { //state
    $address.=", " . $sql_state['name'];
}


$html = '<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Green School Programms Audit Portal</title>
<link rel="stylesheet" href="css/responses-report.css">
</head>

<body>
<script type="text/php">
		if ( isset($pdf) ) {
			$font = Font_Metrics::get_font("helvetica", "bold");
			$pdf->page_text(280, 15, "{PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));
		}
	</script>
<div class="cover">

	<img src="images/logo.png" width="436" height="118" class="logo">
	<h1>Responses for Green Schools Programme Audit 2016</h1>
	<div class="school-detail">
		<p><span>School Name:</span><span>';
$html .= $sql_data['266617X34X1590'];
$html .='</span></p>
		<p><span>Address:</span><span>';

//$html .= $sql_data['266617X34X1591'];
//if ($sql_data['266617X34X1656'] != "") {
//    $html .= $sql_data['266617X34X1656'].', ';
//}
//
//if ($sql_data['266617X34X1592'] != "") {
//    $html .= ' ';
//}
//$sql_data['266617X34X1592'];
//if ($sql_data['266617X34X1611'] != "") {
//    $html .= ' ';
//}
//$sql_data['266617X34X1611'];
//if ($sql_data['name'] != "") {
//    $html .= ' ';
//}
//$html .= ", ";
//$html .= $sql_country['name'];

$html .= $address;
$html .=', ' . $sql_country['name'];


$html .='</span></p>
		<p><span>Coordinator Name:</span><span>';
$html .= $sql_data['266617X34X1604'];
$html .='</span></p>
	</div>
	<div class="address-wrap">
		<img src="images/cover.png" width="100%">
		<div class="address">
			<p>Green Schools Programme <br />Centre for Science and Environment</p>
			<p>41, Tughlakabad Institutional Area, New Delhi. India - 110062<br/>
				Tel: +91-11 29955124, 29956110, 40616000<br/>
				http://www.greenschoolsprogramme.org/</p>
		</div>
	</div>
</div>
<div class="container">
	<h2 class="heading">School Profile</h2>
	<div class="wrapper">
		<ul class="list">
			<li>
				<p class="orange"><span>1</span><span>Name of the School / Institution</span></p>
				<p>';
$html .= $sql_data['266617X34X1590'];
$html .='</p>';
$html .='</li>
			<li>
				<p class="orange"><span>2</span><span>Address</span></p>
				<p>';
$html .= $address;
$html .=', ' . $sql_country['name'];
/*
  $html .= $sql_data['266617X34X1591'];
  if($sql_data['266617X34X1656'] !="")
  {
  $html .= ' ';
  }
  $sql_data['266617X34X1656'];
  if($sql_data['266617X34X1592'] !="")
  {
  $html .= ' ';
  }
  $sql_data['266617X34X1592'];
  if($sql_data['266617X34X1611'] !="")
  {
  $html .= ' ';
  }
  $sql_data['266617X34X1611'];
  if($sql_data['name'] !="")
  {
  $html .= ' ';
  }
  $sql_country['name'];
 */
$html .='</p>
			</li>';
$html .='<li>
				<p class="orange"><span>3</span><span>Telephone Number (Landline Number with STD code)</span></p>
				<p>(ISD) ';
$html .= $sql_data['266617X34X1597SQ001'];
$html .= '&nbsp;&nbsp; (STD) ';
$html .= $sql_data['266617X34X1597SQ003'];
$html .= '&nbsp;&nbsp; (NUMBER) ';
//$html .= number_format($sql_data['266617X34X1597SQ002'], $decimals = 0, $dec_point = ".", $thousands_sep = "");
$html .= $sql_data['266617X34X1597SQ002'];
$html .='</p>
			</li>
			<li>
				<p class="orange"><span>4</span><span>Mobile Number (Mobile Number with STD code)</span></p>
				<p>(ISD) ';
$html .= $sql_data['266617X34X1600SQ001'];
$html .= '&nbsp;&nbsp; (Number) ';
//$html .= number_format($sql_data['266617X34X1600SQ002'], $decimals = 0, $dec_point = ".", $thousands_sep = "");
$html .= $sql_data['266617X34X1600SQ002'];
$html .='</p>
			</li>
			<li>
				<p class="orange"><span>5</span><span>Principal Name</span></p>
				<p>';
$html .= $sql_data['266617X34X1602'];
$html .='</p>
			</li>
			<li>
				<p class="orange"><span>6</span><span>GSP Coordinator Name</span></p>
				<p>';
$html .= $sql_data['266617X34X1604'];
$html .='</p>
			</li>';
$html .='<li>
				<p class="orange"><span>7</span><span>GSP Coordinator Email</span></p>
				<p>';
$html .= $sql_data['266617X34X1605'];
$html .='</p>
			</li>';
$html .='<li>
				<p class="orange"><span>8</span><span>GSP Coordinator Mobile Number</span></p>
				<p>(ISD)';
$html .= number_format($sql_data['266617X34X1606SQ001']);
$html .= '&nbsp;&nbsp; (Number) ';
$html .= number_format($sql_data['266617X34X1606SQ002'], $decimals = 0, $dec_point = ".", $thousands_sep = "");
$html .='</p>
			</li>';
$html .='<li>
				<p class="orange"><span>9</span><span>Category Of The School</span></p>
				<p>';
$school_type = array(1 => "Day Scholar", 2 => "Day Boarding", 3 => "Residential", 4 => "Day Scholar + Day Boarding", 5 => "Day Boarding + Residential", 6 => "Day Scholar + Residential", 7 => "Day Scholar + Day Boarding + Residential");

$type = $sql_data['266617X34X1608'];
$html .= $school_type[$type];

$html .='</p>';
$html .='</li>
			<li>
				<p class="orange"><span>10</span><span>School Shifts</span></p>
				<p>';
if ($sql_data['266617X34X1609'] == "A1") {
    $html .= "Morning";
} elseif ($sql_data['266617X34X1609'] == "A2") {
    $html .= "Evening";
} elseif ($sql_data['266617X34X1609'] == "A3") {
    $html .= "Both";
}
$html .='</p>
			</li>
		</ul>
	</div>

	<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>



<h2 class="heading page_break">General Questions</h2>

	<div class="wrapper">
	
		<ul class="list">
			<li>
				<p class="orange"><span>1</span><span>How many levels does your school have?</span></p>';
$html .= '<p class="formanswertext">';
$html .= "Lowest level of grade:" . $sql_data['266617X32X1674SQ001'];
$html .= '</p>';
$html .= '<p>';
$html .= "Highest level of grade:" . $sql_data['266617X32X1674SQ002'];
$html .= '</p>';
$html .= '</li>';
$html .= '<li>
				<p class="orange"><span>2</span><span> Is your school single gender or mixed gender?</span></p>
				<p>';
if ($sql_data['266617X32X27'] == "A1") {
    $html .= "Only boys";
} elseif ($sql_data['266617X32X27'] == "A3") {
    $html .= "Only girls";
} elseif ($sql_data['266617X32X27'] == "A2") {
    $html .= "Mixed/Co-education";
}
$html .='</p>
			</li>';
$html .='<li>
				<p class="orange"><span>3</span><span> Which board of education does the school follow?</span></p>
				<p>';

if ($sql_data['266617X32X28'] == "1") {
    $html .="State Board of Education (please select name of your state from the list below if applicable)";
    $html .="<br>";
    $html .="State: " . " " . $sql_state['name'] . " ";
}
if ($sql_data['266617X32X28'] == 2) {
    $html .="Central Board of Secondary Education";
}
if ($sql_data['266617X32X28'] == 3) {
    $html .="Indian Certificate of Secondary Education";
}
if ($sql_data['266617X32X28'] == 4) {
    $html .="International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
}
if ($sql_data['266617X32X28'] == "-oth-") {
    $html .="Other: " . " '" . $sql_data['266617X32X28other'] . "' ";
}

$html .='</p>';
$html .='</li>';
$html .='<li>
				<p class="orange"><span>4</span><span> Total permanent population of the school</span></p>
			<table class="table">
					<tr>
						<th></th>
						<th>Male</th>
						<th>Female</th>
						<th>Total</th>
					</tr>
					<tr>
						<td>Students</td>
						<td>';
$html .=$sql_data['266617X32X33SQ001_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ001_SQ003'];
$html .='</td>
					</tr>
					
					<tr>
						<td>Teachers</td>
						<td>';
$html .=$sql_data['266617X32X33SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ002_SQ003'];
$html .='</td>
					</tr>
					
					<tr>
						<td>Non-Teaching Staff</td>
						<td>';
$html .=$sql_data['266617X32X33SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ003_SQ003'];
$html .='</td>
					</tr>
					
					<tr class="total">
						<td>Total</td>
						<td>';
$html .=$sql_data['266617X32X33SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X32X33SQ004_SQ003'];
$html .='</td>
					</tr>
				</table>';
$html .='</p>';
$html .='</li>';


$html .='<li>
				<p class="orange"><span>4(b)</span><span> How many visitors visit your school</span></p>
				<p>';
$html .=abs($sql_data['266617X32X2297']);
$html .='</p>
			</li>';


$html .='<li>
				<p class="orange"><span>5</span><span> What is the total number of working days of your school in a year?</span></p>
				<p>';
$html .=number_format($sql_data['266617X32X40'], $decimals = 0, $dec_point = ".", $thousands_sep = "");
$html .='</p>
			</li>';
$html .='<li>';
$html .='<p class="orange"><span>6</span><span> Month(s) in which the GSP audit was carried out?</span></p>
				<p>';
//$sql_values = mysql_query("select `266617X32X43SQ001_SQ001`, `266617X32X43SQ001_SQ002`, `266617X32X43SQ001_SQ003`, `266617X32X43SQ001_SQ004`, `266617X32X43SQ001_SQ005`, `266617X32X43SQ001_SQ006`, `266617X32X43SQ001_SQ007`, `266617X32X43SQ001_SQ008`, `266617X32X43SQ001_SQ009`, `266617X32X43SQ001_SQ010`, `266617X32X43SQ001_SQ011`, `266617X32X43SQ001_SQ012` from lime_survey_266617 WHERE `token`='".$sql_token_details."'"); 
$month = array();
if ($sql_data['266617X32X43SQ001_SQ001'] != "") {
    $month[] = "Jan";
}
if ($sql_data['266617X32X43SQ001_SQ003'] != "") {
    $month[] = "Feb";
}
if ($sql_data['266617X32X43SQ001_SQ002'] != "") {
    $month[] = "March";
}
if ($sql_data['266617X32X43SQ001_SQ004'] != "") {
    $month[] = "April";
}
if ($sql_data['266617X32X43SQ001_SQ005'] != "") {
    $month[] = "May";
}
if ($sql_data['266617X32X43SQ001_SQ006'] != "") {
    $month[] = "June";
}
if ($sql_data['266617X32X43SQ001_SQ007'] != "") {
    $month[] = "July";
}
if ($sql_data['266617X32X43SQ001_SQ008'] != "") {
    $month[] = "Aug";
}
if ($sql_data['266617X32X43SQ001_SQ009'] != "") {
    $month[] = "Sep";
}
if ($sql_data['266617X32X43SQ001_SQ010'] != "") {
    $month[] = "Oct";
}
if ($sql_data['266617X32X43SQ001_SQ011'] != "") {
    $month[] = "Nov";
}
if ($sql_data['266617X32X43SQ001_SQ012'] != "") {
    $month[] = "Dec";
}
$html .=implode($month, ', ');
$html .='</p>
			</li>';
$html .='<li>
				<p class="orange"><span>7</span><span> Where is the school located?</span></p>
				<p>';
if ($sql_data['266617X32X56'] == "A1") {
    $html .="Urban Area";
} else {
    $html .="Rural Area";
}
$html .='</p>
			</li>
			
		</ul>
	</div>';

$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>


<h2 class="heading section air"><img src="images/air.png" width="94" height="94">Air</h2>';

$html .='<div class="wrapper">
		<div class="task-area">
			<h3 class="task">Task 1: Air Audit Team</h3>';
$html .='<div class="answer clearfix">
					<h5>Teachers</h5>
			<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X4X2409SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X4X2409SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X4X2409SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X4X2409SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X4X2409SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X4X2409SQ003_SQ002'] . '</td></tr>';

$html .='</table>';


$html .='<h5>Administrative staff</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X4X2410SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X4X2410SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X4X2410SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X4X2410SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X4X2410SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X4X2410SQ003_SQ002'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X4X2410SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X4X2410SQ004_SQ002'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X4X2410SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X4X2410SQ005_SQ002'] . '</td></tr>';
$html .='</table>';


$html .='<h5>Students</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X4X2411SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ001_SQ002'] . '</td><td>' . $sql_data['266617X4X2411SQ001_SQ003'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X4X2411SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ002_SQ002'] . '</td><td>' . $sql_data['266617X4X2411SQ002_SQ003'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X4X2411SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ003_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ003_SQ003'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X4X2411SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ004_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ004_SQ003'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X4X2411SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ005_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ005_SQ003'] . '</td></tr>';
$html .='<tr><td>6.</td><td>' . $sql_data['266617X4X2411SQ006_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ006_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ006_SQ003'] . '</td></tr>';
$html .='<tr><td>7.</td><td>' . $sql_data['266617X4X2411SQ007_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ007_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ007_SQ003'] . '</td></tr>';
$html .='<tr><td>8.</td><td>' . $sql_data['266617X4X2411SQ008_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ008_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ008_SQ003'] . '</td></tr>';
$html .='<tr><td>9.</td><td>' . $sql_data['266617X4X2411SQ009_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ009_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ009_SQ003'] . '</td></tr>';
$html .='<tr><td>10.</td><td>' . $sql_data['266617X4X2411SQ010_SQ001'] . '</td> <td>' . $sql_data['266617X4X2411SQ010_SQ002'] . '</td> <td>' . $sql_data['266617X4X2411SQ010_SQ003'] . '</td></tr>';

$html .='</table>';




$html .='</div>';


$html .='</div>';
    
$html .='<h3 class="task">Task 2: Are the rooms in your school well-ventilated?</h3>';
		$html .='<ul class="list">
			<li>
				<p class="orange"><span>1</span><span>How many classrooms does your school have?</span></p>
				<p>';
$html .=number_format($sql_data['266617X4X1127']);
$html .='</p>
			</li>
			<li class="">
				<p class="orange"><span>2</span><span>Window-floor ratio of classrooms in the school.</span></p>
				<table class="table">
					<tr>
						<th>Details of the classroom (e.g. Class II section b)</th>
						<th>X = Area of floor (LxB)</th>
						<th>Y = Area of openings (LxH)</th>
						<th>Percentage of the floor area being ventilated (Y/X x 100)</th>
					</tr>
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ001_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ001_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ001_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ001_SQ004'], 2);
$html .='</td>
					</tr>
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ002_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ002_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ002_SQ004'], 2);
$html .='</td>
					</tr>
					
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ003_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ003_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ003_SQ004'], 2);
$html .='</td>
					</tr>
					
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ004_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ004_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ004_SQ004'], 2);
$html .='</td>
					</tr>

					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ005_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ005_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ005_SQ004'], 2);
$html .='</td>
					</tr>
					
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ006_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ006_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ006_SQ004'], 2);
$html .='</td>
					</tr>
					
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ007_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ007_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ007_SQ004'], 2);
$html .='</td>
					</tr>
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ008_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ008_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ008_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ008_SQ004'], 2);
$html .='</td>
					</tr>
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ009_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ009_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ009_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ009_SQ004'], 2);
$html .='</td>
					</tr>
					<tr>
						<td>';
$html .=$sql_data['266617X4X2197SQ010_SQ001'];
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ010_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ010_SQ003'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ010_SQ004'], 2);
$html .='</td>
					</tr>
					<tr class="total">
						<td>';
$html .='Total';
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ011_SQ002'], 2);
$html .='</td>
						<td>';
$html .=number_format($sql_data['266617X4X2197SQ011_SQ003'], 2);
$html .='</td>
						<td>';

$html .='</td>
					</tr>
					
				</table>
			</li>
			<li>
				<p class="orange"><span>3</span><span> What is the ownership used by the vehicles used in your school? Please choose what is applicable? </span></p>
				<p>';
if ($sql_data['266617X4X164'] == "A1") {
    $html .="School does not use or own vehicles";
} elseif ($sql_data['266617X4X164'] == "A2") {
    $html .="Operator-owned vehicles";
} elseif ($sql_data['266617X4X164'] == "A3") {
    $html .="School-owned vehicles";
} elseif ($sql_data['266617X4X164'] == "A4") {
    $html .="A combination of school-owned and operator-owned vehicles";
}
$html .='</p>
			</li>';

if ($sql_data['266617X4X164'] == "A4" || $sql_data['266617X4X164'] == "A3") {
    $html .='<li> 
				<p class="orange"><span>3(a)</span><span>Provide details of school-owned motorized vehicles .</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Buses</th>
						<th>Cars</th>
						<th>Vans</th>
						<th>Others</th>
						<th>Total</th>
					</tr>
				<tr>
						<td>No. of vehicles </td>
						<td>';
    $html .=$sql_data['266617X4X165SQ001_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ001_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ001_SQ008'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ001_SQ007'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ001_SQ003'];
    $html .='</td> 
					</tr> 
					<tr>
						<td>No. of vehicles more than five years old</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ002_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ002_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ002_SQ008'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ002_SQ007'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ002_SQ003'];
    $html .='</td> 
					</tr> 
					<tr>
						<td>Air conditioned </td>
						<td>';
    $html .=$sql_data['266617X4X165SQ004_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ004_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ004_SQ008'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ004_SQ007'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ004_SQ003'];
    $html .='</td> 
					</tr> 
					<tr>
						<td>No. of vehicles with PUC done </td>
						<td>';
    $html .=$sql_data['266617X4X165SQ005_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ005_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ005_SQ008'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ005_SQ007'];
    $html .='</td> 
						<td>';
    $html .=$sql_data['266617X4X165SQ005_SQ003'];
    $html .='</td>     
					</tr> 
                                        
<tr>
						<td>Parking area (m<sup>2</sup>)</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ006_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ006_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ006_SQ008'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X165SQ006_SQ007'];
    $html .='</td> 
						<td>';
    $html .=$sql_data['266617X4X165SQ006_SQ003'];
    $html .='</td>     
					</tr> 
				</table>
			</li>';


if ($sql_data['266617X4X2670_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X4X2670_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X4X2670']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}



    $html .='<li>
				<p class="orange"><span>3(b)</span><span>Specify the type of fuel used by your school vehicles:</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Diesel</th>
						<th>Petrol</th>
						<th>LPG</th>
						<th>CNG</th>
                                                                                                             <th>Electric</th>
						<th>Hybrid</th>
					</tr>
					<tr>
						<td>Bus</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ001_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ001_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ001_SQ003'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ001_SQ004'];
    $html .='</td><td>';
    $html .=$sql_data['266617X4X2217SQ001_SQ005'];
    $html .='</td>
        

<td>';
    $html .=$sql_data['266617X4X2217SQ001_SQ006'];
    $html .='</td>
        


					</tr>
					<tr>
						<td>Car</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ002_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ002_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ002_SQ003'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ002_SQ004'];
    $html .='</td>
        
<td>';
    $html .=$sql_data['266617X4X2217SQ002_SQ005'];
    $html .='</td>
        
<td>';
    $html .=$sql_data['266617X4X2217SQ002_SQ006'];
    $html .='</td>
					</tr>
					<tr>
						<td>Van</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ003_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ003_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ003_SQ003'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ003_SQ004'];
    $html .='</td>
        

<td>';
    $html .=$sql_data['266617X4X2217SQ003_SQ005'];
    $html .='</td>
        
<td>';
    $html .=$sql_data['266617X4X2217SQ003_SQ006'];
    $html .='</td>
					</tr>
                                        
<tr>
						<td>Other vehicles</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ005_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ005_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ005_SQ003'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ005_SQ004'];
    $html .='</td>
        
<td>';
    $html .=$sql_data['266617X4X2217SQ005_SQ005'];
    $html .='</td>
        <td>';
    $html .=$sql_data['266617X4X2217SQ005_SQ006'];
    $html .='</td>
					</tr>
					<tr class="total">
						<td>Sub-Total</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ004_SQ001'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ004_SQ002'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ004_SQ003'];
    $html .='</td>
						<td>';
    $html .=$sql_data['266617X4X2217SQ004_SQ004'];
    $html .='</td>
        
<td>';
    $html .=$sql_data['266617X4X2217SQ004_SQ005'];
    $html .='</td>
        
<td>';
    $html .=$sql_data['266617X4X2217SQ004_SQ006'];
    $html .='</td>
					</tr>
				</table>
			</li>';
    
    
    if ($sql_data['266617X4X2671_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X4X2671_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X4X2671']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}
}

$html .='<li>
				<p class="orange"><span>4</span><span>How many members of the school community use each type of transport:</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Students</th>
						<th>Teaching Staff</th>
						<th>Non Teaching Staff</th>
						<th>Total</th>
					</tr>
					<tr>
						<td>Schoool Bus</td>
						<td>';
$html .=$sql_data['266617X4X176SQ001_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ001_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ001_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>Public Bus</td>
						<td>';
$html .=$sql_data['266617X4X176SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ002_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ002_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>School Transport(Other than bus)</td>
						<td>';
$html .=$sql_data['266617X4X176SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ003_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ003_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>Public transport (other than bus, Metro, car pool)</td>
						<td>';
$html .=$sql_data['266617X4X176SQ0012_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ0012_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ0012_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ0012_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>Taxi four-wheeler</td>
						<td>';
$html .=$sql_data['266617X4X176SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ005_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ005_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>Taxi three-wheeler</td>
						<td>';
$html .=$sql_data['266617X4X176SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ006_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ006_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ006_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>Personal four-wheeler</td>
						<td>';
$html .=$sql_data['266617X4X176SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ007_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ007_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ007_SQ004'];
$html .='</td>
					</tr>                    
					<tr>
						<td>Personal two-wheeler</td>
						<td>';
$html .=$sql_data['266617X4X176SQ008_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ008_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ008_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ008_SQ004'];
$html .='</td>
					</tr> 
					
					<tr>
						<td>Bicycle</td>
						<td>';
$html .=$sql_data['266617X4X176SQ009_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ009_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ009_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ009_SQ004'];
$html .='</td>
					</tr> 
					<tr>
						<td>On foot</td>
						<td>';
$html .=$sql_data['266617X4X176SQ010_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ010_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ010_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ010_SQ004'];
$html .='</td>
					</tr> 
					<tr>
						<td>Others (non-motorised)</td>
						<td>';
$html .=$sql_data['266617X4X176SQ011_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ011_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ011_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ011_SQ004'];
$html .='</td>
					</tr> 

					<tr class="total">
						<td>Sub-Total</td>
						<td>';
$html .=$sql_data['266617X4X176SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ004_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X4X176SQ004_SQ004'];
$html .='</td>
					</tr>
				</table>
			</li> 


				<li>
				<p class="orange"><span>5</span><span> How many students suffer from respiratory ailments ?</span></p>
				<p>';
$html .=number_format($sql_data['266617X4X184']);
$html .='</p>
			</li>    
			
			<li>
				<p class="orange"><span>6</span><span> Does the school laboratory have air quality monitoring equipment?</span></p>
				<p>';
if ($sql_data['266617X4X187'] == "Y") {
    $html .="Yes";
} else {
    $html .= "No";
}
$html .='</p>
			</li>';

if ($sql_data['266617X4X2252_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X4X2252_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X4X2252']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}


if ($sql_data['266617X4X187'] == "N") {

    $html .='<li>
				<p class="orange"><span>6(a)</span><span> If No, is there an air quality monitoring station (private or government) close to your school?</span></p>
				<p>';
    if ($sql_data['266617X4X2606'] == "Y") {
        $html .="Yes";
    } else {
        $html .= "No";
    }
    $html .='</p>
			</li>';
}



$html .='</ul>
	</div>  

	
	


<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>


	<h2 class="heading section energy page_break"><img src="images/energy.png" width="94" height="94">Energy</h2>';


$html .='<div class="wrapper">
		<div class="task-area">
			<h3 class="task">Task 1: Energy Audit Team</h3>';
$html .='<div class="answer clearfix">
					<h5>Teachers</h5>
			<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X8X2491SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X8X2491SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X8X2491SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X8X2491SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X8X2491SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X8X2491SQ003_SQ002'] . '</td></tr>';

$html .='</table>';


$html .='<h5>Administrative staff</h5>';

$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X8X2492SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X8X2492SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X8X2492SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X8X2492SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X8X2492SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X8X2492SQ003_SQ002'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X8X2492SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X8X2492SQ004_SQ002'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X8X2492SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X8X2492SQ005_SQ002'] . '</td></tr>';
$html .='</table>';


$html .='<h5>Students</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X8X2493SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ001_SQ002'] . '</td><td>' . $sql_data['266617X8X2493SQ001_SQ003'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X8X2493SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ002_SQ002'] . '</td><td>' . $sql_data['266617X8X2493SQ002_SQ003'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X8X2493SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ003_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ003_SQ003'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X8X2493SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ004_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ004_SQ003'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X8X2493SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ005_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ005_SQ003'] . '</td></tr>';
$html .='<tr><td>6.</td><td>' . $sql_data['266617X8X2493SQ006_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ006_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ006_SQ003'] . '</td></tr>';
$html .='<tr><td>7.</td><td>' . $sql_data['266617X8X2493SQ007_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ007_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ007_SQ003'] . '</td></tr>';
$html .='<tr><td>8.</td><td>' . $sql_data['266617X8X2493SQ008_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ008_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ008_SQ003'] . '</td></tr>';
$html .='<tr><td>9.</td><td>' . $sql_data['266617X8X2493SQ009_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ009_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ009_SQ003'] . '</td></tr>';
$html .='<tr><td>10.</td><td>' . $sql_data['266617X8X2493SQ010_SQ001'] . '</td> <td>' . $sql_data['266617X8X2493SQ010_SQ002'] . '</td> <td>' . $sql_data['266617X8X2493SQ010_SQ003'] . '</td></tr>';

$html .='</table>';





$html .='</div>';


$html .='</div>
	
	   <ul class="list">
			<li>
				<p class="orange"><span>1</span><span> Does your school have access to an electricity bill?</span></p>
				<p>';
if ($sql_data['266617X8X237'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';


if ($sql_data['266617X8X2412_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X8X2412_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X8X2412']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}



$html .='<li>
				<p class="orange"><span>2</span><span> Does your school have its own vehicles?</span></p>
				<p>';
if ($sql_data['266617X8X2274'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';

$html .='<li>
				<p class="orange"><span>3</span><span>Provide the details of total energy consumed by the school</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Quantity consumed/monthly average</th>
						<th>Energy consumed in Megajoules (MJ)</th>
						<th>Type of use</th>
					</tr>
					<tr>
						<td>Electricity from the board (kwh)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ001_SQ001'];
$html .='</td>
						<td>';
$html .= $sql_data['266617X8X2180SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ001_SQ003'];
$html .='</td>
					</tr>
					
					
						<tr>
						<td>Electricity from generator (diesel) (litres)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ014_SQ001'];
$html .='</td>
						<td>';
$html .= $sql_data['266617X8X2180SQ014_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ014_SQ003'];
$html .='</td>
					</tr>
					
					
					<tr>
						<td>Petrol (litres)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ002_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Diesel (litres)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ003_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>CNG (kilogrammes)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ004_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Kerosene (litres)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ005_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Coal (kilogrammes)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ006_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ006_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Wood (kilogrammes)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ007_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ007_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Animal waste (kilogrammes)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ008_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ008_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ008_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Solar (kwh)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ009_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ009_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ009_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Wind (kwh)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ010_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ010_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ010_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>LPG (kilogrammes)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ011_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ011_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ011_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Piped Natural Gas (kilogrammes)</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ015_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ015_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ015_SQ003'];
$html .='</td>
					</tr>
					
					<tr class="total">
						<td>Total</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ013_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2180SQ013_SQ002'];
$html .='</td>
						
					</tr>
				</table>
			</li>';



if ($sql_data['266617X8X2668_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X8X2668_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X8X2668']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}





$html .='<li>
				<p class="orange page_break"><span>4</span><span>What appliances does your school have?</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Number</th>
						<th>Size</th>
						<th>BEE Star Rating</th>
					</tr>
					<tr>
						<td>Air Conditioners</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ001_SQ001'];
$html .='</td>
						<td>';
$html .= $sql_data['266617X8X2415SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ001_SQ003'];
$html .='</td>
					</tr>
					
					
						<tr>
						<td>Refrigerator</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ002_SQ001'];
$html .='</td>
						<td>';
$html .= $sql_data['266617X8X2415SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ002_SQ003'];
$html .='</td>
					</tr>
					
					
					<tr>
						<td>Microwave</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ003_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Tube Lights</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ004_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>CFL Bulbs</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ005_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>LED Lights</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ006_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ006_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Fans</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ007_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X8X2415SQ007_SQ003'];
$html .='</td>
					</tr>
					
				</table>
			</li>';







if ($sql_data['266617X8X2669_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X8X2669_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X8X2669']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}


$html .='<h3 class="task page_break">Task 3: Is your school using any renewable sources of energy?</h3>';


$html .='<li>
				<p class="orange"><span>5</span><span> What is the average number of sunny days in your area?</span></p>
				<p>';
$html .= number_format($sql_data['266617X8X260']);
$html .='</p>
			</li>';

$html .='<li>
				<p class="orange"><span>6</span><span> Are there any alternate sources of energy employed/ installed in your school?</span></p>
				<p>';
if ($sql_data['266617X8X261'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';
if ($sql_data['266617X8X261'] == "Y") {
    $html .='<li>
				<p class="orange"><span>6(a)</span><span> Name the alternate sources of energy employed/ installed in your school?</span></p>
				<p>';
    if ($sql_data['266617X8X262SQ001'] == "Y") {
        $html .= "Solar";
    }
    if ($sql_data['266617X8X262SQ002'] == "Y") {
        $html .= ", Wind";
    }
    if ($sql_data['266617X8X262SQ003'] == "Y") {
        $html .= ", Hydro";
    }
    if ($sql_data['266617X8X262SQ004'] == "Y") {
        $html .= ", Combination of solar and wind";
    }
    $html .='</p>
			</li>';
}
if ($sql_data['266617X8X2634_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">Supporting Documents</div>
		<ol class="support-docs">';
    if ($sql_data['266617X8X2634_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X8X2634']);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '</ul>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school for energy chapter.";
    $html .='</div>';
}

$html .='</ol>
	</div>';


$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
		
<h2 class="heading section food page_break"><img src="images/food.png" width="94" height="94">Food</h2>';

$html .='<div class="wrapper">
		<div class="task-area">
			<h3 class="task">Task 1: Food Audit Team</h3>';
$html .='<div class="answer clearfix">
					<h5>Teachers</h5>
			<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X36X2501SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X36X2501SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X36X2501SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X36X2501SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X36X2501SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X36X2501SQ003_SQ002'] . '</td></tr>';

$html .='</table>';


$html .='<h5>Administrative staff</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X36X2502SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X36X2502SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X36X2502SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X36X2502SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X36X2502SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X36X2502SQ003_SQ002'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X36X2502SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X36X2502SQ004_SQ002'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X36X2502SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X36X2502SQ005_SQ002'] . '</td></tr>';
$html .='</table>';


$html .='<h5>Students</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X36X2503SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ001_SQ002'] . '</td><td>' . $sql_data['266617X36X2503SQ001_SQ003'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X36X2503SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ002_SQ002'] . '</td><td>' . $sql_data['266617X36X2503SQ002_SQ003'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X36X2503SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ003_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ003_SQ003'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X36X2503SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ004_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ004_SQ003'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X36X2503SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ005_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ005_SQ003'] . '</td></tr>';
$html .='<tr><td>6.</td><td>' . $sql_data['266617X36X2503SQ006_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ006_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ006_SQ003'] . '</td></tr>';
$html .='<tr><td>7.</td><td>' . $sql_data['266617X36X2503SQ007_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ007_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ007_SQ003'] . '</td></tr>';
$html .='<tr><td>8.</td><td>' . $sql_data['266617X36X2503SQ008_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ008_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ008_SQ003'] . '</td></tr>';
$html .='<tr><td>9.</td><td>' . $sql_data['266617X36X2503SQ009_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ009_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ009_SQ003'] . '</td></tr>';
$html .='<tr><td>10.</td><td>' . $sql_data['266617X36X2503SQ010_SQ001'] . '</td> <td>' . $sql_data['266617X36X2503SQ010_SQ002'] . '</td> <td>' . $sql_data['266617X36X2503SQ010_SQ003'] . '</td></tr>';

$html .='</table>';

$html .='</div>';

$html .='</div>';

$html .='<ul class="list">
			<li>
				<p class="orange"><span>1</span><span>  Does your school have a provision/space to sell packaged food items within the campus</span></p>
				<p>';
if ($sql_data['266617X36X1858'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>
			
		<li>
				<p class="orange"><span>2</span><span> Does your school serve midday meals?</span></p>
				<p>';
if ($sql_data['266617X36X1859'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';
if ($sql_data['266617X36X1859'] == "N") {
    $html .='<li>
				<p class="orange"><span>2(a)</span><span>  Do students bring their own lunch from home?</span></p>
				<p>';
    if ($sql_data['266617X36X1860'] == "Y") {
        $html .="Yes";
    } else {
        $html .="No";
    }
    $html .='</p>
			</li>';
}




if ($sql_data['266617X36X2666_filecount'] > 0) {

    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X36X2666_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X36X2666']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}


if ($sql_data['266617X36X1859'] == "N" && $sql_data['266617X36X1860'] == "Y") {

    $html .='<li><p class="orange"><span>2(a)(1) </span><span>How many students out of total student population bring home-made lunch?</span></p><p>';
    if ($sql_data['266617X36X1861'] != "") {
        $html .=$sql_data['266617X36X1861'];
    }
    $html .='</p></li>';

    $html .='<li><p class="orange"><span>2(a)(2) </span><span>Of the students who bring lunch from home, how many bring packaged food?</span></p><p>';
    if ($sql_data['266617X36X1862'] != "") {
        $html .=$sql_data['266617X36X1862'];
    }
    $html .='</p></li>';

    $html .='<li><p class="orange"><span>2(a)(3) </span><span>Do teachers have the responsibility to ensure that students are carrying lunch from home?</span></p><p>';
    if ($sql_data['266617X36X1863'] != "") {
        if ($sql_data['266617X36X1863'] == "Y") {
            $html .="Yes";
        } else {
            $html .="No";
        }
    }
    $html .='</p></li>';
}


/*
  $html .='<li>
  <p class="orange"><span>3</span><span> Do teachers have the responsibility to ensure if the students are carrying lunch from home?</span></p>
  <p>';
  if($sql_data['266617X36X1863'] == "Y")
  {
  $html .="Yes";
  }
  else
  {
  $html .="No";
  }
  $html .='</p>
  </li>';
 */

$html .='<li>
				<p class="orange"><span>3</span> What kind of food is being served / sold in your school</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Please count all flavours/variants available in the school canteen separately</th>
						<th>Total number of items sold in a month in the canteen</th>
						<th>Month the food items were sold in</th>
					</tr>
					<tr>
						<td>Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ001_SQ002'];
$html .='</td>
						<td>';
$html .= $sql_data['266617X36X1871SQ001_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ001_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee, Foodles, Maggi, etc</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ002_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Potato fries and Burgers</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ003_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Confectionery items (chocolate, candies, gums)</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ004_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Ice-cream</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ005_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Carbonated beverages</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ006_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ006_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Sugar sweetened noncarbonated beverages</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ007_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ007_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ008_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ008_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ008_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Packaged/Bottled Energy Drinks</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ009_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ009_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X36X1871SQ009_SQ003'];
$html .='</td>
					</tr>
				</table>
			</li>
		';




if ($sql_data['266617X36X2667_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X36X2667_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X36X2667']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}


$html .='<li>
				<p class="orange"><span>4</span><span> Does your school serve traditional Indian snacks?</span></p>
				<p>';
if ($sql_data['266617X36X2238'] == "Y") {
    $html .= "Yes";
} else {
    $html .= "No";
}
$html .='</p>
			</li>';
if ($sql_data['266617X36X2238'] == "Y") {
    $html .='<li>
				<p class="orange"><span>4(a)</span><span> Please provide the details:</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Number of plates sold when on the menu</th>
					</tr>
					<tr>
						<td>Samosas</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2239SQ001_SQ001']);
    $html .='</td>
					</tr>
					<tr>
						<td>Idli/vada and sambhar</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2239SQ002_SQ001']);
    $html .='</td>
					</tr>
					<tr>
						<td>Pav bhaji</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2239SQ003_SQ001']);
    $html .='</td>
					</tr>
					<tr>
						<td>Momos</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2239SQ004_SQ001']);
    $html .='</td>
					</tr>
					<tr>
						<td>Others</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2239SQ005_SQ001']);
    $html .='</td>
					</tr>
					
				</table>
			</li>';



    $html .='<li>
				<p class="orange"><span>4(b)</span><span> Give descriptions for rare local snacks served in your school:?</span></p>
				<p>';
    $html .=$sql_data['266617X36X2640'];
    $html .='</p>
			</li>';
}

$html .='<li>
				<p class="orange"><span>5</span><span> Does your school serve traditional Indian beverages?</span></p>
				<p>';
if ($sql_data['266617X36X2246'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';

if ($sql_data['266617X36X2246'] == "Y") {
    $html .='<li>
				<p class="orange"><span>5(a)</span><span> Details are as follows:</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Number of servings sold when on the menu</th>
					</tr>
					<tr>
						<td>Nimboo pani</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2247SQ001_SQ001']);
    $html .='</td>
					</tr>
					
						<tr>
						<td>Sweet lassi</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2247SQ003_SQ001']);
    $html .='</td>
					</tr>
					
					<tr>
						<td>Salted butter milk</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2247SQ002_SQ001']);
    $html .='</td>
					</tr>
				
					<tr>
						<td>Aam Panna</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2247SQ004_SQ001']);
    $html .='</td>
					</tr>
					
					<tr>
						<td>Others</td>
						<td>';
    $html .=number_format($sql_data['266617X36X2247SQ005_SQ001']);
    $html .='</td>
					</tr>
					
				</table>
			</li>';
}

$html .='<li>
				<p class="orange"><span>6</span><span> Does the school distribute packaged food items as rewards during schools events?</span></p>
				<p>';
if ($sql_data['266617X36X1864'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';
if ($sql_data['266617X36X1864'] == "Y") {
    $html .='<li>
				<p class="orange"><span>6(a)</span><span> Please provide details</span></p>
				<p>';
    $html .=$sql_data['266617X36X1865'];
    $html .='</p>
			</li>';
}

$html .='<li>
				<p class="orange"><span>7</span><span>  Does the school distribute chocolates/similar products as refreshments during schools events?</span></p>
				<p>';
if ($sql_data['266617X36X1866'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';

if ($sql_data['266617X36X1866'] == "Y") {
    $html .='<li>
				<p class="orange"><span>7(a)</span><span>  Please provide the names?</span></p>
				<p>';
    $html .=$sql_data['266617X36X1867'];
    $html .='</p>
			</li>';
}

$html .='<li>
				<p class="orange"><span>8</span><span> Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</span></p>
				<p>';
if ($sql_data['266617X36X1868'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';
if ($sql_data['266617X36X1868'] == "Y") {
    $html .='<li>
				<p class="orange"><span>8(a)</span><span> Does the school distribute packaged food items as rewards during schools events?</span></p>
				<p>';
    $html .=$sql_data['266617X36X1869'];
    $html .='</p>
			</li>';

    $html .='<li>
				<p class="orange"><span>8(b)</span><span>  Are their banners, brochures, hoardings, stalls etc. put-up during the events?</span></p>
				<p>';
    if ($sql_data['266617X36X1870'] == "Y") {
        $html .="Yes";
    } else {
        $html .="No";
    }
    $html .='</p>
			</li>';
}


if ($sql_data['266617X36X2259_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X36X2259_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X36X2259']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}

$html .='</ul>
	</div>';



$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>


	<h2 class="heading section land page_break"><img src="images/land.png" width="94" height="94">Land</h2>';

$html .='<div class="wrapper">
		<div class="task-area">
			<h3 class="task">Task 1: Land Audit Team</h3>';
$html .='<div class="answer clearfix">
					<h5>Teachers</h5>
			<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X7X2526SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X7X2526SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X7X2526SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X7X2526SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X7X2526SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X7X2526SQ003_SQ002'] . '</td></tr>';

$html .='</table>';


$html .='<h5>Administrative staff</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X7X2532SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X7X2532SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X7X2532SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X7X2532SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X7X2532SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X7X2532SQ003_SQ002'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X7X2532SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X7X2532SQ004_SQ002'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X7X2532SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X7X2532SQ005_SQ002'] . '</td></tr>';
$html .='</table>';


$html .='<h5>Students</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X7X2540SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ001_SQ002'] . '</td><td>' . $sql_data['266617X7X2540SQ001_SQ003'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X7X2540SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ002_SQ002'] . '</td><td>' . $sql_data['266617X7X2540SQ002_SQ003'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X7X2540SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ003_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ003_SQ003'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X7X2540SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ004_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ004_SQ003'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X7X2540SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ005_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ005_SQ003'] . '</td></tr>';
$html .='<tr><td>6.</td><td>' . $sql_data['266617X7X2540SQ006_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ006_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ006_SQ003'] . '</td></tr>';
$html .='<tr><td>7.</td><td>' . $sql_data['266617X7X2540SQ007_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ007_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ007_SQ003'] . '</td></tr>';
$html .='<tr><td>8.</td><td>' . $sql_data['266617X7X2540SQ008_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ008_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ008_SQ003'] . '</td></tr>';
$html .='<tr><td>9.</td><td>' . $sql_data['266617X7X2540SQ009_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ009_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ009_SQ003'] . '</td></tr>';
$html .='<tr><td>10.</td><td>' . $sql_data['266617X7X2540SQ010_SQ001'] . '</td> <td>' . $sql_data['266617X7X2540SQ010_SQ002'] . '</td> <td>' . $sql_data['266617X7X2540SQ010_SQ003'] . '</td></tr>';

$html .='</table>';

$html .='</div>';

$html .='</div>';



$html .='<h3 class="task">Task 2: Measure the four critical areas of your school campus</h3>';

$html .='<ul class="list">
			<li>
				<p class="orange"><span>1</span><span> Complete the table:</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Your school�s area</th>
					</tr>
					
						<tr>
						<td>Site area in square meter (m2)</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ010_SQ002']);
$html .='</td>
					</tr>
					
					<tr>
						<td>Ground coverage area</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ001_SQ002']);
$html .='</td>
					</tr>
					<tr>
						<td>Green landscaped area on-ground</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ002_SQ002']);
$html .='</td>
					</tr>
					
					<tr>
						<td>Surface parking area</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ004_SQ002']);
$html .='</td>
					</tr>
					<tr>
						<td>Play area that is paved/ concrete on ground</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ005_SQ002']);
$html .='</td>
					</tr>
					
					<tr>
						<td>Play area that has grass on ground
</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ006_SQ002']);
$html .='</td>
					</tr>
			
						<tr>
						<td>Service Area on ground</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ007_SQ002']);
$html .='</td>
						</tr>
						
							<tr>
						<td>Roof and terrace area</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ011_SQ002']);
$html .='</td>
						</tr>
						
							<tr>
						<td>Green cover on exposed roof & terrace</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ012_SQ002']);
$html .='</td>
						</tr>
						
							<tr>
						<td>Total built up/constructed area</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ013_SQ002']);
$html .='</td>
						</tr>
						
						<tr>
						<td>Total no. of floors</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ014_SQ002']);
$html .='</td>
						</tr>
					
				
					<tr>
						<td>Others</td>
						<td>';
$html .=number_format($sql_data['266617X7X1810SQ008_SQ002']);
$html .='</td>
					</tr>
				
				
				</table>
			</li>';



$html .='<h3 class="task">Task 3: Explore the number of species of plants and animals in your school</h3>           
		';

$html .='<li>
				<p class="orange"><span>3</span><span> How many species of plants and animals exist in your school?</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Native</th>
						<th>Exotic</th>
						<th>Total</th>
					</tr>
					<tr>
						<td>Plants</td>
						<td>';
$html .=$sql_data['266617X7X189SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X7X189SQ001_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X7X189SQ001_SQ004'];
$html .='</td>
					</tr>
					<tr>
						<td>Animals</td>
						<td>';
$html .=$sql_data['266617X7X189SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X7X189SQ003_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X7X189SQ003_SQ004'];
$html .='</td>
					</tr>
					
				</table>
			</li>';

$html .='
			<h3 class="task">Task 4: Find out if your school uses pesticides</h3>           
			';

$html .='<li>
				<p class="orange"><span>4</span><span> Do you use chemical based pesticides in your school green cover?</span></p>
				<p>';
if ($sql_data['266617X7X196'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';

if ($sql_data['266617X7X2258_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X7X2258_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X7X2258']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}

$html .='</ul>
	</div>';

$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>


	<h2 class="heading section water"><img src="images/water.png" width="94" height="94">Water</h2>';

$html .='<div class="wrapper">
		<div class="task-area">
			<h3 class="task">Task 1: Water Audit Team</h3>';
$html .='<div class="answer clearfix">
					<h5>Teachers</h5>
			<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X37X2406SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X37X2406SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X37X2406SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X37X2406SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X37X2406SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X37X2406SQ003_SQ002'] . '</td></tr>';

$html .='</table>';

$html .='<h5>Administrative staff</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X37X2407SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X37X2407SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X37X2407SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X37X2407SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X37X2407SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X37X2407SQ003_SQ002'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X37X2407SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X37X2407SQ004_SQ002'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X37X2407SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X37X2407SQ005_SQ002'] . '</td></tr>';
$html .='</table>';


$html .='<h5>Students</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X37X2408SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ001_SQ002'] . '</td><td>' . $sql_data['266617X37X2408SQ001_SQ003'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X37X2408SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ002_SQ002'] . '</td><td>' . $sql_data['266617X37X2408SQ002_SQ003'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X37X2408SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ003_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ003_SQ003'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X37X2408SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ004_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ004_SQ003'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X37X2408SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ005_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ005_SQ003'] . '</td></tr>';
$html .='<tr><td>6.</td><td>' . $sql_data['266617X37X2408SQ006_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ006_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ006_SQ003'] . '</td></tr>';
$html .='<tr><td>7.</td><td>' . $sql_data['266617X37X2408SQ007_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ007_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ007_SQ003'] . '</td></tr>';
$html .='<tr><td>8.</td><td>' . $sql_data['266617X37X2408SQ008_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ008_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ008_SQ003'] . '</td></tr>';
$html .='<tr><td>9.</td><td>' . $sql_data['266617X37X2408SQ009_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ009_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ009_SQ003'] . '</td></tr>';
$html .='<tr><td>10.</td><td>' . $sql_data['266617X37X2408SQ010_SQ001'] . '</td> <td>' . $sql_data['266617X37X2408SQ010_SQ002'] . '</td> <td>' . $sql_data['266617X37X2408SQ010_SQ003'] . '</td></tr>';

$html .='</table>';

$html .='</div>';

$html .='</div>';



$html .='<h3 class="task">Task 2: How much water does your school use?</h3>';

$html .='<ul class="list">';


$html .='<li>
				<p class="orange"><span>1</span><span>  Calculate your school�s water consumption, per activity. </span></p>
				<table class="table page_break">
					<tr>
						<th>Activity</th>
						<th>Total Quantity (litres per day)</th>
						
					</tr>
					<tr>
						 <td>Drinking</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ001_SQ001'];
$html .='</td>
					</tr>	
						<tr>
						 <td>Toilet flushing</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ002_SQ001'];
$html .='</td>
					</tr>
					
					<tr>
						 <td>Personal cleaning</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ003_SQ001'];
$html .='</td>
					</tr>
					
					<tr>
						 <td>Washing clothes</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ004_SQ001'];
$html .='</td>
					</tr>
					
					<tr>
						 <td>Cooking</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ005_SQ001'];
$html .='</td>
					</tr>
					<tr>
						 <td>Cleaning Utensils</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ006_SQ001'];
$html .='</td>
					</tr>
					<tr>
						 <td>Washing Vegetables</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ007_SQ001'];
$html .='</td>
					</tr>
					<tr>
						 <td>Mopping floors</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ008_SQ001'];
$html .='</td>
					</tr>
					<tr>
						 <td>Gardening</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ009_SQ001'];
$html .='</td>
					</tr>
					
					<tr>
						 <td>Total</td>
						<td>';
$html .=$sql_data['266617X37X1883SQ010_SQ001'];
$html .='</td>
					</tr>
					
				</table>
			</li>';

$html .='<h3 class="task">Task 3: What are the sources, supply and storage of water in your school</h3>';

$html .='<li>
				<p class="orange"><span>2</span><span> Where does the water your school uses, come from?</span></p>
				<p>';
$water_come_from = array();
if ($sql_data['266617X37X1884SQ001'] != "") {
    $water_come_from[] = "Ground water";
}
if ($sql_data['266617X37X1884SQ002'] != "") {
    $water_come_from[] = "Surface water";
}
if ($sql_data['266617X37X1884SQ003'] != "") {
    $water_come_from[] = "Rain water";
}
if ($sql_data['266617X37X1884SQ004'] != "") {
    $water_come_from[] = "Recycled waste water";
}

$html .=implode($water_come_from, ', ');

$html .='</p>
			</li>';



$html .='<li>
				<p class="orange"><span>3</span><span> Who supplies the water in your school?</span></p>
				<p>';

$Who_supplies_water = array();
if ($sql_data['266617X37X2303SQ001'] != "") {
    $Who_supplies_water[] = "Municipality";
}
if ($sql_data['266617X37X2303SQ002'] != "") {
    $Who_supplies_water[] = "Panchayat";
}
if ($sql_data['266617X37X2303SQ003'] != "") {
    $Who_supplies_water[] = "Public Health Engineering Department (PHED)";
}
if ($sql_data['266617X37X2303SQ004'] != "") {
    $Who_supplies_water[] = "Private supplier";
}
if ($sql_data['266617X37X2303SQ005'] != "") {
    $Who_supplies_water[] = "School's own supply (bore well, rainwater harvesting facility, etc)";
}

$html .=implode($Who_supplies_water, ', ');

$html .='</p>
			</li>';


$html .='<li>
				<p class="orange"><span>4</span><span>  Does your school get daily water supply?</span></p>
				<p>';
if ($sql_data['266617X37X1885'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';


if ($sql_data['266617X37X1885'] == "Y") {
    $html .='<li>
				<p class="orange"><span>4(a)</span><span> If supply of water is daily, please tick the correct option</span></p>
				<p>';

    $water_supply_time = array('A1' => "=1 hours", 'A2' => "2-6 hours", 'A3' => "7-12 hours", 'A4' => "13-18 hours", 'A5' => "19-24 hours");

    $time = $sql_data['266617X37X1886'];
    $html .=$water_supply_time[$time];
    $html .='</p>
			</li>';
}

if ($sql_data['266617X37X1885'] == "N") {

    $html .='<li>
				<p class="orange"><span>4(b)</span><span> If supply of water is not daily, please tick the correct option</span></p>
				<p>';

    $water_supply_not_daily = array('A1' => "=1 day", 'A2' => "2 days in a week", 'A3' => "3 days in a week", 'A4' => "Every alternate day in a week");

    $time = $sql_data['266617X37X1887'];
    $html .=$water_supply_not_daily[$time];
    $html .='</p>
			</li>';
}


$html .='<h3 class="task">Task 4: What are the water conservation practices followed in your school?</h3>';

$html .='<li>
				<p class="orange"><span>5</span><span>  What are the water conservation practices your school follows.</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Yes / No</th>
						
					</tr>
					<tr>
						<td>
Does your school have any water and sanitation policy?</td>
						<td>';
if ($sql_data['266617X37X2320SQ002'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
If your school has an eco-club, do they have water component?</td>
						<td>';
if ($sql_data['266617X37X2320SQ002'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Do all tanks in the school have float valves installed to stop overflow?</td>
						<td>';
if ($sql_data['266617X37X2320SQ003'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Do the drinking water points have spill proof taps to check overflow?<</td>
						<td>';
if ($sql_data['266617X37X2320SQ004'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Does your school use appliances with a quick-wash setting?</td>
						<td>';
if ($sql_data['266617X37X2320SQ005'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Are dual flush systems installed in the toilets?</td>
						<td>';
if ($sql_data['266617X37X2320SQ006'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Does your school encourage bottled water for drinking water?</td>
						<td>';
if ($sql_data['266617X37X2320SQ007'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Does your school grow local plant species which require limited amount of water to grow?</td>
						<td>';
if ($sql_data['266617X37X2320SQ008'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Has your school initiated any water conservation steps in the school or outside, in the past one year?</td>
						<td>';
if ($sql_data['266617X37X2320SQ009'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Does your school use a drip or irrigation system?</td>
						<td>';
if ($sql_data['266617X37X2320SQ010'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
	<tr>
						<td>
Any other step taken for water conservation? (if Yes, please specify)</td>
						<td>';
if ($sql_data['266617X37X2320SQ011'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>					
					
					
				</table>
			</li>';



if ($sql_data['266617X37X2257_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X37X2257_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X37X2257']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}



$html .='<li>
				<p class="orange"><span>6</span><span> Do you have Rainwater harvesting (RWH) system in your school?</span></p>
				<p>';
if ($sql_data['266617X37X1900'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';



//Q6 if NO Then.
if ($sql_data['266617X37X1900'] == "N") {
    $html .='
			<li>
				<p class="orange"><span>6(a)</span><span> Calculate your school�s rainwater harvesting potential (in litres).</span></p>
				<p>';
    $html .=$sql_data['266617X37X2476'];
    $html .='</p>
			</li>';
}

//if Yes Then
if ($sql_data['266617X37X1900'] == "Y") {
    $html .='
			<li>
				<p class="orange"><span>6(a)</span><span>  Does your school harvest different catchments?.</span></p>
				<p>';
    if ($sql_data['266617X37X2353'] == "Y") {
        $html .="Yes";
    } else {
        $html .="No";
    }
    $html .='</p>
			</li>';

    if ($sql_data['266617X37X2353'] == "Y") {

        $html .='<li>
				<p class="orange"><span>6(a)(1)</span><span> Which is the catchment area being harvested by your school?</span></p>
				<p>';
        $school_harvest = array('A1' => "Rooftop", 'A2' => "Paved", 'A3' => "Unpaved", 'A4' => "Rooftop + Paved", 'A5' => "Paved + Unpaved", 'A5' => "Paved + Unpaved", 'A6' => "Rooftop + Unpaved", 'A7' => "Rooftop + Paved + Unpaved");

        $index_arr = $sql_data['266617X37X2354'];
        $html .=$school_harvest[$index_arr];
        $html .='</p>
			</li>';
    }




    $html .='<li>
				<p class="orange"><span>6(b)</span><span> How does your school harvest rainwater?</span></p>
				<p>';
    $harvest_rainwater = array('A1' => "By storing", 'A2' => "By recharging groundwater", 'A3' => "Combination of both");
    $index_arr = $sql_data['266617X37X2355'];
    $html .=$harvest_rainwater[$index_arr];
    $html .='</p>
			</li>';

    if ($sql_data['266617X37X2355'] == "A1" || $sql_data['266617X37X2355'] == "A3") {

        $html .='<li>
				<p class="orange"><span>6(b)(1)</span><span>  If your school only stores rainwater, please select the use of stored rainwater.</span></p>
				<p>';
        $stores_rainwater = array();
        if ($sql_data['266617X37X23561'] != "") {
            $stores_rainwater[] = "Drinking";
        }
        if ($sql_data['266617X37X23562'] != "") {
            $stores_rainwater[] = "Gardening";
        }
        if ($sql_data['266617X37X23563'] != "") {
            $stores_rainwater[] = "Mopping";
        }
        if ($sql_data['266617X37X23564'] != "") {
            $stores_rainwater[] = "Toilets";
        }
        if ($sql_data['266617X37X23565'] != "") {
            $stores_rainwater[] = "Washing vehicles";
        }
        if ($sql_data['266617X37X23566'] != "") {
            $stores_rainwater[] = "Kitchen (Cooking/Washing vegetables and utensils)";
        }
        if ($sql_data['266617X37X23567'] != "") {
            $stores_rainwater[] = "Shower, Brushing teeth, Bathing, Hand washing";
        }
        if ($sql_data['266617X37X23568'] != "") {
            $stores_rainwater[] = "Swimming Pool";
        }

        $html .=implode($stores_rainwater, ', ');
        $html .='</p>
			</li>';


        //6(b)(2)
        $html .='<li>
				<p class="orange"><span>6(b)(2)</span><span> Does your school have rainwater storage tank? </span></p>
				<p>';
        if ($sql_data['266617X37X2366'] == "Y") {
            $html .="Yes";
        } else {
            $html .="No";
        }

        $html .='</p>
			</li>';


//if 6(b)(2) is Yes.

        if ($sql_data['266617X37X2366'] == "Y") {
            $html .='<li>
				<p class="orange"><span>6(b)(2)(a)</span><span> Total capacity of storage tank (litres)</span></p>
				<p>';
            $html .=$sql_data['266617X37X2368'];

            $html .='</p>
			</li>';


            $html .='<li>
				<p class="orange"><span>6(b)(2)(b)</span><span> Total number of storage tanks </span></p>
				<p>';
            $html .=$sql_data['266617X37X2369'];

            $html .='</p>
			</li>';


            //6(b)(2)(c)
            $html .='<li>
				<p class="orange"><span>6(b)(2)(c)</span><span> Location of tanks: </span></p>
				<p>';
            $Locationtanks = array(1 => "Underground", 2 => "Over ground", 3 => "Semi underground", 4 => "Underground + Over-ground", 5 => "Over- ground + Semi underground", 6 => "Underground + Over-ground + Semi underground");
            $index_arr = $sql_data['266617X37X2370'];
            $html .=$Locationtanks[$index_arr];

            $html .='</p>
			</li>';


            $html .='<li>
				<p class="orange"><span>6(b)(2)(d)</span><span> Material options for tanks</span></p>
				<p>';
            $Material_options = array(1 => "PVC", 2 => "RCC", 3 => "Brick", 4 => "Combination of PVC + RCC + Brick");
            $index_arr = $sql_data['266617X37X2371'];
            $html .=$Material_options[$index_arr];

            $html .='</p>
			</li>';
        }
    }
//if 6(b)(2) is NO
//        if ($sql_data['266617X37X2366'] == "Y") {
//
//            $html .='<li>
//				<p class="orange"><span>6(b)(3)</span><span> Does your school have groundwater recharge structure? </span></p>
//				<p>';
//            if ($sql_data['266617X37X2641'] == "Y") {
//                $html .="Yes";
//            } else {
//                $html .="No";
//            }
//
//            $html .='</p>
//			</li>';
//
////6(b)(3) if Yes			
//            if ($sql_data['266617X37X2641'] == "Y") {
//                $html .='<li>
//				<p class="orange"><span>6(b)(3)(i)</span><span> Please share the total number of groundwater recharge structures </span></p>
//				<p>';
//                $html .=$sql_data['266617X37X2373'];
//                $html .='</p>
//			</li>';
//
//                $html .='<li>
//				<p class="orange"><span>6(b)(3)(ii)</span><span> Please tick the type of groundwater recharge structure used in your school </span></p>
//				<p>';
//                $groundwater_recharge = array(1 => "Percolation pit/tank", 2 => "Recharge through abandoned dug well", 3 => "Recharge through abandoned tube well/bore well", 4 => "Recharge pits", 5 => "Recharge trenches", 6 => "Recharge through ponds/water bodies", 7 => "Soak pit");
//                $index_arr = $sql_data['266617X37X2374'];
//                $html .=$groundwater_recharge[$index_arr];
//                $html .='</p>
//			</li>';
//            }
//            $html .='<li>
//				<p class="orange"><span>6(b)(4)</span><span>  If your school practices rainwater harvesting, then what is the ratio between storage and recharge.</span></p>
//				<p>';
//            $practices_rainwater = array(1 => "Storage = Recharge", 2 => "Storage > Recharge", 3 => "Recharge > Storage", 4 => "Only Recharge", 5 => "Only Storage");
//            $index_arr = $sql_data['266617X37X2375'];
//            $html .=$practices_rainwater[$index_arr];
//
//            $html .='</p>
//			</li>';
//        }
   // }//End By storing

    if ($sql_data['266617X37X2355'] == "A2") { //start By recharging groundwater

        $html .='<li>
				<p class="orange"><span>6(b)(1)</span><span>  Does your school have groundwater recharge structure?</span></p>
				<p>';
        if ($sql_data['266617X37X2372'] == "Y") {
            $html .='Yes';
        } else {
            $html .='No';
        }

        $html .='</p>
			</li>';
        
        
        if ($sql_data['266617X37X2372'] == "Y") {

        $html .='<li>
        <p class="orange"><span>6(b)(1)(i)</span><span> Please share the total number of groundwater recharge structures</span></p>
        <p>';
        if ($sql_data['266617X37X2642'] !="") {
            $html .=$sql_data['266617X37X2642'];
       }
       $html .='</p></li>';
       
       $html .='<li>
        <p class="orange"><span>6(b)(1)(ii)</span><span>Please tick the type of groundwater recharge structure used in your school:</span></p>
        <p>';
       
     
     $groundwater_rs=array(1=>"Percolation pit/tank",2=>"Recharge through abandoned dug well",3=>"Recharge through abandoned tube well/bore well",4=>"Recharge pits",5=>"Recharge trenches",6=>"Recharge through ponds/water bodies",7=>"Soak pit");	
				$index_arr=$sql_data['266617X37X2643'];
				
      
            $html .=$groundwater_rs[$index_arr];
       
       $html .='</p></li>';
               
        
        
    }
        
    }

    
    
    
//6c
    $html .='<li>
				<p class="orange"><span>6(c)</span><span>How much area in your school is harvested?</span></p>
				<p>';
    $harvested = array(1 => "10 to 20 per cent", 2 => "21 to 30 per cent", 3 => "31 to 40 per cent", 4 => "41 to 50 per cent", 5 => "51 to 60 per cent", 6 => "61 to 70 per cent", 7 => "71 to 80 per cent", 8 => "81 to 90 per cent", 9 => "91 to 100 per cent");
    $index_arr = $sql_data['266617X37X2376'];
    $html .=$harvested[$index_arr];
    $html .='</p>
			</li>';

//6d
    $html .='<li>
				<p class="orange"><span>6(d)</span><span>Please select (from the list given below) the rainwater harvesting structures present in your school</span></p>
				<p>';


    $rainwater_harvesting = array();
    if ($sql_data['266617X37X23771'] != "") {
        $rainwater_harvesting[] = "Conduits";
    }
    if ($sql_data['266617X37X23772'] != "") {
        $rainwater_harvesting[] = "Gutters";
    }
    if ($sql_data['266617X37X23773'] != "") {
        $rainwater_harvesting[] = "Filter unit";
    }
    if ($sql_data['266617X37X23774'] != "") {
        $rainwater_harvesting[] = "First flush";
    }
    if ($sql_data['266617X37X23775'] != "") {
        $rainwater_harvesting[] = "Storage tank";
    }
    if ($sql_data['266617X37X23776'] != "") {
        $rainwater_harvesting[] = "Collection sump";
    }
    if ($sql_data['266617X37X23777'] != "") {
        $rainwater_harvesting[] = "Pump unit";
    }
    if ($sql_data['266617X37X23778'] != "") {
        $rainwater_harvesting[] = "Recharge structure";
    }

    $html .=implode($rainwater_harvesting, ', ');


    $html .='</p>
			</li>';

    if ($sql_data['266617X37X23773'] != "") {
        $html .='<li>
				<p class="orange"><span>6(d)(1)</span><span>Where is your filter unit? </span></p>
				<p>';
        $Rating = array(1 => "Before storage tank", 2 => "Before recharge system", 3 => "Before both storage tank and recharge system", 4 => "We do not use filters");
        $index_arr = $sql_data['266617X37X2388'];
        $html .=$Rating[$index_arr];
        $html .='</p>
			</li>';


        $html .='<li>
				<p class="orange"><span>6(d)(2)</span><span> Types of filter used in your school:  </span></p>
				<p>';
        $filter_used = array();
        if ($sql_data['266617X37X23891'] != "") {
            $filter_used[] = "Sand gravel filter";
        }
        if ($sql_data['266617X37X23892'] != "") {
            $filter_used[] = "Charcoal filter";
        }
        if ($sql_data['266617X37X23893'] != "") {
            $filter_used[] = "Readymade on line filter";
        }
        if ($sql_data['266617X37X23894'] != "") {
            $filter_used[] = "Chemical used";
        }

        $html .=implode($filter_used, ', ');
        $html .='</p>
			</li>';
    }


    //6e

    $html .='<li>
				<p class="orange"><span>6(e)</span><span>Rate your catchment on cleanliness:  </span></p>
				<p>';
    $Rating = array(1 => "Good", 2 => "Average", 3 => "Poor");
    $index_arr = $sql_data['266617X37X2396'];
    $html .=$Rating[$index_arr];
    $html .='</p>
			</li>';




    if ($sql_data['266617X37X2397_filecount'] > 0) {
        $q = 0;
        $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
        if ($sql_data['266617X37X2397_filecount'] > 0) {
            $data_arr = json_decode($sql_data['266617X37X2397']);
            // print_r($data_arr);
            foreach ($data_arr as $dataResult) {
                $html .= "<li>";
                $html .= str_replace('%20', ' ', $dataResult->name);
                $html .="</li>";
            }
        }
        $html .= '
		</ol>
	</div>';
    } else {
        $html .='<div class="support_files">';
        $html .= "No documents uploaded by the school.";
        $html .='</div>';
    }

//6f

    $html .='<li>
				<p class="orange"><span>6(f)</span><span> Does your school clean your catchment and system (structure?)?  </span></p>
				<p>';
    if ($sql_data['266617X37X2398'] == "Y") {
        $html .="Yes";
    } else {
        $html .="No";
    }
    $html .='</p>
			</li>';

    if ($sql_data['266617X37X2398'] == "Y") {

        $html .='<li>
				<p class="orange"><span>6(f)(1)</span><span> Please specify when does your school clean the catchment and RWH system? </span></p>
				<p>';
        $schoolclean = array(1 => "Pre-monsoon", 2 => "Post-monsoon", 3 => "Do not follow any such pattern");
        $index_arr = $sql_data['266617X37X2399'];
        $html .=$schoolclean[$index_arr];
        $html .='</p>
			</li>';
    }


    //6G

    $html .='<li>
				<p class="orange"><span>6(g)</span><span>Does your school monitor the rainwater harvesting structure for its efficiency?</span></p>
				<p>';
    if ($sql_data['266617X37X2400'] == "Y") {
        $html .="Yes";
    } else {
        $html .="No";
    }
    $html .='</p>
			</li>';

    if ($sql_data['266617X37X2400'] == "Y") {

        $html .='<li>
				<p class="orange"><span>6(g)(1)</span><span>  Please specify when does your school monitor the groundwater level?  </span></p>
				<p>';
        $schoolclean = array(1 => "Pre-monsoon", 2 => "Post-monsoon", 3 => "Do not follow any such pattern");
        $index_arr = $sql_data['266617X37X2401'];
        $html .=$schoolclean[$index_arr];
        $html .='</p>
			</li>';
    }


//6h			

    $html .='<li>
				<p class="orange"><span>6(h)</span><span> What is the trend of groundwater level in your school across the year? </span></p>
				<p>';
    $groundwater = array(1 => "If there was a decrease, please specify", 2 => "If there was an increase, please specify", 3 => "No change");
    $index_arr = $sql_data['266617X37X2402'];
    $html .=$groundwater[$index_arr];
    $html .='</p>
			</li>';

    if ($sql_data['266617X37X2402'] == 1) {

        $html .='<li>
				<p class="orange"><span>6(h)(1)</span><span> Please specify how much was the decrease?  </span></p>
				<p>';
        $decrease = array(1 => "Less than a metre annually", 2 => "1-5 metre annually", 3 => "More than 5 metres annually");
        $index_arr = $sql_data['266617X37X2403'];
        $html .=$decrease[$index_arr];
        $html .='</p>
			</li>';
    }
    
     if ($sql_data['266617X37X2402'] == 2) {

        $html .='<li>
				<p class="orange"><span>6(h)(1)</span><span> Please specify how much was the increase?  </span></p>
				<p>';
        $decrease = array(1 => "Less than a metre annually", 2 => "1-5 metre annually", 3 => "More than 5 metres annually");
        $index_arr = $sql_data['266617X37X2404'];
        $html .=$decrease[$index_arr];
        $html .='</p>
			</li>';
    }

//6i
    $html .='<li>
				<p class="orange"><span>6(i)</span><span>  If your school�s RWH structure is more than a year old, is there any improvement in the groundwater quality after the implementation of the RWH structure? </span></p>
				<p>';
    if ($sql_data['266617X37X2405'] == "Y") {
        $html .="Yes";
    } else {
        $html .="No";
    }
    $html .='</p>
			</li>';
} // End if  Condition Q6 if Yes






$html .='<li>
				<p class="orange"><span>7</span><span>  Please share details about sanitation and hygiene practices in your school.</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Yes / No</th>
						
					</tr>
					<tr>
						<td>
Does the school have separate toilets for males and females?</td>
						<td>';
if ($sql_data['266617X37X2337SQ001'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Are there sufficient toilets for women in your school?</td>
						<td>';
if ($sql_data['266617X37X2337SQ002'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Are there sufficient toilets for men in your school?<</td>
						<td>';
if ($sql_data['266617X37X2337SQ003'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Are the toilets accessible and safe to use for children?</td>
						<td>';
if ($sql_data['266617X37X2337SQ004'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Are the toilets accessible and safe to use for differently abled children?</td>
						<td>';
if ($sql_data['266617X37X2337SQ005'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)? </td>
						<td>';
if ($sql_data['266617X37X2337SQ006'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					
					<tr>
						<td>
Are the toilets situated in the right location in terms of privacy and safety?</td>
						<td>';
if ($sql_data['266617X37X2337SQ007'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
					<tr>
						<td>
Is there sufficient light during day time?</td>
						<td>';
if ($sql_data['266617X37X2337SQ008'] == "A1") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</td>
					</tr>
					
				</table>
			</li>';



$html .='
			<li>
				<p class="orange"><span>8</span><span>  How many drinking water taps do you have? </span></p>
				<p>';
$html .=number_format($sql_data['266617X37X1893']);
$html .='</p>
			</li>';



$html .='<li>
				<p class="orange"><span>9</span><span> How many hand pumps do you have? </span></p>
				<p>';
$html .=number_format($sql_data['266617X37X2346']);
$html .='</p>
			</li>';



$html .='<li>
				<p class="orange"><span>10</span><span>  How many ablution taps (taps used for washing hands only) do you have? </span></p>
				<p>';
$html .=number_format($sql_data['266617X37X1894']);
$html .='</p>
			</li>';


$html .='<li>
				<p class="orange"><span>11</span><span> How many water closets (used for defecation and urination) do you have?. </span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Girls</th>
						<th>Boys</th>
						<th>Common</th>
						<th> Total</th>
					</tr>
					<tr>
						<td>Number of toilets </td>
						<td>';
$html .=$sql_data['266617X37X1896SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X37X1896SQ005_SQ003'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X37X1896SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X37X1896SQ005_SQ004'];
$html .='</td>
					</tr>
				</table>
			</li>';




$html .='
			<li>
				<p class="orange"><span>12</span><span> How many urinals (strictly used for urination only) do you have?</span></p>
				<p>';
$html .=number_format($sql_data['266617X37X1895']);
$html .='</p>
			</li>';



$html .='
			<li>
				<p class="orange"><span>13</span><span>  How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? </span></p>
				<p>';
$html .=number_format($sql_data['266617X37X2347']);
$html .='</p>
			</li>';

$html .='<li>
				<p class="orange"><span>14</span><span>  Is there a water storage system in place to supply water in the toilets? </span></p>
				<p>';
if ($sql_data['266617X37X2349'] == "Y") {
    $html.="Yes";
} else {
    $html.="No";
}

$html .='</p>
			</li>';


$html .='<li>
				<p class="orange"><span>15</span><span>  Is the water supply sufficient? </span></p>
				<p>';
if ($sql_data['266617X37X2350'] == "Y") {
    $html.="Yes";
} else {
    $html.="No";
}

$html .='</p>
			</li>';


$html .='<li>
				<p class="orange"><span>16</span><span> Are the toilets cleaned?  </span></p>
				<p>';
if ($sql_data['266617X37X2351'] == "Y") {
    $html.="Yes";
} else {
    $html.="No";
}

$html .='</p>
			</li>';


if ($sql_data['266617X37X2351'] == "Y") {
    $html .='<li><p class="orange"><span>16(a)</span><span> If yes, please specify </span></p>
				<p>';
    $Rating = array('A1' => "Once a day", 'A2' => "Twice a day", 'A3' => "More than twice a day");
    $index_arr = $sql_data['266617X37X2352'];
    $html .=$Rating[$index_arr];
    $html .='</p></li>';
}

////////////////////////            

$html .='<h3 class="task page_break">Task 7: Does your school reuse/recycle waste water?</h3>';



$html .='<li>
<p class="orange"><span>17</span><span> Does your school treat wastewater?</span></p>
				<p>';
if ($sql_data['266617X37X2332'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';


$html .='<li><p class="orange"><span>18</span><span> Does your school reuse the treated wastewater?</span></p>
		<p>';
if ($sql_data['266617X37X2654'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';

if ($sql_data['266617X37X2654'] == "Y") {

    $html .='<li>
				<p class="orange"><span>18(a)</span><span> How does your school reuse wastewater?</span></p>
				<p>';
    $reuse_wastewater = array();
    if ($sql_data['266617X37X26551'] != "") {
        $reuse_wastewater[] = "Gardening";
    }
    if ($sql_data['266617X37X26552'] != "") {
        $reuse_wastewater[] = "Flushing";
    }
    if ($sql_data['266617X37X26553'] != "") {
        $reuse_wastewater[] = "Recharge Ground Water";
    }
    $html .=implode($reuse_wastewater, ', ');
    $html .='</p>
			</li>';
}



if ($sql_data['266617X37X2654'] == "N") {

    $html .='<li>
				<p class="orange"><span>18(a)</span><span> Please specify the fate of wastewater</span></p>
				<p>';
    $fateofwastewater=array(1=>"Wastewater flows directly to the drains",2=>"Used for groundwater recharge",3=>"Used for gardening and horticulture");	
				$index_arr=$sql_data['266617X37X2660'];
				
                                 $html .=$fateofwastewater[$index_arr];
    $html .='</p>
			</li>';
}

if ($sql_data['266617X37X2661_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X37X2661_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X37X2661']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}

$html .='</ul>
	</div>';


//Start Waste Section.	

$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>

	<h2 class="heading section waste"><img src="images/waste.png" width="94" height="94">Waste</h2>';

$html .='<div class="wrapper">
		<div class="task-area">
			<h3 class="task">Task 1: Waste Audit Team</h3>';
$html .='<div class="answer clearfix">
					<h5>Teachers</h5>
			<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X38X2607SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X38X2607SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X38X2607SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X38X2607SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X38X2607SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X38X2607SQ003_SQ002'] . '</td></tr>';

$html .='</table>';

$html .='<h5>Administrative staff</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X38X2613SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X38X2613SQ001_SQ002'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X38X2613SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X38X2613SQ002_SQ002'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X38X2613SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X38X2613SQ003_SQ002'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X38X2613SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X38X2613SQ004_SQ002'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X38X2613SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X38X2613SQ005_SQ002'] . '</td></tr>';
$html .='</table>';


$html .='<h5 class="page_break">Students</h5>';
$html .='<table class="audit-team">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>';
$html .='<tr><td>1.</td><td>' . $sql_data['266617X38X2621SQ001_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ001_SQ002'] . '</td><td>' . $sql_data['266617X38X2621SQ001_SQ003'] . '</td></tr>';
$html .='<tr><td>2.</td><td>' . $sql_data['266617X38X2621SQ002_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ002_SQ002'] . '</td><td>' . $sql_data['266617X38X2621SQ002_SQ003'] . '</td></tr>';
$html .='<tr><td>3.</td><td>' . $sql_data['266617X38X2621SQ003_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ003_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ003_SQ003'] . '</td></tr>';
$html .='<tr><td>4.</td><td>' . $sql_data['266617X38X2621SQ004_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ004_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ004_SQ003'] . '</td></tr>';
$html .='<tr><td>5.</td><td>' . $sql_data['266617X38X2621SQ005_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ005_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ005_SQ003'] . '</td></tr>';
$html .='<tr><td>6.</td><td>' . $sql_data['266617X38X2621SQ006_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ006_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ006_SQ003'] . '</td></tr>';
$html .='<tr><td>7.</td><td>' . $sql_data['266617X38X2621SQ007_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ007_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ007_SQ003'] . '</td></tr>';
$html .='<tr><td>8.</td><td>' . $sql_data['266617X38X2621SQ008_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ008_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ008_SQ003'] . '</td></tr>';
$html .='<tr><td>9.</td><td>' . $sql_data['266617X38X2621SQ009_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ009_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ009_SQ003'] . '</td></tr>';
$html .='<tr><td>10.</td><td>' . $sql_data['266617X38X2621SQ010_SQ001'] . '</td> <td>' . $sql_data['266617X38X2621SQ010_SQ002'] . '</td> <td>' . $sql_data['266617X38X2621SQ010_SQ003'] . '</td></tr>';

$html .='</table>';

$html .='</div>';

$html .='</div>';


$html .='
			<h3 class="task page_break">Task 2: What is the waste segregation system in your school?</h3>           
			';

$html .='<ul class="list">
			<li>
				<p class="orange"><span>1</span><span> Does your school segregate solid waste?</span></p>
				<p>';
if ($sql_data['266617X38X2032'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';

if ($sql_data['266617X38X2032'] == "Y") {
    $html .='<li>
				<p class="orange"><span>1a</span><span> Who segregates the waste at source?</span></p>
				<ol>';
    if ($sql_data['266617X38X2033SQ001'] == "Y") {
        $html .= "<li>";
        $html .= "Students and teachers";
        $html .= "</li>";
    }
    if ($sql_data['266617X38X2033SQ002'] == "Y") {
        $html .= "<li>";
        $html .= "Housekeeping (Sweeper)";
        $html .= "</li>";
    }
    if ($sql_data['266617X38X2033SQ003'] == "Y") {
        $html .= "<li>";
        $html .= "Gardener";
        $html .= "</li>";
    }
    if ($sql_data['266617X38X2033SQ004'] == "Y") {
        $html .= "<li>";
        $html .= "Ragpicker";
        $html .= "</li>";
    }
    if ($sql_data['266617X38X2033other'] != "") {
        $html .= "<li>";
        $html .= "Other: " . $sql_data['266617X38X2033other'];
        $html .= "</li>";
    }
    $html .='</ol>
				</li>';

//    $html .='<li>
//				<p class="orange"><span>1b</span><span> Who segregates the waste in classrooms?</span></p>
//				<ol>';
//    if ($sql_data['266617X38X2037SQ001'] == "Y") {
//        $html .= "<li>";
//        $html .= "Students and Teachers";
//        $html .= "</li>";
//    }
//    if ($sql_data['266617X38X2037SQ002'] == "Y") {
//        $html .= "<li>";
//        $html .= "Housekeeping (Sweeper)";
//        $html .= "</li>";
//    }
//    if ($sql_data['266617X38X2037other'] != "") {
//        $html .= "<li>";
//        $html .= "Other: " . $sql_data['266617X38X2037other'];
//        $html .= "</li>";
//    }
//    $html .='</ol>
//				</li>';
}


$html .='<li>
				<p class="orange"><span>2</span><span> Waste collection points in your school. </span></p>
				<table class="table">
					<tr>
						<th></th>
                                                                                                            <th>Total No. of collection points</th>                                                                                                                                                                                                    <th>No bin</th>
						<th>One bin</th>
						<th>Two bins (wet & dry)</th>
						<th>Three bins or more</th>
					</tr>
					<tr>
						<td>Classrooms</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ001_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ001_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ001_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ001_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Playgrounds</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ002_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ002_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ002_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Common area (e.g. reception, corridors)</td>
                                                
<td>';
$html .=$sql_data['266617X38X2143SQ003_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ003_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ003_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Staffroom</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ004_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ004_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ004_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Laboratory</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ005_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ005_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ005_SQ005'];
$html .='</td>
					</tr>
					<tr>
		          <td>Canteen</td>
                                               <td>';
$html .=$sql_data['266617X38X2143SQ006_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ006_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ006_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ006_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Clinic/ Sick room</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ007_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ007_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ007_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ007_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Library</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ008_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ008_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ008_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ008_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ008_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Toilets</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ009_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ009_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ009_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ009_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ009_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Others</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ010_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ010_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ010_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ010_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ010_SQ005'];
$html .='</td>
					</tr>
					<tr>
						<td>Total</td>
                                                <td>';
$html .=$sql_data['266617X38X2143SQ011_SQ004'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ011_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ011_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2143SQ011_SQ003'];
$html .='</td><td>';
$html .=$sql_data['266617X38X2143SQ011_SQ005'];
$html .='</td>
					</tr>
				</table>
			</li>';





if ($sql_data['266617X38X2672_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head page_break">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X38X2672_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X38X2672']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}




$html .='
		<h3 class="task">Task 3: How much waste does your school generate?</h3>           
		';

$html .='<li>
				<p class="orange"><span>3</span><span> Determine the quantity of waste generated in your school. (in kilogram)</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Collection per month (Frequency may differ)</th>
					</tr>
					<tr>
						<td>Garden/ horticulture waste</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ001_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Kitchen waste </td>
						<td>';
$html .=$sql_data['266617X38X2125SQ002_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Paper</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ003_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Plastic</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ004_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Wood, glass, metal, classroom furniture</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ005_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>E-waste</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ006_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Biomedical waste</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ007_SQ001'];
$html .='</td>
						
					</tr>
					<tr>
						<td>Sanitary waste</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ008_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Construction and Demolition (C & D) waste </td>
						<td>';
$html .=$sql_data['266617X38X2125SQ010_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Hazardous waste</td>
						<td>';
$html .=$sql_data['266617X38X2125SQ011_SQ001'];
$html .='</td>
					</tr>
					<tr>
						<td>Total Generated Solid Waste (in kilogram) </td>
						<td>';
$html .=$sql_data['266617X38X2125SQ009_SQ001'];
$html .='</td>
					</tr>
				</table>
			</li>';


 if ($sql_data['266617X38X2673_filecount'] > 0) {
        $q = 0;
        $html .='<div class="support_files_head page_break">
		Supporting Documents
		<ol class="support-docs">';
        if ($sql_data['266617X38X2673_filecount'] > 0) {
            $data_arr = json_decode($sql_data['266617X38X2673']);
            // print_r($data_arr);
            foreach ($data_arr as $dataResult) {
                $html .= "<li>";
                $html .= str_replace('%20', ' ', $dataResult->name);
                $html .="</li>";
            }
        }
        $html .= '
		</ol>
	</div>';
    } else {
        $html .='<div class="support_files">';
        $html .= "No documents uploaded by the school.";
        $html .='</div>';
    }
  //if Yes Close.        



$html .='
			<h3 class="task">Task 4: How much waste does your school recycle/treat?</h3>           
		';


$html .='<li><p class="orange"><span>4</span><span>  Does your school recycle any generated waste?</span></p>
		<p>';
if ($sql_data['266617X38X2041'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';

if ($sql_data['266617X38X2041'] == "Y") {
    $html .='<li>
	<p class="orange"><span>4a</span><span> Please provide quantity of which is applicable. (in kilogram)</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Quantity</th>
					</tr>
					<tr>
						<td>Garden/ horticulture waste</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ001_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Kitchen waste </td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ002_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Paper</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ003_SQ001'];
    $html .='</td>
					</tr>
                                        
<tr>
						<td>Plastic</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ011_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Wood, glass, metal, classroom furniture</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ004_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>E-waste</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ005_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Biomedical waste</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ006_SQ001'];
    $html .='</td>
						
					</tr>
					<tr>
						<td>Sanitary waste</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ007_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Construction and Demolition (C & D) waste </td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ008_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Hazardous waste</td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ009_SQ001'];
    $html .='</td>
					</tr>
					<tr>
						<td>Total (in kilogram) </td>
						<td>';
    $html .=$sql_data['266617X38X2042SQ010_SQ001'];
    $html .='</td>
					</tr>
				</table>
			</li>';
}

$html .='<li><p class="orange"><span>5</span><span> Does your school have a composting facility?</span></p>
		<p>';
if ($sql_data['266617X38X2064'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';
if ($sql_data['266617X38X2064'] == "Y") {
    
     if ($sql_data['266617X38X2674_filecount'] > 0) {
        $q = 0;
        $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
        if ($sql_data['266617X38X2674_filecount'] > 0) {
            $data_arr = json_decode($sql_data['266617X38X2674']);
            // print_r($data_arr);
            foreach ($data_arr as $dataResult) {
                $html .= "<li>";
                $html .= str_replace('%20', ' ', $dataResult->name);
                $html .="</li>";
            }
        }
        $html .= '
		</ol>
	</div>';
    } else {
        $html .='<div class="support_files">';
        $html .= "No documents uploaded by the school.";
        $html .='</div>';
    }

    $html .='<li>
				<p class="orange"><span>5a</span><span> What is the methodology used?</span></p>
				<p>';
    if ($sql_data['266617X38X2065SQ001'] == "Y") {
        $html .= "Natural composting without added microbes";
    }
    if ($sql_data['266617X38X2065SQ002'] == "Y") {
        $html .= "Mechanical composting (with electricity/ machines)";
    }
    if ($sql_data['266617X38X2065other'] != "") {
        $html .= "Other: " . $sql_data['266617X38X2065other'];
    }
    $html .='</p>
			</li>';

    $html .='<li>
				<p class="orange"><span>5b</span><span> What is the quantity of compost that is generated per month(in kilogram)?</span></p>
				<p>';
    $html .=number_format($sql_data['266617X38X2068'], 2);
    $html .='</p>
			</li>';
    $html .='<li>
				<p class="orange"><span>5c</span><span> What is the purpose of the compost that is generated per month? </span></p>
				<p>';
    if ($sql_data['266617X38X2069SQ001'] == "Y") {
        $html .= "For horticultural purposes";
    }
    if ($sql_data['266617X38X2069SQ002'] == "Y") {
        $html .= "For school garden";
    }
    if ($sql_data['266617X38X2069SQ003'] =="Y") {
        $html .= "For sale";
    }
    if ($sql_data['266617X38X2069SQ004'] =="Y") {
        $html .= "For charity";
    }
    $html .='</p></li>';





   
}  //if Yes Close.        

$html .='<li><p class="orange"><span>6</span><span> Does your school encourage students & teachers to reuse textbooks?</span></p>
		<p>';
if ($sql_data['266617X38X2074'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';



$html .='<li>
				<p class="orange"><span>7</span><span> Table to understand whether internal or external waste recycling procedures are applied to waste.</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Local kabadiwala (the scrap collector)</th>
						<th>Authorised dealer</th>
						<th>Dumped at a designated community site</th>
						<th>Internal procedure</th>
					</tr>
					<tr>
						<td>Paper (e.g., used notebooks, used examination paper, subscription newspaper and magazines) </td>
						<td>';
if ($sql_data['266617X38X2171SQ001_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ001_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ001_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ001_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					<tr>
						<td>Plastic (e.g. plastic bottles)</td>
						<td>';
if ($sql_data['266617X38X2171SQ002_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ002_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ002_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ002_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					<tr>
						<td>Horticultural waste </td>
						<td>';
if ($sql_data['266617X38X2171SQ003_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ003_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ003_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ003_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					<tr>
						<td>E-waste (e.g. broken, unusable computers)</td>
						<td>';
if ($sql_data['266617X38X2171SQ004_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ004_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ004_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ004_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					<tr>
						<td>Hazardous waste (e.g. diesel fuel, battery)</td>
						<td>';
if ($sql_data['266617X38X2171SQ007_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ007_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ007_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ007_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					<tr>
						<td>Wood,glass, metal scrap, other scrap </td>
						<td>';
if ($sql_data['266617X38X2171SQ005_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ005_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ005_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .='<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ005_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					<tr>
						<td>Biomedical waste (e.g. waste from Nurse�s room in school, e.g. band-aids, syringe) </td>
						<td>';
if ($sql_data['266617X38X2171SQ008_SQ001'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ008_SQ002'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
						<td>';
if ($sql_data['266617X38X2171SQ008_SQ003'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td><td>';
if ($sql_data['266617X38X2171SQ008_SQ004'] == 1) {
    $html .= '<img src="images/1445961706_tick.png">';
} else {
    $html .= '<img src="images/1445961880_cross.png">';
}
$html .='</td>
					</tr>
					
				</table>
			</li>';




if ($sql_data['266617X38X2675_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head page_break">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X38X2675_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X38X2675']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}

//End Q.7		


$html .='
			<h3 class="task">Task 5: How does your school dispose waste?</h3>           
		';

$html .='<li>
				<p class="orange"><span>8</span><span> What is the final destination for waste that is disposed of externally?</span></p>
				<p>';
if ($sql_data['266617X38X2076'] == "A1") {
    $html .= "Open dumping";
} elseif ($sql_data['266617X38X2076'] == "A2") {
    $html .= "Designated dumping site (Dhalao)";
} elseif ($sql_data['266617X38X2076'] == "A3") {
    $html .= "Landfill Site";
} elseif ($sql_data['266617X38X2076'] == "A4") {
    $html .= "Don�t know";
}
$html .='</p>
			</li>';




if ($sql_data['266617X38X2676_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X38X2676_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X38X2676']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}


$html .='<li><p class="orange"><span>9</span><span> Does your school burn waste?</span></p>
		<p>';
if ($sql_data['266617X38X2081'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';


if ($sql_data['266617X38X2081'] == "Y") {
    
     if ($sql_data['266617X38X2677_filecount'] > 0) {
        $q = 0;
        $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
        if ($sql_data['266617X38X2677_filecount'] > 0) {
            $data_arr = json_decode($sql_data['266617X38X2677']);
            // print_r($data_arr);
            foreach ($data_arr as $dataResult) {
                $html .= "<li>";
                $html .= str_replace('%20', ' ', $dataResult->name);
                $html .="</li>";
            }
        }
        $html .= '
		</ol>
	</div>';
    } else {
        $html .='<div class="support_files">';
        $html .= "No documents uploaded by the school.";
        $html .='</div>';
    }

    $html .='<li>
				<p class="orange"><span>9a</span><span> Where does your school burn waste?</span></p>
				<p>';
    if ($sql_data['266617X38X2082'] == "A1") {
        $html .= "Inside the school";
    } elseif ($sql_data['266617X38X2082'] == "A2") {
        $html .= "Outside the school";
    }
    $html .='</p>
			</li>';

    $html .='<li>
				<p class="orange"><span>9b</span><span> What kind of waste is being burnt/ incinerated?</span></p>
				<p>';
    if ($sql_data['266617X38X2083SQ001'] == "Y") {
        $html .= "Horticultural";
    }
    if ($sql_data['266617X38X2083SQ002'] == "Y") {
        $html .= "Plastic";
    }
    if ($sql_data['266617X38X2083SQ003'] != "") {
        $html .= "Tyres";
    }
    
     if ($sql_data['266617X38X2083SQ004'] != "") {
        $html .= "Paper";
    }
    
    
    $html .='</p>
			</li>';



   
} //if Yes Close Q.9 

$html .='<li>
				<p class="orange"><span>10</span><span> Does your school have the following? If yes, please give the numbers.</span></p>
				<table class="table">
					<tr>
						<th></th>
						<th>Total</th>
						<th>Working conditions</th>
						<th>Non-working condition</th>
					</tr>
					<tr>
						<td>TVs</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ001_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ001_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ001_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>VCR or DVD players</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ002_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ002_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ002_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Refrigerators and freezers </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ003_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ003_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ003_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Washing machines</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ004_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ004_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ004_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Air conditioners </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ005_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ005_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ005_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Heaters</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ006_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ006_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ006_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Microwaves</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ007_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ007_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ007_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Ovens</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ008_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ008_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ008_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Toasters</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ009_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ009_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ009_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Electric Kettles</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ010_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ010_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ010_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Personal computers (CPU, mouse, screen and keyboard included) </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ011_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ011_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ011_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Laptop computer (CPU, mouse, screen and keyboard included) </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ012_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ012_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ012_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Notebook computers </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ013_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ013_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ013_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Notepad computers </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ014_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ014_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ014_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Printers</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ015_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ015_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ015_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Copying equipment (Photocopiers)</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ016_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ016_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ016_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Projectors</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ017_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ017_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ017_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Whiteboards</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ018_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ018_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ018_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Electrical & electronic typewriters</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ019_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ019_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ019_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Pocket & desk calculators </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ020_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ020_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ020_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Fax machines</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ021_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ021_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ021_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Telex</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ022_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ022_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ022_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Telephones</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ023_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ023_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ023_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Pay telephones</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ024_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ024_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ024_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Mobiles</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ025_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ025_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ025_SQ003'];
$html .='</td>
					</tr>
					<tr>
						<td>Answering systems </td>
						<td>';
$html .=$sql_data['266617X38X2087SQ026_SQ001'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ026_SQ002'];
$html .='</td>
						<td>';
$html .=$sql_data['266617X38X2087SQ026_SQ003'];
$html .='</td>
					</tr>
				</table>
			</li>';





if ($sql_data['266617X38X2678_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X38X2678_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X38X2678']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";
    $html .='</div>';
}





$html .='<li><p class="orange"><span>11</span><span> Do you know that your E-waste can be collected by an authorised dealer or dismantler?</span></p>
		<p>';
if ($sql_data['266617X38X2114'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';
if ($sql_data['266617X38X2114'] == "Y") {


    if ($sql_data['266617X38X2679_filecount'] > 0) {
        $q = 0;
        $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
        if ($sql_data['266617X38X2679_filecount'] > 0) {
            $data_arr = json_decode($sql_data['266617X38X2679']);
            // print_r($data_arr);
            foreach ($data_arr as $dataResult) {
                $html .= "<li>";
                $html .= str_replace('%20', ' ', $dataResult->name);
                $html .="</li>";
            }
        }
        $html .= '
		</ol>
	</div>';
    } else {
        $html .='<div class="support_files">';
        $html .= "No documents uploaded by the school.";
        $html .='</div>';
    }


    $html .='<li>
				<p class="orange"><span>11a</span><span> Who collects your e-waste, when not in working condition?</span></p>
				<p>';
    if ($sql_data['266617X38X2115'] == "A1") {
        $html .= "Kabadiwalla/ Scrapdealer";
    } elseif ($sql_data['266617X38X2115'] == "A2") {
        $html .= "Taken back by manufacturer";
    } elseif ($sql_data['266617X38X2115'] != "A4") {
        $html .= "Authorised dealer";
    } elseif ($sql_data['266617X38X2115'] != "A5") {
        $html .= "Authorised dismantler";
    } elseif ($sql_data['266617X38X2115other'] != "") {
        $html .= "Other: " . $sql_data['266617X38X2115other'];
    }

    $html .='</p>
			</li>';
}

$html .='
			<h3 class="task">Task 6: School�s initiatives</h3>           
		';


$html .='<li><p class="orange"><span>12</span><span> Does the school have a policy on waste? </span></p>
		<p>';
if ($sql_data['266617X38X2121'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';
if ($sql_data['266617X38X2121'] == "Y") {

    $html .='<p>Policy document</p>';
    if ($sql_data['266617X38X2255_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X38X2255']);
        $html .= str_replace('%20', ' ', $data_arr[0]->name);
    }
}

$html .='<li><p class="orange"><span>13</span><span> Are there awareness drives with regard to Reduce, Recycle and Reuse?</span></p>
		<p>';
if ($sql_data['266617X38X2122'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';
if ($sql_data['266617X38X2122'] == "Y") {



    if ($sql_data['266617X38X2680_filecount'] > 0) {
        $q = 0;
        $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
        if ($sql_data['266617X38X2680_filecount'] > 0) {
            $data_arr = json_decode($sql_data['266617X38X2680']);
            // print_r($data_arr);
            foreach ($data_arr as $dataResult) {
                $html .= "<li>";
                $html .= str_replace('%20', ' ', $dataResult->name);
                $html .="</li>";
            }
        }
        $html .= '
		</ol>
	</div>';
    } else {
        $html .='<div class="support_files">';
        $html .= "No documents uploaded by the school.";
        $html .='</div>';
    }




    $html .='<li><p class="orange"><span>13a</span><span> What form do these awareness drives take?</span></p>
		<p>';
    $ques13a=array();
        if($sql_data['266617X38X2123SQ001'] == "Y")
        {
            $ques13a[]=" As part of the curriculum";
        }
        if($sql_data['266617X38X2123SQ002'] == "Y")
        {
            $ques13a[]=" As part of extracurricular activities such as guest lectures";
        }
        if($sql_data['266617X38X2123SQ003'] == "Y")
        {
           $ques13a[]=" By the showcasing of posters and stickers";
        }
        //print_r($ques13a);
		$q13= implode($ques13a," , ");
                $html .=$q13;
    $html .='</p>
        
         




		</li>';
}

$html .='<li><p class="orange"><span>14</span><span> Is the study of the environment integrated into the curriculum?</span></p>
		<p>';
if ($sql_data['266617X38X2124'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';


if ($sql_data['266617X38X2256_filecount'] > 0) {
    $q = 0;
    $html .='<div class="support_files_head">
		Supporting Documents
		<ol class="support-docs">';
    if ($sql_data['266617X38X2256_filecount'] > 0) {
        $data_arr = json_decode($sql_data['266617X38X2256']);
        // print_r($data_arr);
        foreach ($data_arr as $dataResult) {
            $html .= "<li>";
            $html .= str_replace('%20', ' ', $dataResult->name);
            $html .="</li>";
        }
    }
    $html .= '
		</ol>
	</div>';
} else {
    $html .='<div class="support_files">';
    $html .= "No documents uploaded by the school.";    
    $html .='</div>';
}

$html .='</ul>
	</div>';

// Start Feedback Section.



$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>

	<h2 class="heading section waste page_break"><img src="images/waste.png" width="94" height="94">Feedback</h2>';

$html .='<div class="wrapper">';

$html .='<h3 class="task">&nbsp;</h3>';
$html .='<ul class="list">
			<li>
				<p class="orange"><span>1</span><span> Has your school participated in the Green Schools Programme (GSP) Audit before?</span></p>
				<p>';
if ($sql_data['266617X39X2426'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
			</li>';

if ($sql_data['266617X39X2426'] == "Y") {

    $html .='<li><p class="orange"><span>1(a)</span><span> If yes, then in which year did your school first participate in the GSP Audit?</span></p>
		<p>';
    $html .=$sql_data['266617X39X2427'];

    $html .='</p>
		</li>';

    $html .='<li><p class="orange"><span>1(b)</span><span> If yes, how many times have you done the audit?</span></p>
		<p>';
    $html .=$sql_data['266617X39X2428'];

    $html .='</p>
		</li>';
}

$html .='<li><p class="orange"><span>2</span><span>  Have teachers from your school participated in teacher interactive workshops organized by the GSP team?</span></p>
		<p>';

if ($sql_data['266617X39X2429'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}

$html .='</p>
		</li>';

//Q3

$html .='<li><p class="orange"><span>3</span><span>  Did you find the online information relevant to your environmental education activities?</span></p>
		<p>';
if ($sql_data['266617X39X2430'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';

if ($sql_data['266617X39X2430'] == "N") {
    $html .='<li><p class="orange"><span>3(a)</span><span> If no, then please share your suggestions.</span></p>
		<p>';
    $html .=$sql_data['266617X39X2431'];

    $html .='</p>
		</li>';
}

//Q.4.

$html .='<li><p class="orange"><span>4</span><span>  Was the audit easy-to-understand and self-explanatory?</span></p>
		<p>';
if ($sql_data['266617X39X2432'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';

//Q.5

$html .='<li><p class="orange"><span>5</span><span>  Did you understand the present format of the GSP?</span></p>
		<p>';
if ($sql_data['266617X39X2433'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';



//Q.6

$html .='<li><p class="orange"><span>6</span><span>  Do you think your school will be a Green School (resource efficient) by 2019?</span></p>
		<p>';
if ($sql_data['266617X39X2434'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}
$html .='</p>
		</li>';

if ($sql_data['266617X39X2434'] == "N") {


    $html .='<li><p class="orange"><span>6(a)</span><span> If no, why?</span></p>
		<p>';
    $html .=$sql_data['266617X39X2435'];

    $html .='</p>
		</li>';
}

//Q.7

$html .='<li><p class="orange"><span>7</span><span> What would be the help required to make your school a Green School?</span></p>
		<p>';
$html .=$sql_data['266617X39X2436'];

$html .='</p>
		</li>';

//Q.8

//$html .='<li><p class="orange"><span>8</span><span>  How would you rate the overall design of the audit?</span></p><p>';
//$html .=$sql_data['266617X39X2436'];
//$html .='</p></li>';

// New Table Addition

$html .='<li>
	<p class="orange"><span>8</span><span>How would you rate the overall design of the audit?</span></p>
	<table class="table">
	<tr>
                        <th>Aspect</th>
                        <th>Good / Average /Bad</th>
	</tr>
	<tr>
                        <td>Content</td>
                        <td>';
                         if($sql_data['266617X39X2437SQ001']=="A1")
                             {
                                $html.="Good";
                             } 
                         if($sql_data['266617X39X2437SQ001']=="A2")
                             {
                                 $html.="Average";
                             }
                          if($sql_data['266617X39X2437SQ001']=="A3")
                             {
                                 $html.="Bad";
                             }
                           $html .='</td>
	</tr>
	<tr>
                          <td>Distribution of time among tasks</td>
                          <td>';
                                if($sql_data['266617X39X2437SQ002']=="A1")
                             {
                                $html.="Good";
                             } 
                         if($sql_data['266617X39X2437SQ002']=="A2")
                             {
                                 $html.="Average";
                             }
                          if($sql_data['266617X39X2437SQ002']=="A3")
                             {
                                 $html.="Bad";
                             }
                           $html .='</td>
	</tr>
	<tr>
                            <td>Sequencing of tasks</td>
                            <td>';
                                  if($sql_data['266617X39X2437SQ003']=="A1")
                             {
                                $html.="Good";
                             } 
                         if($sql_data['266617X39X2437SQ003']=="A2")
                             {
                                 $html.="Average";
                             }
                          if($sql_data['266617X39X2437SQ003']=="A3")
                             {
                                 $html.="Bad";
                             }
                           $html .='</td>
	</tr>
	<tr>
                            <td>Orientation for conducting tasks</td>
                            <td>';
                                 if($sql_data['266617X39X2437SQ004']=="A1")
                             {
                                $html.="Good";
                             } 
                         if($sql_data['266617X39X2437SQ004']=="A2")
                             {
                                 $html.="Average";
                             }
                          if($sql_data['266617X39X2437SQ004']=="A3")
                             {
                                 $html.="Bad";
                             }
                           $html .='</td>
	</tr>
	</table>
	</li>';

// New Table Addition


//Q.9

$html .='<li><p class="orange"><span>9</span><span> Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit?</span></p>
		<p>';
if ($sql_data['266617X39X2442'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}

$html .='</p>
		</li>';

if ($sql_data['266617X39X2442'] == "Y") {
    $html .='<li><p class="orange"><span>9(a)</span><span> If yes, please share your suggestions.</span></p>
		<p>';
    $html .=$sql_data['266617X39X2443'];

    $html .='</p>
		</li>';
}

//Q.10

$html .='<li><p class="orange"><span>10</span><span> Could you finish all the tasks in given period of time online?</span></p>
		<p>';
 if($sql_data['266617X39X2444'] == "Y")
           {
              $html .="Yes";
           }
           else
           {
               $html .="No";
           }


$html .='</p>
		</li>';

//Q.11

$html .='<li><p class="orange"><span>11</span><span>How many times did you contact the Green Schools Programme Team for guidance and counseling?</span></p>
		<p>';
$Programme = array(1 => "Never", 2 => "Once", 3 => "Twice", 4 => "More than twice");
$index_arr = $sql_data['266617X39X2445'];
$html .=$Programme[$index_arr];

$html .='</p>
		</li>';


//Q.12

$html .='<li><p class="orange"><span>12</span><span> Water being the focus this year, did you find the questionnaire in Water section helpful to make your school understand how to become water efficient?</span></p>
		<p>';
if ($sql_data['266617X39X2446'] == "Y") {
    $html .="Yes";
} else {
    $html .="No";
}

$html .='</p>
		</li>';



if ($sql_data['266617X39X2446'] == "N") {
    $html .='<li><p class="orange"><span>12(a)</span><span> If no, please share your suggestions?</span></p>
		<p>';
    $html .=$sql_data['266617X39X2447'];

    $html .='</p>
		</li>';
}

//if ($sql_data['266617X39X2446'] == "N") {
//    $html .='<li><p class="orange"><span>12(a)</span><span> If no, why?</span></p>
//		<p>';
//    $html .=$sql_data['266617X39X2451'];
//
//    $html .='</p>
//		</li>';
//}

$html .='<li><p class="orange"><span>13</span><span> Did your students enjoy doing the Water activities?</span></p>
		<p>';

if($sql_data['266617X39X2448'] == "Y")
           {
              $html .="Yes";
           }
           else
           {
               $html .="No";
           }
$html .='</p></li>';


if($sql_data['266617X39X2448'] == "Y")
{
$html .='<li><p class="orange"><span>13(a)</span><span>How many students were involved in the activities?</span></p>
		<p>';
$html .=$sql_data['266617X39X2449'];
$html .='</p></li>';
}

if($sql_data['266617X39X2448'] == "N")
{
$html .='<li><p class="orange"><span>13(a)</span><span> If no, why?</span></p>
		<p>';
$html .=$sql_data['266617X39X2451'];
$html .='</p></li>';
}



$html .='<h6> Checklist of uploaded documents</h6>';


if ($sql_data['266617X39X26811'] == "Y") {
    $html .='<li>';
    $html .="PUC certificates of not more than five buses";
    $html .='</li>';
}



if ($sql_data['266617X39X26812'] == "Y") {
    $html .='<li>';
    $html .="Picture of Air Quality Monitoring equipment of school";
    $html .='</li>';
}



if ($sql_data['266617X39X26813'] == "Y") {
    $html .='<li>';
    $html .="Fuel Bills";
    $html .='</li>';
}



if ($sql_data['266617X39X26814'] == "Y") {
    $html .='<li>';
    $html .="Picture of School owned vehicles";
    $html .='</li>';
}



if ($sql_data['266617X39X26815'] == "Y") {
    $html .='<li>';
    $html .="Electricity Bill";
    $html .='</li>';
}



if ($sql_data['266617X39X26816'] == "Y") {
    $html .='<li>';
    $html .="Picture of 5 star appliances used by school";
    $html .='</li>';
}



if ($sql_data['266617X39X26817'] == "Y") {
    $html .='<li>';
    $html .="Picture of Renewable sources of Energy";
    $html .='</li>';
}



if ($sql_data['266617X39X26818'] == "Y") {
    $html .='<li>';
    $html .="Picture of Mid-day meal being served";
    $html .='</li>';
}



if ($sql_data['266617X39X26819'] == "Y") {
    $html .='<li>';
    $html .="Photographs of lunch boxes";
    $html .='</li>';
}



if ($sql_data['266617X39X268110'] == "Y") {
    $html .='<li>';
    $html .="Picture of Canteen selling UPPF";
    $html .='</li>';
}




if ($sql_data['266617X39X268111'] == "Y") {
    $html .='<li>';
    $html .="Traditional food items sold in canteen";
    $html .='</li>';
}



if ($sql_data['266617X39X268112'] == "Y") {
    $html .='<li>';
    $html .="Pictures of Events sponsored by UPPF companies";
    $html .='</li>';
}



if ($sql_data['266617X39X268113'] == "Y") {
    $html .='<li>';
    $html .="Pictures of Green Cover";
    $html .='</li>';
}



if ($sql_data['266617X39X268114'] == "Y") {
    $html .='<li>';
    $html .="Pictures of landscaped area";
    $html .='</li>';
}

if ($sql_data['266617X39X268115'] == "Y") {
    $html .='<li>';
    $html .="Building construction plan";
    $html .='</li>';
}

if ($sql_data['266617X39X268116'] == "Y") {
    $html .='<li>';
    $html .="Pictures of bio-pesticides";
    $html .='</li>';
}

if ($sql_data['266617X39X268117'] == "Y") {
    $html .='<li>';
    $html .="Pictures of dustbins in classroom showing segregation at source";
    $html .='</li>';
}



if ($sql_data['266617X39X268118'] == "Y") {
    $html .='<li>';
    $html .="Pictures of playground with more than two dustbins";
    $html .='</li>';
}



if ($sql_data['266617X39X268119'] == "Y") {
    $html .='<li>';
    $html .="Picture of audit team weighing solid waste";
    $html .='</li>';
}



if ($sql_data['266617X39X268120'] == "Y") {
    $html .='<li>';
    $html .="Picture of types of solid waste generated";
    $html .='</li>';
}



if ($sql_data['266617X39X268121'] == "Y") {
    $html .='<li>';
    $html .="Pictures of recycling units - composting pit, paper recycling machine, selling paper to kabadiwala, recyclers,etc";
    $html .='</li>';
}



if ($sql_data['266617X39X268122'] == "Y") {
    $html .='<li>';
    $html .="Pictures of housekeeping staff disposing different types of solid waste";
    $html .='</li>';
}



if ($sql_data['266617X39X268123'] == "Y") {
    $html .='<li>';
    $html .="Pictures of burning waste";
    $html .='</li>';
}



if ($sql_data['266617X39X268124'] == "Y") {
    $html .='<li>';
    $html .="Pictures of Electronic items used by school and storage of non-working electronic items";
    $html .='</li>';
}



if ($sql_data['266617X39X268125'] == "Y") {
    $html .='<li>';
    $html .="Certificate of disposing e-waste from authorised dealer/dismantler";
    $html .='</li>';
}


if ($sql_data['266617X39X268126'] == "Y") {
    $html .='<li>';
    $html .="Waste Policy";
    $html .='</li>';
}

if ($sql_data['266617X39X268127'] == "Y") {
    $html .='<li>';
    $html .="Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc";
    $html .='</li>';
}

if ($sql_data['266617X39X268128'] == "Y") {
    $html .='<li>';
    $html .="Pictures of respective audit teams doing survey";
    $html .='</li>';
}




$html .='</ul>
	</div>';

$html .='</div>
</body>
</html>';
echo $html;
die();

$html .= ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->set_paper("A4");
$dompdf->load_html($html);
$dompdf->render();
$random = rand(5, 100);
$date = $sql_email_school['tid'];
$pdf_sc_city = $sql_email_school['attribute_7'];
$school_name_pdf = str_replace(' ', '_', $sql_email_school['attribute_1']);
$postfix = "$school_name_pdf" . "_" . $pdf_sc_city . "_" . $date . '.pdf';
//$postfix = "responses_".$random.$date.'.pdf';
$dompdf->stream($postfix);
