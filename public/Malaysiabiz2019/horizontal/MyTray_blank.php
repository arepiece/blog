<!DOCTYPE html>
<?php
extract($_REQUEST);
error_reporting(0);
if (!isset($agency_name)) {
    $agency_name = '0';
    echo "<script>location.href='MyTray_blanks.php</script>";
}

?>
<?php $page = 'MyTray'; include 'base.php';?>
                <div class="row page-titles m-t-10">
                    <div class="col-lg-12 align-self-center">
                                <!-- <h3 class="text-themecolor">View Branch</h3> -->
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="mydashboard.php">MyTray</a></li>
                                </ol>
                    </div>
                </div>
                    
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">                             
                                <div class="row blank_page bounceIn animated">
                                    <div class="col-md-12 text-center">
                                        <img src="../assets/images/blank_page/data-table-no-data.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                       <h2 class="m-b-20"> 
                                        <small>You don't have any application right now. <br> <strong>Let's get started shall we?</strong></small></h2>
                                        <div class="">
                                            <a href="business-registration.php"><button class="btn btn-info">Business Registration</button></a>
                                            <a href="licensing.php"><button class="btn btn-info">Business Licensing</button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include('footer.php'); ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!--<script src="/Malaysiabiz2019/assets/plugins/datatables/jquery.dataTables.min.js"></script>-->

<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/plugins/popper/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- Sweet-Alert  -->
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<!--Business Registration -->
<script src="js/lodash.min.js"></script>
<script src="../assets/scrolltotop.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$(function() {
			var divcard = $(".filterbar");
			var divcardbody = $(".innerbar");
			var divcontent = $(".nomargintop");

			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
			
				if (scroll >= 100) {
					divcard.removeClass('filterbar').addClass("bigbar");
					// divcardbody.removeClass('innerbar').addClass("smallinnerbar");
					divcontent.removeClass('nomargintop').addClass("margintop50");                
				} else {
					divcard.removeClass("bigbar").addClass('filterbar');
					divcardbody.removeClass("smallinnerbar").addClass('innerbar');
					divcontent.removeClass("margintop50").addClass('nomargintop');               
				}
			});
		});
	});
	
    function registerAccount() {
        var agency = $('#agency_name2').val();
        //alert('agency: '+agency);
        $('#perlu-tindakan-login').modal('hide');
        if (agency === 'MBPP') {
            $('#iframe-register-mbpp').modal('show');
        } else if (agency === 'BLESS2.0') {
            $('#iframe-register-bless2').modal('show');
        }

    }

    function actionLogin() {
        var username = $('#username').val();
        var password = $('#password').val();
        if (username === password) {
            $('#perlu-tindakan-login').modal('hide');
            $('#pilih-bisnes').modal('show');
        } else {
            var count = $('#set-clicker').val();
            var countclick = parseInt(count) + 1;
            if (countclick < 3) {
                $('#login-failed').modal('show');
            } else {
                $('#login-failed').modal('hide');
            }
            $('#set-clicker').val(countclick);
            if (countclick >= 3) {
                $('#login-failed').modal('hide');
                $('#perlu-tindakan-login').modal('hide');
                $('#login-failed').modal('hide');
                $('#login-failed-3times').modal('show');
            }

        }
    }


    function actionLoginAgency() {

        $('#perlu-tindakan-login').modal('show');
        $('#isRegisterInAgency').modal('hide');
        $('#isRegisterInAgencyMBPP').modal('hide');
        $('#isRegisterInAgencyBLESS2.0').modal('hide');
        $('#isRegisterInAgencyBLESS1.0').modal('hide');
    }

    function actionTindakanRegisterAgency() {
        var agensiMohon = $('#agensiMohon').val();
        //alert('agensiMohon: '+agensiMohon);
        $('#isRegisterInAgency').modal('hide');
        $('#isRegisterInAgencyMBPP').modal('hide');
        $('#isRegisterInAgencyBLESS2.0').modal('hide');
        $('#isRegisterInAgencyBLESS1.0').modal('hide');
        if (agensiMohon === 'JAKIM') {
            $('#iframe-register-jakim').modal('show');
        } else if (agensiMohon === 'MBPP') {
            $('#isRegisterInAgencyMBPP').modal('hide');
            $('#iframe-register-mbpp').modal('show');
        } else if (agensiMohon === 'BLESS2.0') {
            $('#iframe-register-bless2').modal('show');
        } else if (agensiMohon === 'BLESS1.0') {
            $('#iframe-register-bless1').modal('show');
        }


    }



    function actionAction() {
        $('#perlu-tindakan-login').modal('hide');
        $('#iframe-borang-baru-bless1').modal('show');
    }

    function actionPilihBusiness() {
        var agensiMohon = $('#agensiMohon').val();
        var agensiMohonLogin = $('#agensiMohonLogin').val();
        var idLesen = $('#idLesen').val();
        $('#idPermohonanLesen').val(idLesen);
        $('#agensiMemohonJakim').val(agensiMohon);

        $('#agensiMemohonMBPP').val(agensiMohon);
        $('#idPermohonanLesenMBPP').val(idLesen);

        $('#agensiMemohonMBPPComplete').val(agensiMohon);
        $('#idPermohonanLesenMBPPComplete').val(idLesen);
        //alert('agensiMohonLogin: '+agensiMohonLogin);
        $('#pilih-bisnes').modal('hide');
        if (agensiMohon === 'BLESS1.0' || agensiMohonLogin === 'BLESS1.0') {
            $('#iframe-borang-baru-bless1').modal('show');
        } else if (agensiMohon === 'BLESS2.0' || agensiMohonLogin === 'BLESS2.0') {
            $('#iframe-borang-baru-bless2').modal('show');
        } else if (agensiMohon === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
            $('#iframe-borang-baru-jakim').modal('show');
        } else if (agensiMohon === 'MBPP' || agensiMohonLogin === 'MBPP') {
            $('#iframe-borang-baru-mbpp').modal('show');
        }

    }

    function submitApplication() {

        var appType = $('#appRenewType').val();
        var appRFChangeType = $('#appRFChangeType').val();

        var agensiRenew = $('#agensiRenew').val();
        var agensiMohonLogin = $('#agensiMohonLogin').val();

        var status = "";
        var statusJakimComplete = $('#statusJakimComplete').val();

        if (statusJakimComplete !== null) {
            status = statusJakimComplete;
        }

        swal({
            title: "Are you sure?",
            text: "Your application will submit for processing. ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Submit it!",
            closeOnConfirm: false
        }, function () {
            swal("Submit!", "Your application request has been submitted.", "success");

            // if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
            if (appType === 'Renewal' || appRFChangeType === 'Renewal') {
                if (status === 'Complete') {
                    if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                        document.getElementById("formRenewalJakim").submit();
                        $('#iframe-renewal-jakim').modal('hide');
                    } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                        document.getElementById("formRenewalMBPP").submit();
                        $('#iframe-renewal-mbpp').modal('hide');
                    }
                } else {
                    //utk incomplete
                }

            } else if (appType === 'Request for Change' || appRFChangeType === 'Request for Change') {
                if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                    document.getElementById("formRFChangeJakim").submit();
                    $('#iframe-borang-baru-jakim').modal('hide');
                } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                    document.getElementById("formRFChangeMBPP").submit();
                    $('#iframe-requestforchange-mbpp').modal('hide');
                } else if (agensiRenew === 'BLESS2.0' || agensiMohonLogin === 'BLESS2.0') {
                    document.getElementById("formRFChangeBless2").submit();
                    $('#iframe-requestforchange-bless2').modal('hide');
                }


            } else if (appType === 'New' || appRFChangeType === 'New') {
                if (status === 'Complete') {
                    if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                        document.getElementById("formPermohonanJakimComplete").submit();
                        $('#iframe-borang-baru-jakim-complete').modal('hide');
                    } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                        document.getElementById("formPermohonanMBPPComplete").submit();
                        $('#iframe-borang-baru-mbpp-complete').modal('hide');
                    }
                } else if (status === 'Recent') {
                    if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                        document.getElementById("formPermohonanJakim").submit();
                        $('#iframe-borang-baru-jakim').modal('hide');
                    } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                        document.getElementById("formPermohonanMBPP").submit();
                        $('#iframe-borang-baru-mbpp').modal('hide');
                    } else if (agensiRenew === 'BLESS2.0' || agensiMohonLogin === 'BLESS2.0') {
                        document.getElementById("formPermohonanbless2").submit();
                        $('#iframe-borang-baru-bless2').modal('hide');
                    } else if (agensiRenew === 'BLESS1.0' || agensiMohonLogin === 'BLESS1.0') {
                        document.getElementById("formPermohonanbless1").submit();
                        $('#iframe-borang-baru-bless1').modal('hide');
                    }
                } else {
                    //utk incomplete
                }
            }

        });
    }

    function saveApplication() {

        swal({
                title: "Are you sure?",
                text: "Your application will save as draft and not submitted yet. ",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, save it!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        //                                                                function () {
        //                                                                    swal("Saved!", "Your application request has been saved.", "success");
        //                                                                    $('#b1b').hide();
        //                                                                    $('#b1bb').show();
        //                                                                    $('#iframe-borang-baru-bless1').modal('hide');
        //                                                                });

    }

    function goto(field, value_field) {
        var valueUrl = field + "=" + value_field;
        var agencyName = $('#agency_name').val();
        var applicationType = $('#application_type').val();
        var status = $('#status').val();
        if (field === "agency_name") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&status=" + status;
        } else if (field === "application_type") {
            valueUrl = valueUrl + "&agency_name=" + agencyName + "&status=" + status;
        } else if (field === "status") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&agency_name=" + agencyName;
        }
        location.href = "MyTray.php?" + valueUrl;
    }

    function hideCard(id) {
        swal({
            title: "Are you sure to perform this action?",

            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            swal("Deleted!", "Record successfully deleted.", "success");
            $('#' + id).hide();
        });
    }

    function actionPerluRegister() {
        $('#perlu-register').modal('hide');
        $('#iframe-register').modal('show');
    }

    function actionPerluRegisterBless2() {
        $('#perlu-register-bless2').modal('hide');
        $('#iframe-register-bless2').modal('show');
    }

    function tindakanMohon(idLesen, agensi, status, appType, firstLogin, isRegister) {

        $('#idLesen').val(idLesen);
        $('#agensiMohonLogin').val(agensi);
        $('#statusMohon').val(status);
        $('#agensiMohon').val(agensi);

        $('#idPermohonanLesen').val(idLesen);
        $('#agensiMohonLoginComplete').val(agensi);
        $('#idPermohonanLesenComplete').val(idLesen);
        $('#statusJakimComplete').val(status);

        $('#idRenewLesenJakim').val(idLesen);
        $('#agensiRenew').val(agensi);
        $('#appRenewType').val(appType);
        $('#statusRenewal').val(status);

        $('#idRFChangeLesenJakim').val(idLesen);
        $('#agensiRFChange').val(agensi);
        $('#appRFChangeType').val(appType);
        $('#statusRFChange').val(status);

        $('#agensiMemohonMBPP').val(agensi);
        $('#idPermohonanLesenMBPP').val(idLesen);
        $('#statusMBPP').val(status);

        $('#agensiMemohonMBPPComplete').val(agensi);
        $('#idPermohonanLesenMBPPComplete').val(idLesen);
        $('#statusMBPPComplete').val(status);

        $('#idRenewLesenMBPP').val(idLesen);
        $('#agensiRenewMBPP').val(agensi);
        $('#appRenewTypeMBPP').val(appType);
        $('#statusRenewalMBPP').val(status);

        $('#idRFChangeLesenMBPP').val(idLesen);
        $('#agensiRFChangeMBPP').val(agensi);
        $('#appRFChangeTypeMBPP').val(appType);
        $('#statusRFChangeMBPP').val(status);

        $('#idRFChangeLesenBless2').val(idLesen);
        $('#agensiRFChangeBless2').val(agensi);
        $('#appRFChangeTypeBless2').val(appType);
        $('#statusRFChangeBless2').val(status);



        if (appType === 'New' && status === 'Recent') {
            if (firstLogin === 'No' && isRegister === 'Yes') {
                $('#agensiMohonLogin').val(agensi);
                $('#perlu-tindakan-login').modal('show');
            } else if (firstLogin === 'No' && isRegister === 'No') {
                if (agensi === 'JAKIM') {
                    $('#perlu-tindakan-login').modal('show');
                } else if (agensi === 'MBPP') {
                    $('#perlu-tindakan-login').modal('show');
                } else if (agensi === 'BLESS2.0') {
                    $('#perlu-tindakan-login').modal('show');
                } else if (agensi === 'BLESS1.0') {
                    $('#perlu-tindakan-login').modal('show');
                }

            } else {
                $('#agensiMohon').val(agensi);
                $('#tindakan-mohon').modal('show');
            }
        } else if (appType === 'New' && status === 'Complete') {
            if (agensi === 'JAKIM') {
                $('#iframe-borang-baru-jakim-complete').modal('show');
            } else if (agensi === 'MBPP') {
                $('#iframe-borang-baru-mbpp-complete').modal('show');
            } else if (agensi === 'BLESS2.0') {
                $('#iframe-borang-baru-bless2').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-borang-baru-bless1').modal('show');
            }
        } else if (appType === 'New' && status === 'Incomplete') {
            if (agensi === 'BLESS2.0') {
                $('#iframe-borang-baru-bless2').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-borang-baru-bless1').modal('show');
            }

        } else if (appType === 'Renewal' && status === 'Complete') {

            if (agensi === 'JAKIM') {
                $('#iframe-renewal-jakim').modal('show');
            } else if (agensi === 'MBPP') {
                $('#iframe-renewal-mbpp').modal('show');
            } else if (agensi === 'BLESS2.0') {
                $('#iframe-renewal-bless2').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-renewal-bless1').modal('show');
            }

        } else if (appType === 'Renewal' && status === 'Incomplete') {

        } else if (appType === 'Request for Change' && status === 'Complete') {
            if (agensi === 'JAKIM') {
                $('#iframe-requestforchange-jakim').modal('show');
            } else if (agensi === 'MBPP') {
                $('#iframe-requestforchange-mbpp').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-requestforchange-bless1').modal('show');
            } else if (agensi === 'BLESS2.0') {
                $('#iframe-requestforchange-bless2').modal('show');
            }
        }


    }

    function pilihBisnes(id) {
        $('#agensiMohon').val(id);
        $('#agensiMohonMBPP').val(id);
        $('#pilih-bisnes').modal('show');
    }

    function actionTindakanPermohonan() {

        $('#tindakan-mohon').modal('hide');
        //$('#iframe-pembaharuan').modal('show');
        $('#pilih-bisnes').modal('show');
    }

// Business registration
    var IFRAME_URL = '';

    function bizRegLogin(url) {
        IFRAME_URL = url;
        $(".modal").modal('hide');
        $('#business-reg-login-required').modal('show');
       
    }

    function bizRegPilihUsiness() {
        $(".modal").modal('hide');
        var username = $('#business-reg-login-required').find('input#username').val()
        var password = $('#business-reg-login-required').find('input#password').val()

        if (username !== '' && password !== '' && username === password){
            // $('#business-reg-pilih-bisnes').modal('show');
            bizRegActionPilihBusiness()
        } else {
              $('#business-reg-login-failed').modal('show');
        }

    }
	
	function bizRegPilihBusiness2() {
        $(".modal").modal('hide');
        var username = $('#business-reg-login-failed').find('input#username').val()
        var password = $('#business-reg-login-failed').find('input#password').val()

        if (username !== '' && password !== '' && username === password){
            // $('#business-reg-pilih-bisnes').modal('show');
            bizRegActionPilihBusiness()
        } else {
              $('#business-reg-login-failed').modal('show');
        }

    }
	

    function bizRegActionPilihBusiness(){
        $(".modal").modal('hide');
        // $("#business-reg-iframe").attr('src',)
        $('#modalIframeAgency').modal('show');
    }

    function bizRegDefineOptions(selectElement,optValue){
        var arrayItems = [];
        var options  = selectElement.find('option');
        $.each(options,function(index,opt){
            arrayItems.push($(opt).val())
        }) 

        if( arrayItems.indexOf(optValue) > -1 ){
            selectElement.val(optValue)
        }else{
            selectElement.val('0')
        }
    }

    $(function(){
        
        //---------------------------------
        //Business register load functions
        //---------------------------------
        
        var business_reg_agency_name = <?php echo '"'.$business_reg_agency_name.'"'; ?>;
        var business_reg_application_type = <?php echo '"'.$business_reg_application_type.'"'; ?>;
        var business_reg_status  = <?php echo '"'.$business_reg_status.'"'; ?>;
       
        //----START-defined options value----
        bizRegDefineOptions($('#business_reg_agency_name'),business_reg_agency_name)
        bizRegDefineOptions($('#business_reg_application_type'),business_reg_application_type)
        bizRegDefineOptions($('#business_reg_status'),business_reg_status)

        //-END----defined options value----

        // Iframe modal shown
        $('#modalIframeAgency').on('show.bs.modal', function (e) {
                
                if(e&&e.relatedTarget&&e.relatedTarget.dataset){
                    $('#business-reg-iframe').attr('src',e.relatedTarget.dataset.url)
                }else{
                    $('#business-reg-iframe').attr('src',IFRAME_URL)
                }
                    
                
        });

    })

</script>
</body>

</html>
