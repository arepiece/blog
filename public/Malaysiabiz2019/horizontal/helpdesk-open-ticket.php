                    <?php include('base-portal.php'); ?>  

    <!--alerts CSS -->
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
                  
                    <div class="row page-titles">
                        <div class="col-lg-12">
                              
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <div id="content">
                                   
                               </div>
                                   <div class="row page-titles">
                                        <div class="col-md-5 col-8 align-self-center">
                                            <h3 class="text-themecolor m-b-0 m-t-0">Create Your Complaint Here</h3>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                                <label>Help Topic</label>
                                                <select class="custom-select">
                                                    <option selected="">General</option>
            										<option value="1">Licensing</option>
                                                    <option value="2">Payment</option>
                                                    <option value="3">Registration</option>
                                                    <option value="4">Technical</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                         
                            <div class="row">
                                    <div class="col-lg-4 col-12">                                      
                                    <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>                            
                                <div class="col-lg-4 col-12">
                                     <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                     <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label>Issue Detail</label>
                                    <textarea class="form-control" rows="5"></textarea>
                            </div>
							
							<div class="form-group">
                                    <label>Attachment</label>
                                    <form action="/action_page.php">
										<input type="file" name="pic" accept="image/*">
									  <!-- <input type="submit"> -->
									</form>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12"> 
                                <div class="text-right">                      
                                            <button type="submit" class="btn btn-info waves-effect waves-light"
											alt="alert" class="img-responsive model_img" id="sa-success">Submit</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Reset</button>
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Cancel</button>
                                    </div>
                                </div>
                                </div>

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
    <!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
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