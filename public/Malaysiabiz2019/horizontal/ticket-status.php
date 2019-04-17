<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>Ticket Status</title>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- chartist CSS -->
       <!--  <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

       <!--  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/Chart.js"></script>
        <script type="text/javascript" src="js/script.js"></script> -->
        <!-- Footable CSS -->
        <link href="../assets/plugins/footable/css/footable.core.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/mybiz-default-color.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="fix-header card-no-border logo-center">
         <?php include('preloader.php'); ?>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pagesclass="card".scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <?php include('portal-top-nav.php'); ?>
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    
                    <div class="row page-titles">
                        <div class="col-lg-12">
                              
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                           
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
								<div class="col-md-8 col-8 align-self-center">
								<h3 class="text-themecolor m-b-0 m-t-0">Check Ticket Status</h3> 
								</div>
								
                                 </div><hr>

										<div class="row">
                                            <div class="col-md-6">
                                                <div>
													<div>
                                                    <label class="control-label">Status</label>
                                                    <input type="text" id="ticket-status" class="form-control" value="Pending" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Category</label>
                                                    <div class="input-group-prepend">                                                
                                                    <input type="text" id="category" class="form-control" value="Bless 1.0" readonly>
                                                    </div>
                                                </div>
                                            </div>
										</div><br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">ID No.</label>
                                                    <input type="text" id="agency-id" class="form-control" value="1011" readonly>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" id="agency-name" class="form-control" value="azli@gates.edu.my" readonly>
                                                </div>
                                            </div>
										<!--/span-->
										</div>

										<div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" id="system-name" class="form-control" value="Azli Shafie" readonly>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone No.</label>
                                                    <input type="text" id="system-url" class="form-control" value="012 3456789" readonly>
                                                </div>
                                            </div>
										<!--/span-->
										</div>
									
									 <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Subject</label>
                                                     <input type="text" id="system-url" class="form-control" value="Cannot Apply License" readonly>
                                                    </div>
                                            </div>
                                           
                                        
                                    </div>
									<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Description</label>
                                                     <textarea rows="4" class="form-control" readonly></textarea>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="row">                                    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Reply</label>
                                                     <textarea rows="4" class="form-control" readonly></textarea>
                                                    </div>
                                            </div>
                                    </div>
									
                                    </div><hr>
                                    

                                    <div class="col-md-12 col-12">	
								<div class="text-right">							
                                 <button type="button" class="btn btn-info waves-effect waves-light">Back</button>
								</div>
								</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
			            
		<!-- Floating button -->
	
		

                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->	


                <!-- sample modal content -->
               



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Copyright Reserved by Government of Malaysia
            </footer>
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	
	<script src="../assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
	
</body>

</html>