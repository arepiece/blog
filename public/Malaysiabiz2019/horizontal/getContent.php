<?php

//
//extract($_REQUEST);
//error_reporting(0);
//include ('../../Connection/pg_connection.php');
//
//echo 'XXX' ; 
?>

<?php

if (!empty($_GET['id'])) {
    //DB details
    include ('../../Connection/pg_connection.php');
    $id = $_GET['id'];
    $sqlMyTray = "SELECT * FROM  \"public\".\"myTracker\" INNER JOIN \"public\".\"myBusiness\" ON \"myBusiness\".\"id_business\" = \"myTracker\".business_id where \"myTracker\".id=$id";
    $result1 = pg_query($pg_con, $sqlMyTray);
    while ($row = pg_fetch_assoc($result1)) {
        $id = $row["id"];

        //start here

//        echo'<div class = "modal fade bs-example-modal-lg" id = "status-permohonan" tabindex = "-1" role = "dialog" aria-labelledby = "myLargeModalLabel" aria-hidden = "true" style = "display: none;">';
//        echo'<div class = "modal-dialog modal-lg">';
//        echo'<div class = "modal-content">';
//        echo'<div class = "modal-header">';
//        echo'<h4 class = "modal-title" id = "myLargeModalLabel"> <div class = "round align-self-center round-success"><i class = "ti-info"></i></div> Maklumat dari BLESS1.0</h4>';
//        echo'<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">×</button>';
//        echo'</div>';
//        echo'<div class = "modal-body">';
        echo'<div class = "row tracker-progress">';
        echo'<div class = "col-12">';
        echo'<div class = "progress-bar bg-success wow animated progress-animated" style = "width: 58%; height:6px;" role = "progressbar"> <span class = "sr-only">60% Complete</span>';
        echo'</div>';
        echo'</div>';
        echo'</div>';
        echo'<div class = "row tracker-point">';
        echo'<div class = "col-2 text-center">';
        echo'<p><small>MyTray</small> <br> <span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br><small>10/09/2018</small></p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<p><small>Submit</small> <br> <span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br><small>10/10/2018</small></p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<p><small>Complete</small> <br> <span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br><small>10/11/2018</small></p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<p><small>Process</small> <br> <span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br><small>10/12/2018</small></p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<p><small>Approved</small> <br> <span class = "round round-sm round-danger">';
        echo'<i class = "ti-close"></i>';
        echo'</span>';
        echo'<br><small>10/01/2019</small></p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<p><small>Active</small> <br> <span class = "round round-sm round-danger">';
        echo'<i class = "ti-close"></i>';
        echo'</span>';
        echo'<br><small>10/02/2019</small></p>';
        echo'</div>';
        echo'</div>';
        echo'<div class = "row m-t-10">';
        echo'<div class = "col-12">';
        echo'<div class="pull-right" style="margin-right: 30px; margin-top: -10px; padding-left: 20px;">';
        echo'<button type="button" class="btn btn-info btn-circle btn-sm"><i class="ti-printer"></i> </button></div>';
        echo'<h4 class = "text-center m-b-10">';
        echo' Applicant Information</h4>';
        echo'<div class = "table-responsive" style = "font-size: 12px;">';
        echo'<table class = "table">';
        echo'<tbody>';
        echo'<tr>';
        echo'<td class = "font-bold"> Company Name</td>';
        echo'<td> ' . $row["nama"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Reference No. </td>';
        echo'<td> ' . $row["reference_no"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">License Type</td>';
        echo'<td> Wajib</td></tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Activity</td>';
        echo'<td>' . $row["licence_activity"] . '</td>';
        echo'</tr>';
//        echo'<tr>';
//        echo'<td class = "font-bold">Reference No</td>';
//        echo'<td> S54321</td>';
//        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Agency</td>';
        echo'<td> ' . $row["agency_name"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Category</td>';
        echo'<td> ' . $row["application_type"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Status Detail (Agency)</td>';
        echo'<td> ' . $row["status"] . '</td>';
        echo'</tr>';
        echo'</tbody>';
        echo'</table>';
        echo'</div>';
        echo'</div>';
        echo'</div>';
//        echo'</div>';
//        echo'<div class = "modal-footer">';
//        echo'<button type = "button" class = "btn btn-danger waves-effect text-left" data-dismiss = "modal">Close</button>';
//        echo'</div>';
//        echo'</div>';
//
//        echo'</div>';
//        echo'</div>';

        // end here

//        echo'<div class = "row tracker-progress">';
//        echo'<div class = "col-12">';
//        echo'<div class = "progress-bar bg-success wow animated progress-animated" style = "width: 58%; height:6px;" role = "progressbar"> <span class = "sr-only">60% Complete</span>';
//        echo'</div>';
//        echo'</div>';
//        echo'</div>';
//        echo'<div class = "row tracker-point">';
//        echo'<div class = "col-2 text-center">';
//        echo'<span class = "round round-sm round-success">';
//        echo'<i class = "ti-check"></i>';
//        echo'</span>';
//        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
//        echo'</div>';
//        echo'<div class = "col-2 text-center">';
//        echo'<span class = "round round-sm round-success">';
//        echo'<i class = "ti-check"></i>';
//        echo'</span>';
//        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
//        echo'</div>';
//        echo'<div class = "col-2 text-center">';
//        echo'<span class = "round round-sm round-success">';
//        echo'<i class = "ti-check"></i>';
//        echo'</span>';
//        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
//        echo'</div>';
//        echo'<div class = "col-2 text-center">';
//        echo'<span class = "round round-sm round-success">';
//        echo'<i class = "ti-check"></i>';
//        echo'</span>';
//        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
//        echo'</div>';
//        echo'<div class = "col-2 text-center">';
//        echo'<span class = "round round-sm round-danger">';
//        echo'<i class = "ti-close"></i>';
//        echo'</span>';
//        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
//        echo'</div>';
//        echo'<div class = "col-2 text-center">';
//        echo'<span class = "round round-sm round-danger">';
//        echo'<i class = "ti-close"></i>';
//        echo'</span>';
//        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
//        echo'</div>';
//        echo'</div>';
//        echo'<div class = "row m-t-10">';
//        echo'<div class = "col-12">';
//        echo'<h4 class = "text-center m-b-10">';
//        echo'<i class = "ti-user"></i> Applicant Information</h4>';
//        echo'<div class = "table-responsive" style = "font-size: 12px;">';
//        echo'<table class = "table">';
//        echo'<tbody>';
//        echo'<tr>';
//        echo'<td class = "font-bold"> Company Name</td>';
//        echo'<td>  ' . $row["nama"] . '</td>';
//        echo'</tr>';
//        echo'<tr>';
//        echo'<td class = "font-bold">Business No</td>';
//        echo'<td>  ' . $row["business_no"] . '</td>';
//        echo'</tr>';
//        echo'<tr>';
//        echo'<td class = "font-bold">License Type</td>';
//        echo'<td> Wajib</td></tr>';
//        echo'<tr>';
//        echo'<td class = "font-bold">Activity</td>';
//        echo'<td> ' . $row["licence_activity"] . '</td>';
//        echo'</tr>';
//        echo'<tr>';
//        echo'<td class = "font-bold">Reference No</td>';
//        echo'<td> ' . $row["reference_no"] . '</td>';
//        echo'</tr>';
//        echo'<tr>';
//        echo'<td class="font-bold">Agency</td>';
//        echo'<td> ' . $row["agency_name"] . '</td>';
//        echo'</tr>';
//        echo'<tr>';
//        echo'<td class="font-bold">Category</td>';
//        echo' <td> ' . $row["application_type"] . '</td>';
//        echo'</tr>';
//        echo'<tr>';
//        echo' <td class="font-bold">Status Detail (Agency)</td>';
//        echo'<td> ' . $row["status"] . '</td>';
//        echo'</tr>';
//        echo'</tbody>';
//        echo'</table>';
//        echo'</div>';
//        echo'</div>';
//        echo'</div>';
    }

//    if ($query2->num_rows > 0) {
//        $cmsData = $query->fetch_assoc();
//        echo '<h4>' . $cmsData['id'] . '</h4>';
//    } else {
//        echo 'Content not found....';
//    }
} else {
    echo 'Content not found....';
}
?>
