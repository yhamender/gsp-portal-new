<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('functions.php');

include('header.php');
?>
<script language="javascript" type="text/javascript">

function popitup(url) {
newwindow=window.open(url,'name','height=200,width=600');
if (window.focus) {newwindow.focus()}
return false;
}
</script>
<script type = 'text/javascript'>
$(document).ready(function() {
	//alert("test");
      $('#example').DataTable( {
         dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    } );
} );
</script>
 
<main class="bdr"  style='border: none;'>
	<div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>AUDIT COMPLETED</h2>
		 <a href="export_excel_completed.php">
            <div class="exportBtn">
            Export to Excel    
            </div> 
            </a>
        </div>
            <?php
            if(isset($_REQUEST['para']) && $_REQUEST['para'] == "success")
            {
            ?>
            <div style="text-align: center; color: green; font-size:16px; ">Response PDF has been successfully sent to the Co-ordinator's mail id.</div>
            <?php 
            }
            ?>
           
            
<table id="example" class="display" cellspacing="0" width="100%">
     <thead>
     <tr>
     <th>S.No</th>
     <th>Sch.Id</th>
     <th>School Name</th>
     <th>State</th>
     <th>City</th>
     <th>Reg. Date</th>
     <th>Comp. Date</th>
     <th>Air Points</th>
     <th>Energy Points</th>
     <th>Food Points</th>
     <th>Land Points</th>
     <th>Water Points</th>
     <th>Waste Points</th>
     <th>Total Points</th>
	 <th>Percentage Score</th>
	 <th>Completeness</th>
    <th>Category</th>
     <th>Action</th>
 
     </tr>
     </thead> 
     <tbody>
<?php

//select id,token,266617X4X2252_filecount,266617X8X2260_filecount,266617X36X2259_filecount,266617X7X2258_filecount,266617X37X2257_filecount,266617X38X2256_filecount from `lime_survey_266617` where `submitdate` is not null order by `startdate` DESC
//$sql_data = mysql_query("select id,token from `lime_survey_266617` where `submitdate` is not null order by `startdate` DESC");    
$sql_data = mysql_query("SELECT survey.id,survey.token,surtoken.tid,surtoken.attribute_1,surtoken.attribute_5,surtoken.attribute_7,surtoken.datetime,surtoken.completed FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken WHERE survey.token=surtoken.token AND surtoken.completed !='N' AND surtoken.usesleft<=0  AND survey.`submitdate` IS NOT NULL ORDER BY survey.`startdate` DESC");
$i = 1;

$cnt1 = 0;
$cnt2 = 0;
$cnt3 = 0;
$cnt4 =0;

while($sql_details_array=mysql_fetch_assoc($sql_data))
{

 $token=$sql_details_array['token'];

 
 $totalpoints=number_format(GetAirPoints($token)+GetEnergyPoints($token)+GetFoodPoints($token)+GetLandPoints($token)+GetWaterPoints($token)+GetWastePoints($token), 2);
 
 $totalpointspercent=number_format((($totalpoints*100)/157),2);
 
 if($totalpointspercent>=70)
 {
	$catclass="cat_green";  
	$category="Green";
        $cnt1++;
        
 }elseif($totalpointspercent>=50)
 {
	 $catclass="cat_yellow";
	 $category="Yellow";
        $cnt2++;
 }elseif($totalpointspercent>=35)
 {
	 $catclass="cat_orange";
	 $category="Orange";
         $cnt3++;
 }elseif($totalpointspercent<35)
 {
	 $catclass="cat_red";
	 $category="Red";
         $cnt4++;
 }
 
 
 
 
 //$sql_details = mysql_query("select tid,token,attribute_1,attribute_5,attribute_7,datetime,completed from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'");	
	
   // while($sql_details_array=mysql_fetch_assoc($sql_details))
   // {
		
        
		/*
    $download_file_link = 0;  
    if(($sql_data_array['266617X4X2252_filecount'] !=0) || ($sql_data_array['266617X8X2260_filecount'] !=0) || ($sql_data_array['266617X36X2259_filecount'] !=0) || ($sql_data_array['266617X7X2258_filecount'] !=0) || ($sql_data_array['266617X37X2257_filecount'] !=0) || ($sql_data_array['266617X38X2256_filecount'] !=0))
    {
        $download_file_link = 1;
    }*/
	
	     $sql_statename = "select `name` from states_india where `state_id`='".$sql_details_array['attribute_5']."'";
         $sql_state_array = mysql_query($sql_statename);
         $sql_statename_row = mysql_fetch_assoc($sql_state_array);
		 
		 
		 $sql_query_progress = "SELECT completeness FROM `lime_answers_for_progress` WHERE token='$token'";
         $sql_progress_array = mysql_query($sql_query_progress);
         $sql_completeness_row = mysql_fetch_assoc($sql_progress_array);
		 
    ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_details_array['tid']; ?></td>
     <td><?php echo $sql_details_array['attribute_1']; ?></td>
     <td><?php echo $sql_statename_row['name']; ?></td>
     <td><?php echo $sql_details_array['attribute_7']; ?></td>
     <td><?php echo date('d-m-Y', strtotime($sql_details_array['datetime'])); ?></td>
     <td><?php if($sql_details_array['completed'] != "N") { echo date('d-m-Y', strtotime($sql_details_array['completed'])); } else { echo "N/A"; } ?></td>
     <td><?php echo number_format(GetAirPoints($token), 2); ?></td>
     <td><?php echo number_format(GetEnergyPoints($token), 2); ?></td>
     <td><?php echo number_format(GetFoodPoints($token), 2); ?></td>
     <td><?php echo number_format(GetLandPoints($token), 2); ?></td>
     <td><?php echo number_format(GetWaterPoints($token), 2); ?></td>
     <td><?php echo number_format(GetWastePoints($token), 2); ?></td>
     <td><?php echo $totalpoints; ?></td>
     <td><?php echo $totalpointspercent; ?>%</td>
	 <td><?php echo $sql_completeness_row['completeness']; ?>%</td>
	 <td class="<?php echo $catclass; ?>"><?php echo $category; ?></td> 
     <td class="action">
     <a href="response_detail1.php?id=<?php echo $sql_details_array['token'] ?>" target="_blank" title="View Responses"><img src="images/1446146277_view6.png"/></a>
     <a href="create_response_pdf.php?id=<?php echo $sql_details_array['token']; ?>" target="_blank" title="Responses Report"><img src="images/pdf_icon-24.png"/></a>
     
     <a href="email_pdf.php?id=<?php echo $sql_details_array['token']; ?>" onclick="return popitup('email_pdf.php?id=<?php echo $sql_details_array['token']; ?>')" title="Email PDF to School"><img src="images/1446146350_email-send.png" height="20" width="20"/></a>
     
     
     <a href="response_feedback.php?id=<?php echo $sql_details_array['token']; ?>" target="_blank" title="View Feedback"><img src="images/1446579449__feedback.png" height="20" width="20"/></a>
     
     <a href="performance_report_pdf.php?id=<?php echo $sql_details_array['token']; ?>" target="_blank" title="Performance Report"><img src="images/pdf-24.png" height="20" width="20"/></a>
   
     <?php /* if($download_file_link == 1) { ?>
     <a href="http://greenschoolsprogramme.org/audit2015/upload/surveys/266617/download_zip.php?stid=<?php echo $sql_details_array['token']; ?>" title="Download Documents"><img src="images/download_zip.png" height="20" width="20"/></a>
     <?php } */?>
     </td>
 
     </tr>

    <?php
   // }
   $i++;
   
  
}
//echo $cnt1;
//   echo "<br>";
//    echo $cnt2;
//    echo "<br>";
//     echo $cnt3;
//     echo "<br>";
//      echo $cnt4;
?>
</tbody> 
</table>
            </div>
    
  </div>
</main>
<footer>
    <div class="text-center">Copyright &copy; <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>