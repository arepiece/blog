<?php
extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');

$agensiMemohonMBPP = $_POST['agensiMemohonMBPP'];
$agensiMemohonJakim = $_POST['agensiMemohonJakim'];
$agensiMemohonBless1 = $_POST['agensiMemohonBless1'];
$agensiMemohonBless2 = $_POST['agensiMemohonBless2'];


if($agensiMemohonMBPP != NULL){
    $agensiMemohon = $agensiMemohonMBPP;
} else if($agensiMemohonJakim != NULL){
    $agensiMemohon = $agensiMemohonJakim;
} else if($agensiMemohonBless1 != NULL){
    $agensiMemohon = $agensiMemohonBless1;
} else if($agensiMemohonBless2 != NULL){
    $agensiMemohon = $agensiMemohonBless2;
} 


$idReqFeedbackMBPP = $_POST['idReqFeedbackMBPP'];
$idReqFeedbackJakim = $_POST['idReqFeedbackJakim'];
$idReqFeedbackBless1 = $_POST['idReqFeedbackBless1'];
$idReqFeedbackBless2 = $_POST['idReqFeedbackBless2'];

if($idReqFeedbackMBPP!=null){
    $id = $idReqFeedbackMBPP;
} else if($idReqFeedbackJakim!=null){
    $id = $idReqFeedbackJakim;
} else if($idReqFeedbackBless1!=null){
    $id = $idReqFeedbackBless1;
} else if($idReqFeedbackBless2!=null){
    $id = $idReqFeedbackBless2;
}

$queryUpdateTray = "update \"public\".\"myTracker\" set status = 'Processing' where id=$id";
$resultUpdateTray = pg_query($queryUpdateTray); 

header( "Location: MyTracker.php" ); 

?>
