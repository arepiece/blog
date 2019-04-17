<?php
extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');

$agensiMemohonJakim = $_POST['agensiMemohonJakim'];
$agensiMemohonJakimComplete = $_POST['agensiMohonLoginComplete'];
$agensiRFChangeJakim = $_POST['agensiRFChange'];
$agensiRenewJakim = $_POST['agensiRenew'];

$agensiMemohonMBPP = $_POST['agensiMemohonMBPP'];
$agensiMemohonMBPPComplete = $_POST['agensiMemohonMBPPComplete'];
$agensiRenewMBPP = $_POST['agensiRenewMBPP'];
$agensiRFChangeMBPP = $_POST['agensiRFChangeMBPP'];

$agensiMemohonBless2 = $_POST['agensiMemohonBless2'];
$agensiMemohonBless2Complete = $_POST['agensiMemohonBless2Complete'];
$agensiRFChangeBless2 = $_POST['agensiRFChangeBless2'];
$agensiRenewBless2 = $_POST['agensiRenewBless2'];

$agensiMemohonBless1 = $_POST['agensiMemohonBless1'];
$agensiMemohonBless1Complete = $_POST['agensiMemohonBless1Complete'];
$agensiRFChangeBless1 = $_POST['agensiRFChangeBless1'];
$agensiRenewBless1 = $_POST['agensiRenewBless1'];

if($agensiMemohonJakim != NULL){
    $agensiMemohon = $agensiMemohonJakim;
}else if($agensiMemohonJakimComplete != NULL){
    $agensiMemohon = $agensiMemohonJakimComplete;
}else if($agensiRFChangeJakim != NULL){
    $agensiMemohon = $agensiRFChangeJakim;
}else if($agensiRenewJakim != NULL){
    $agensiMemohon = $agensiRenewJakim;
}else if($agensiMemohonMBPP != NULL){
    $agensiMemohon = $agensiMemohonMBPP;
}else if($agensiRenewMBPP != NULL){
    $agensiMemohon = $agensiRenewMBPP;
}else if($agensiRFChangeMBPP != NULL){
    $agensiMemohon = $agensiRFChangeMBPP;
}else if($agensiMemohonMBPPComplete != NULL){
    $agensiMemohon = $agensiMemohonMBPPComplete;
}else if($agensiRFChangeBless2 != NULL){
    $agensiMemohon = $agensiRFChangeBless2;
}else if($agensiRenewBless2 != NULL){
    $agensiMemohon = $agensiRenewBless2;
}else if($agensiMemohonBless2 != NULL){
    $agensiMemohon = $agensiMemohonBless2;
}else if($agensiMemohonBless2Complete != NULL){
    $agensiMemohon = $agensiMemohonBless2Complete;
}else if($agensiMemohonBless1 != NULL){
    $agensiMemohon = $agensiMemohonBless1;
}else if($agensiMemohonBless1Complete != NULL){
    $agensiMemohon = $agensiMemohonBless1Complete;
}else if($agensiRFChangeBless1 != NULL){
    $agensiMemohon = $agensiRFChangeBless1;
}else if($agensiRenewBless1 != NULL){
    $agensiMemohon = $agensiRenewBless1;
}

//JAKIM
$idLesen = $_POST['idPermohonanLesen'];
$idLesenComplete = $_POST['idPermohonanLesenComplete'];
$idRenewLesen = $_POST['idRenewLesenJakim'];
$idRFChangeLesenJakim = $_POST['idRFChangeLesenJakim'];

//MBPP
$idLesenMBPP = $_POST['idPermohonanLesenMBPP'];
$idLesenMBPPComplete = $_POST['idPermohonanLesenMBPPComplete'];
$idRenewLesenMBPP = $_POST['idRenewLesenMBPP'];
$idRFChangeLesenMBPP = $_POST['idRFChangeLesenMBPP'];

//BLESS2.0
$idRFChangeLesenBless2 = $_POST['idRFChangeLesenBless2'];
$idRenewLesenBless2 = $_POST['idRenewLesenBless2'];
$idPermohonanLesenBless2 = $_POST['idPermohonanLesenBless2'];
$idPermohonanLesenBless2Complete = $_POST['idPermohonanLesenBless2Complete'];


//BLESS1.0
$idRFChangeLesenBless1 = $_POST['idRFChangeLesenBless1'];
$idRenewLesenBless1 = $_POST['idRenewLesenBless1'];
$idPermohonanLesenBless1 = $_POST['idPermohonanLesenBless1'];
$idPermohonanLesenBless1Complete = $_POST['idPermohonanLesenBless1Complete'];

if($idLesen!=null){
    $id = $idLesen;
}else if($idLesenComplete!=null){
    $id = $idLesenComplete;
}else if($idRenewLesen != null){
    $id = $idRenewLesen;
}else if($idRFChangeLesenJakim != null){
    $id = $idRFChangeLesenJakim;
}else if($idLesenMBPP != null){
    $id = $idLesenMBPP;
}else if($idLesenMBPPComplete != null){
    $id = $idLesenMBPPComplete;
}else if($idRenewLesenMBPP != null){
    $id = $idRenewLesenMBPP;
}else if($idRFChangeLesenMBPP != null){
    $id = $idRFChangeLesenMBPP;
}else if($idRFChangeLesenBless2 != null){
    $id = $idRFChangeLesenBless2;
}else if($idRenewLesenBless2 != null){
    $id = $idRenewLesenBless2;
}else if($idPermohonanLesenBless2 != null){
    $id = $idPermohonanLesenBless2;
}else if($idPermohonanLesenBless2Complete != null){
    $id = $idPermohonanLesenBless2Complete;
}
else if($idRFChangeLesenBless1 != null){
    $id = $idRFChangeLesenBless1;
}
else if($idRenewLesenBless1 != null){
    $id = $idRenewLesenBless1;
}
else if($idPermohonanLesenBless1 != null){
    $id = $idPermohonanLesenBless1;
}
else if($idPermohonanLesenBless1Complete != null){
    $id = $idPermohonanLesenBless1Complete;
}


$sqlMyTray = "SELECT * FROM  \"public\".\"myTray\" where id=$id";
$result1 = pg_query($pg_con, $sqlMyTray);
$idTracker=0;
$query2 = "SELECT max(id) as idTracker FROM  \"public\".\"myTracker\" "; 
        $res = pg_query($pg_con, $query2); 
while ($rowId = pg_fetch_row($res)) {
    $idTracker = $rowId[0];
}
while ($row = pg_fetch_assoc($result1)) {
    $id_tray = $row["id"];
    $licence_name = $row["licence_name"];
    $agency_name = $row["agency_name"];
    $agency = $row["agency"];
    $system = $row["system"];
    $application_type = $row["application_type"];
    $reference_no = $row["reference_no"];
    $status = $row["status"];
    
}

if($agensiMemohon === 'JAKIM'){
    $runningNo = 181336 + $idTracker;
    $ref_no = "HALAL-20180925-".$runningNo."(PM)";
}else if($agensiMemohon === 'MBPP'){
    $runningNo = 702451 + $idTracker;
    $ref_no = "MBPP-".$runningNo;
}else if($agensiMemohon === 'BLESS2.0' || $agensiMemohon === 'BLESS1.0'){
    $runningNo = 2018001409 + $idTracker;
    $ref_no = "DN".$runningNo;
}

$queryUpdateTray = "update \"public\".\"myTray\" set submit = 1 where id=$id";
$resultUpdateTray = pg_query($queryUpdateTray); 

$query = "INSERT INTO  \"public\".\"myTracker\" (id,mytray_id,licence_name,agency_name,agency,system,application_type,reference_no,status) "
        . "VALUES (nextval('mytracker_seq'),'$id_tray','$licence_name','$agency_name','$agency', '$system', '$application_type', '$ref_no', 'Processing')";
$result = pg_query($query); 
header( "Location: MyTray.php" ); 

?>
