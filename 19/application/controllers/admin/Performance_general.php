<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_general extends CI_Controller {

    public function __construct() {
	parent::__construct();
	$this->load->helper('common_helper');
    }

    public function getFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function getSchoolFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function schoolprofilegenral() {
	$data = array();
	$query = $this->db->query("SELECT gsp_school.*,gsp_school.id AS school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();
	//echo '<pre>'; print_r($uArray);
	
	
	
	$arr = array(
	    '1' => 'Day Scholar',
	    '2' => 'Day Boarding',
	    '3' => 'Residential',
	    '4' => 'Day Scholar + Day Boarding',
	    '5' => 'Day Boarding + Residential',
	    '6' => 'Day Scholar + Residential',
	    '7' => 'Day Scholar + Day Boarding + Residential'
	);
	$shifts = array(
	    '1' => 'Morning',
	    '2' => 'Evening',
	    '3' => 'Both',
	);
	$arrBoard = array(
	    '1' => 'State board of education',
	    '2' => 'Central Board of Secondary Education',
	    '3' => 'Indian Certificate of Secondary Education',
	    '4' => 'International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination',
	    '5' => 'Others'
	);
	$area = array(
	    '1' => 'Urban Area',
	    '2' => 'Rural Area',
	);
	$type_aid = array(
	    '1' => 'Government School',
	    '2' => 'Government – Aided School',
	    '3' => 'Private School',
	);
	for ($i = 0; $i < count($uArray); $i++) {
    $audit_period=null;
	if(getFiled('Q7G1', $uArray[$i]['userid'])==1):
	$audit_period=$audit_period."Jan".",";
	endif;
	if(getFiled('Q7G2', $uArray[$i]['userid'])==2):
	$audit_period=$audit_period."Feb".",";
	endif;
	if(getFiled('Q7G3', $uArray[$i]['userid'])==3):
	$audit_period=$audit_period."Mar".",";
	endif;
	if(getFiled('Q7G4', $uArray[$i]['userid'])==4):
	$audit_period=$audit_period."April".",";
	endif;
	if(getFiled('Q7G5', $uArray[$i]['userid'])==5):
	$audit_period=$audit_period."May".",";
	endif;
	if(getFiled('Q7G6', $uArray[$i]['userid'])==6):
	$audit_period=$audit_period."June".",";
	endif;
	if(getFiled('Q7G7', $uArray[$i]['userid'])==7):
	$audit_period=$audit_period."July".",";
	endif;
	if(getFiled('Q7G8', $uArray[$i]['userid'])==8):
	$audit_period=$audit_period."Aug".",";
	endif;
	if(getFiled('Q7G9', $uArray[$i]['userid'])==9):
	$audit_period=$audit_period."Sept".",";
	endif;
	if(getFiled('Q7G10', $uArray[$i]['userid'])==10):
	$audit_period=$audit_period."Oct".",";
	endif;
	if(getFiled('Q7G11', $uArray[$i]['userid'])==11):
	$audit_period=$audit_period."Nov".",";
	endif;
	if(getFiled('Q7G12', $uArray[$i]['userid'])==12):
	$audit_period=$audit_period."Dec".",";
	endif;
	$gender=null;
	if(getFiled('Q2G1', $uArray[$i]['userid'])==1):
	$gender=$gender."only boys".",";
	elseif(getFiled('Q2G1', $uArray[$i]['userid'])==2):
	$gender=$gender."Only Girls".",";
	elseif(getFiled('Q2G1', $uArray[$i]['userid'])==3):
	$gender=$gender."Mixed/Co-education".",";
	endif;
	    $vale = (getFiled('Q1S1', $uArray[$i]['userid']) != '') ? getFiled('Q1S1', $uArray[$i]['userid']) : "";
	    //echo $vale.$uArray[$i]['id'].'<br>';
	    $val_shift = (getFiled('Q2S1', $uArray[$i]['userid']) != '') ? getFiled('Q2S1', $uArray[$i]['userid']) : "";
	    $val_board = (getFiled('Q3G1', $uArray[$i]['userid']) != '') ? getFiled('Q3G1', $uArray[$i]['userid']) : "";
	    $val_area = (getFiled('Q8G1', $uArray[$i]['userid']) != '') ? getFiled('Q8G1', $uArray[$i]['userid']) : "";
	    $val_aid = (getFiled('Q9G1', $uArray[$i]['userid']) != '') ? getFiled('Q9G1', $uArray[$i]['userid']) : "";
	    //echo $vale;
	    $data[$i] = array(
		'userid' => $uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'name' => $uArray[$i]['name'],
		'address1' => $uArray[$i]['address1'],
		'address2' => $uArray[$i]['address2'],
		'country' => 'India',
		'state' => $uArray[$i]['state'],
		'district' => $uArray[$i]['district'],
		'city' => $uArray[$i]['city'],
		'pincode' => $uArray[$i]['pincode'],
		'isd' => '91',
		'std' => $uArray[$i]['std'],
		'landline' => $uArray[$i]['telephone'],
		'mobile' => $uArray[$i]['mobile'],
		'principal' => $uArray[$i]['principle_name'],
		'codinator' => $uArray[$i]['coname'],
		'codinator_mail' => $uArray[$i]['coemail'],
		'password' => $uArray[$i]['password'],
		'codinator_mobile' => $uArray[$i]['comobile'],
		'codinator_mobile' => $uArray[$i]['comobile'],
		'codinator_mobile' => $uArray[$i]['comobile'],
		'category' => ($vale != '') ? $arr[$vale] : "",
		'shifts' => ($val_shift != '') ? $shifts[$val_shift] : "",
		'lowest_level' => (getFiled('Q1G1', $uArray[$i]['userid']) != '') ? getFiled('Q1G1', $uArray[$i]['userid']) : "",
		'higest_level' => (getFiled('Q1G2', $uArray[$i]['userid']) != '') ? getFiled('Q1G2', $uArray[$i]['userid']) : "",
		'gender' => ($gender != '') ? $gender : "",
		'educatio_board' => ($val_board != '') ? $arrBoard[$val_board] : "",
		'population' => (getFiled('Q4G4S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S3', $uArray[$i]['userid']) : "",
		'students' => (getFiled('Q4G1S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G1S3', $uArray[$i]['userid']) : "",
		'teachers' => (getFiled('Q4G2S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G2S3', $uArray[$i]['userid']) : "",
		'nonteachers' => (getFiled('Q4G3S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G3S3', $uArray[$i]['userid']) : "",
		'male' => (getFiled('Q4G4S1', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S1', $uArray[$i]['userid']) : "",
		'female' => (getFiled('Q4G4S2', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S2', $uArray[$i]['userid']) : "",
		'visitor' => (getFiled('Q5G1', $uArray[$i]['userid']) != '') ? getFiled('Q5G1', $uArray[$i]['userid']) : "",
		'working_days' => (getFiled('Q6G1', $uArray[$i]['userid']) != '') ? getFiled('Q6G1', $uArray[$i]['userid']) : "",
		'audit_period' => ($audit_period != '') ? $audit_period : "",
		'location' => ($val_area != '') ? $area[$val_area] : "",
		'aid' => ($val_aid != '') ? $type_aid[$val_aid] : ""
	    );
	}

//	print_r($data); exit;
$this->db->insert_batch('tbl_general', $data);
echo '<pre>';
print_r($data);
echo '<pre>';
    }

    public function table() {
	$this->load->dbforge();
	$key = array(
	        'id', 
	    'userid',
		'school_id',/*** General Part Table Start ***/
	    'name',
	    'address1',
	    'address2',
	    'country',
	    'state',
	    'district',
	    'city',
	    'pincode',
	    'isd',
	    'std',
	    'landline',
	    'mobile',
	    'principal',
	    'codinator',
	    'codinator_mail',
	    'password',
	    'codinator_mobile',
	    'codinator_mobile',
	    'codinator_mobile',
	    'category',
	    'shifts',
	    'lowest_level',
	    'higest_level',
	    'gender',
	    'educatio_board',
	    'population',
	    'students',
	    'teachers',
	    'nonteachers',
	    'male',
	    'female',
	    'visitor',
	    'working_days',
	    'audit_period',
	    'location',
	    'aid',/*** General Part Table End ***/
	    'Q4A1',/*** Air Part Table Start ***/
	    'Q5A110S2',
	    'Q6A1',
	    'Q6A2S1T1',
	    'Q6A2S1T2',
	    'Q6A2S1T3',
	    'Q6A2S1T4',
	    'Q6A2S1T5',
	    'Q6A2S1T6',
	    'Q6A2S3D5',
	    'Q6A2S3D1',
	    'Q6A2S3P1',
	    'Q6A2S3L1',
	    'Q6A2S3C1',
	    'Q6A2S3E1',
	    'Q6A2S3H1',
	    'Q6A2S3B1',
	    'Q6A2S3D5',
	    'total_cars',
	    'Q6A2S3B1',
	    'Q6A2S3D2',
	    'Q6A2S3P2',
	    'Q6A2S3L2',
	    'Q6A2S3C2',
	    'Q6A2S3E2',
	    'Q6A2S3H2',
	    'total_vans',
	    'Q6A2S3D3',
	    'Q6A2S3P3',
	    'Q6A2S3L3',
	    'Q6A2S3C3',
	    'Q6A2S3E3',
	    'Q6A2S3H3',
	    'Q6A2S3B3',
	    'total_other',
	    'Q6A2S3D4',
	    'Q6A2S3P4',
	    'Q6A2S3L4',
	    'Q6A2S3C4',
	    'Q6A2S3E4',
	    'Q6A2S3H4',
	    'Q6A2S3B4',
	    'total_disel',
	    'total_petrol',
	    'total_lpg',
	    'total_cng',
	    'total_hybruser',
	    'total_electric',
	    'total_biofuel',
	    'Q6A3',
	    'Q6A4S1',
	    'Q7A1S1',
	    'Q7A1S2',
	    'Q7A1S3',
	    'Q7A1S4',
	    'Q7A2S1',
	    'Q7A2S2',
	    'Q7A2S3',
	    'Q7A2S4',
	    'Q7A3S1',
	    'Q7A3S2',
	    'Q7A3S3',
	    'Q7A3S4',
	    'Q7A4S1',
	    'Q7A4S2',
	    'Q7A4S3',
	    'Q7A4S4',
	    'Q7A5S1',
	    'Q7A5S2',
	    'Q7A5S3',
	    'Q7A5S4',
	    'Q7A6S1',
	    'Q7A6S2',
	    'Q7A6S3',
	    'Q7A6S4',
	    'Q7A7S1',
	    'Q7A7S2',
	    'Q7A7S3',
	    'Q7A7S4',
	    'Q7A8S1',
	    'Q7A8S2',
	    'Q7A8S3',
	    'Q7A8S4',
	    'Q7A9S1',
	    'Q7A9S2',
	    'Q7A9S3',
	    'Q7A9S4',
	    'Q7A10S1',
	    'Q7A10S2',
	    'Q7A10S3',
	    'Q7A10S4',
	    'Q7A11S1',
	    'Q7A11S2',
	    'Q7A11S3',
	    'Q7A11S4',
	    'Q8A1',
	    'Q9A1',
	    'Q9A2',
	    'air_points', /*** Air Part Table End ***/
		'Q4E1', /*** Energy Part Table Start ***/
        'upload',
        'Q5E1',
        'Q6E1S1',
        'Q6E2S1',
        'Q6E3S1',
        'Q6E4S1',
        'Q6E5S1',
        'Q6E6S1',
        'Q6E7S1',
        'Q6E16S1',
        'Q6E8S1',
        'Q6E9S1',
        'Q6E10S1',
        'Q6E11S1',
        'Q6E12S1',
        'Q6E13S1',
        'Q6E14S1',
        'Q6E1S2',
        'Q6E2S2',
        'Q6E3S2',
        'Q6E4S2',
        'Q6E5S2',
        'Q6E6S2',
        'Q6E7S2',
        'Q6E16S2',
        'Q6E8S2',
        'Q6E9S2',
        'Q6E10S2',
        'Q6E11S2',
        'Q6E12S2',
        'Q6E13S2',
        'Q6E14S2',
        'Q6E15S2',
        'upload1',
        'Q7E2S1',
        'Q7E2S2',
		'Q7E2S3',
        'Q7E3S1',
        'Q7E3S2',
        'Q7E3S3',
        'Q7E4S1',
        'Q7E4S2',
		'Q7E4S3',
        'Q7E5S1',
        'Q7E5S2',
        'Q7E5S3',
        'Q7E6S1',
        'Q7E6S2',
		'Q7E6S3',
        'Q7E7S1',
        'Q7E7S2',
        'Q7E7S3',
        'Q7E8S1',
        'Q7E8S2',
		'Q7E8S3',
        'upload2',
        'Q8E1',
        'Q9E1',
        'upload3',
        'Q9E1S1',
		'Q9E1S2',
        'Q9E1S3',
        'Q9E1S5',
        'Q9E1S4',
        'Q10E1',
        'upload4',
		'energy_point', /*** Energy Part Table End ***/
		'Q4F1', /*** Food Part Table Start ***/
        'Q5F1',
        'Q5F1S1',
        'Q5F1S2',
        'Q5F1S3',
        'Q5F1S4',
        'Q5F2',
        'Q6F2S1',
        'Q6F2S2',
        'Q6F2S3',
        'Q6F3S1',
        'Q6F3S2',
        'Q6F3S3',
        'Q6F4S1',
        'Q6F4S2',
        'Q6F4S3',
        'Q6F5S1',
        'Q6F5S2',
        'Q6F5S3',
        'Q6F6S1',
        'Q6F6S2',
        'Q6F6S3',
        'Q6F7S1',
        'Q6F7S2',
        'Q6F7S3',
        'Q6F8S1',
        'Q6F8S2',
        'Q6F8S3',
        'Q6F9S1',
        'Q6F9S2',
        'Q6F9S3',
        'Q6F10S1',
        'Q6F10S2',
        'Q6F10S3',
        'Q7F1',
        'Q7F1S1',
        'Q7F1S2',
		'Q7F1S3',
        'Q7F1S4',
        'Q7F1S5',
        'upload',
		'Q7F3S1',
        'Q8F1',
        'Q8F1S1',
        'Q8F1S2',
		'Q8F1S3',
        'Q8F1S4',
        'Q8F1S5',
        'Q9F1',
		'Q9F2',
        'Q10F1',
        'Q10F2',
        'Q11F1',
		'Q11F2',
        'Q11F3',
        'upload2',
        'Q12F1',
		'Q12F2',
        'Q13F1',
        'Q13F2',
        'upload3',
		'food_point', /*** Food Part Table End ***/
		'Q4L1', /*** Land Part Table Start ***/
        'Q4L2',
        'Q4L3',
        'Q4L4',
        'Q4L5',
        'Q4L6',
        'Q4L7',
        'Q4L8',
        'Q4L9',
        'Q4L10',
        'Q4L11',
        'Q4L12',
        'TotalArea',
        'PercentageArea',
        'Q5L1S3',
        'Q5L1S1',
        'Q5L1S2',
        'Q5L2S3',
        'Q5L2S2',
        'Q5L2S1',
        'Q6L1',
        'upload',
        'land_point', /*** Land Part Table End ***/
		 'Q4W1', /*** Water Part Table Start ***/
   'Q4W2',
   'Q4W3',
   'Q4W4',
   'Q4W5',
   'Q4W6',
   'Q4W7',
   'Q4W8',
   'Q4W9',
   'Q4W10',
   'Q4W11',
   'Q5W1',
   'Q5W2',
   'Q5W3',
   'Q5W4',
   'Q6W1',
   'Q6W2',
   'Q6W3',
   'Q6W4',
   'Q6W5',
   'Q7W1',
   'Q7W2',
   'Q8W1S1',
   'Q8W1S2',
   'Q8W1S3',
   'Q8W1S4',
   'Q8W1S5',
   'Q8W1S6',
   'Q8W1S7',
   'Q8W1S8',
   'Q8W1S9',
   'Q8W1S10',
   'Q8W1S11',
   'Q8W2',
   'Q8W2S1',
   'Q8W2S1S1',
   'Q8W2S2',
   'Q8W2S2S1',
   'Q8W2S2S2',
   'Q8W2S2S7',
   'Q8W2S2S10',
   'Q8W2S4',
   'Q8W2S31',
   'Q8W2S4S1',
   'Q8W2S4S22',
   'Q8W2S5',
   'Q8W2S7',
   'Q8W2S61',
   'Q8W2S9',
   'Q8W2S8',
   'Q8W2S9',
   'Q8W2S10',
   'Q8W2S12',
   'Q8W2S13',
   'Q8W3S1',
   'Q8W3S2',
   'Q8W3S3',
   'Q8W3S4',
   'Q8W3S5',
   'Q8W3S6',
   'Q8W3S7',
   'Q8W3S8',
   'Q9W1',
   'Load_on_DWT',
   'Q10W1',
   'Q11W1',
   'Load_on_Ablution_Tap',
   'Q13W1S1',
   'Q13W1S2',
   'Q13W1S3',
   'Q13W1S4',
   'Load_on_Water_Closet',
   'Q14W1',
   'Q15W1',
   'Q15W1',
   'Q16W1',
   'Q21W1',
   'Q18W1',
   'Q19W1',
   'Q20W1',
   'Q20W2',
   'points',/*** Water Part Table End ***/
		 'Q4Wa1',/*** Waste Part Table End ***/
    'Q4Wa2',
    'Q5Wa1S1',
    'Q5Wa1S2',
    'Q5Wa1S3',
    'Q5Wa1S4',
    'Q5Wa1S5',
    'Q5Wa2S1',
    'Q5Wa2S2',
    'Q5Wa2S3',
    'Q5Wa2S4',
    'Q5Wa2S5',
    'Q5Wa3S1',
    'Q5Wa3S2',
    'Q5Wa3S3',
    'Q5Wa3S4',
    'Q5Wa3S5',
    'Q5Wa4S1',
    'Q5Wa4S2',
    'Q5Wa4S3',
    'Q5Wa4S4',
    'Q5Wa4S5',
    'Q5Wa5S1',
    'Q5Wa5S2',
    'Q5Wa5S3',
    'Q5Wa5S4',
    'Q5Wa5S5',
    'Q5Wa6S1',
    'Q5Wa6S2',
    'Q5Wa6S3',
    'Q5Wa6S4',
    'Q5Wa6S5',
    'Q5Wa7S1',
    'Q5Wa7S2',
    'Q5Wa7S3',
    'Q5Wa7S4',
    'Q5Wa7S5',
    'Q5Wa8S1',
    'Q5Wa8S2',
    'Q5Wa8S3',
    'Q5Wa8S4',
    'Q5Wa8S5',
    'Q5Wa9S1',
    'Q5Wa9S2',
    'Q5Wa9S3',
    'Q5Wa9S4',
    'Q5Wa9S5',
    'Q5Wa10S1',
    'Q5Wa10S2',
    'Q5Wa10S3',
    'Q5Wa10S4',
    'Q5Wa10S5',
    'Q5Wa11S1',
    'Q5Wa11S2',
    'Q5Wa11S3',
    'Q5Wa11S4',
    'Q5Wa11S5',
    'Q6Wa1S1',
    'Q6Wa1S2',
    'Q6Wa1S3',
    'Q6Wa1S4',
    'Q6Wa1S5',
    'Q6Wa1S6',
    'Q6Wa2S1',
    'Q6Wa2S2',
    'Q6Wa2S3',
    'Q6Wa2S4',
    'Q6Wa2S5',
    'Q6Wa2S6',
    'Q6Wa2S7',
    'Q6Wa2S8',
    'Q6Wa2S9',
    'Q6Wa3S1',
    'Q6Wa3S2',
    'Q6Wa3S3',
    'Q6Wa3S4',
    'Q6Wa4S1',
    'Q6Wa4S2',
    'Q6Wa5S1',
    'Q6Wa5S2',
    'Q6Wa6S1',
    'Q6Wa6S2',
    'Q6Wa7S1',
    'Q6Wa7S2',
    'Q8Wa1',
    'Q8Wa1S1',
    'Q8Wa1S2',
    'Q8Wa1S3',
    'Q8Wa1S4',
    'Q8Wa1S5',
    'Q8Wa1S6',
    'Q8Wa2S1',
    'Q8Wa2S2',
    'Q8Wa2S3',
    'Q8Wa2S4',
    'Q8Wa2S5',
    'Q8Wa2S5',
    'Q8Wa2S7',
    'Q8Wa2S8',
    'Q8Wa2S9',
    'Q8Wa3S1',
    'Q8Wa3S2',
    'Q8Wa3S3',
    'Q8Wa3S4',
    'Q8Wa4S1',
    'Q8Wa4S2',
    'Q8Wa5S1',
    'Q8Wa5S2',
    'Q8Wa6S1',
    'Q8Wa6S2',
    'Q8Wa7S1',
    'Q8Wa7S2',
    'Q9Wa1',
    'Q9Wa2S1',
    'Q9Wa31',
    'Q9Wa4S1',
    'Q10Wa1',
    'paper_recycling_procedures',
    'plastic_recycling_procedures',
    'horticultural_waste_recycling_procedures',
    'e_waste_recycling_procedures',
    'hazardous_waste_recycling_procedures',
    'wood_glass_metal_recycling_procedures',
    'biomedical_waste_recycling_procedures',
    'others_recycling_procedures',
    'Q12Wa1S1',
    'Q12Wa1S2',
    'Q12Wa1S3',
    'Q12Wa1S4',
    'Q12Wa2S1',
    'Q12Wa2S2',
    'Q12Wa2S3',
    'Q12Wa2S4',
    'Q12Wa3S1',
    'Q12Wa3S2',
    'Q12Wa3S3',
    'Q12Wa3S4',
    'Q12Wa4S1',
    'Q12Wa4S2',
    'Q12Wa4S3',
    'Q12Wa4S4',
    'Q12Wa5S1',
    'Q12Wa5S2',
    'Q12Wa5S3',
    'Q12Wa5S4',
    'Q12Wa6S1',
    'Q12Wa6S2',
    'Q12Wa6S3',
    'Q12Wa6S4',
    'Q12Wa7S1',
    'Q12Wa7S2',
    'Q12Wa7S3',
    'Q12Wa7S4',
    'Q12Wa8S1',
    'Q12Wa8S2',
    'Q12Wa8S3',
    'Q12Wa8S4',
    'Q12Wa9S1',
    'Q12Wa9S2',
    'Q12Wa9S3',
    'Q12Wa9S4',
    'Q12Wa10S1',
    'Q12Wa10S2',
    'Q12Wa10S3',
    'Q12Wa10S4',
    'Q12Wa11S1',
    'Q12Wa11S2',
    'Q12Wa11S3',
    'Q12Wa11S4',
    'Q12Wa12S1',
    'Q12Wa12S2',
    'Q12Wa12S3',
    'Q12Wa12S4',
    'Q12Wa13S1',
    'Q12Wa13S2',
    'Q12Wa13S3',
    'Q12Wa13S4',
    'Q12Wa15S1',
    'Q12Wa15S2',
    'Q12Wa15S3',
    'Q12Wa15S4',
    'Q12Wa16S1',
    'Q12Wa16S2',
    'Q12Wa16S3',
    'Q12Wa16S4',
    'Q12Wa17S1',
    'Q12Wa17S2',
    'Q12Wa17S3',
    'Q12Wa17S4',
    'Q12Wa18S1',
    'Q12Wa18S2',
    'Q12Wa18S3',
    'Q12Wa18S4',
    'Q12Wa19S1',
    'Q12Wa19S2',
    'Q12Wa19S3',
    'Q12Wa19S4',
    'Q12Wa20S1',
    'Q12Wa20S2',
    'Q12Wa20S3',
    'Q12Wa20S4',
    'Q12Wa21S1',
    'Q12Wa21S2',
    'Q12Wa21S3',
    'Q12Wa21S4',
    'Q12Wa22S1',
    'Q12Wa22S2',
    'Q12Wa22S3',
    'Q12Wa22S4',
    'Q12Wa23S1',
    'Q12Wa23S2',
    'Q12Wa23S3',
    'Q12Wa23S4',
    'Q12Wa24S1',
    'Q12Wa24S2',
    'Q12Wa24S3',
    'Q12Wa24S4',
    'Q12Wa25S1',
    'Q12Wa25S2',
    'Q12Wa25S3',
    'Q12Wa25S4',
    'Q12Wa26S1',
    'Q12Wa26S2',
    'Q12Wa26S3',
    'Q12Wa26S4',
    'Q12Wa27S1',
    'Q12Wa27S2',
    'Q12Wa27S3',
    'Q12Wa27S4',
    'Q12Wa28S1',
    'Q12Wa28S2',
    'Q12Wa28S3',
    'Q12Wa28S4',
    'Q13Wa1',
    'Q13Wa2',
    'Q14Wa1',
    'Q15Wa1',
    'Q15Wa2',
    'Q15Wa2S1',
    'Q16Wa1',
    'Q17Wa1',
    'Q18Wa1',
    'Q18Wa2S1',
    'Q19Wa1',
    'water_points' /*** Waste Part Table End ***/
	);
  echo count($key);
    for ($x = 0; $x < count($key); $x++) {
        if ($x == 0) {
        $test=$this->dbforge->add_field(array(
            $key[$x] => array(
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => TRUE
            ),
        ));
        } else {
        $test=$this->dbforge->add_field(array(
            $key[$x] => array(
            'type' => 'TEXT',
            ),
        ));
        }
    }
//    echo '<pre>';
//    print_r($test->fields);
//    exit;
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('tbl_total');
    }

}
