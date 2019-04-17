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

        //echo '<h4>' . $id . '</h4>';

        echo'<div class = "row tracker-progress">';
        echo'<div class = "col-12">';
        echo'<div class = "progress-bar bg-success wow animated progress-animated" style = "width: 58%; height:6px;" role = "progressbar"> <span class = "sr-only">60% Complete</span>';
        echo'</div>';
        echo'</div>';
        echo'</div>';
        echo'<div class = "row tracker-point">';
        echo'<div class = "col-2 text-center">';
        echo'<span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<span class = "round round-sm round-success">';
        echo'<i class = "ti-check"></i>';
        echo'</span>';
        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<span class = "round round-sm round-danger">';
        echo'<i class = "ti-close"></i>';
        echo'</span>';
        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
        echo'</div>';
        echo'<div class = "col-2 text-center">';
        echo'<span class = "round round-sm round-danger">';
        echo'<i class = "ti-close"></i>';
        echo'</span>';
        echo'<br> <p style = "font-size: 10px;"> 10/09/2018</p>';
        echo'</div>';
        echo'</div>';
        echo'<div class = "row m-t-10">';
        echo'<div class = "col-12">';
        echo'<h4 class = "text-center m-b-10">';
        echo'<i class = "ti-user"></i> Applicant Information</h4>';
        echo'<div class = "table-responsive" style = "font-size: 12px;">';
        echo'<table class = "table">';
        echo'<tbody>';
        echo'<tr>';
        echo'<td class = "font-bold"> Company Name</td>';
        echo'<td>  ' . $row["nama"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Business No</td>';
        echo'<td>  ' . $row["business_no"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">License Type</td>';
        echo'<td> Wajib</td></tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Activity</td>';
        echo'<td> ' . $row["licence_activity"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class = "font-bold">Reference No</td>';
        echo'<td> ' . $row["reference_no"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class="font-bold">Agency</td>';
        echo'<td> ' . $row["agency_name"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td class="font-bold">Category</td>';
        echo' <td> ' . $row["application_type"] . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo' <td class="font-bold">Status Detail (Agency)</td>';
        echo'<td> ' . $row["status"] . '</td>';
        echo'</tr>';
        echo'</tbody>';
        echo'</table>';
        echo'</div>';
        echo'</div>';
        echo'</div>';
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
