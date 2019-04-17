                <?php include('base-portal.php'); ?>
                <?php $page = 'faq-home';?>
                <div class="row page-titles" style="background:#B3E5FC; padding-top: 35px;">
                <div class="col-md-5 col-8 align-self-center m-l-40">
                    <h3 class="m-b-0 m-t-0">FAQ </h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://gerbang-uiux-newlook.gov/en">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ol>
                </div>

                </div>
                <div class="row" style="background:#B3E5FC; padding-bottom: 150px;">
                    <div class="col-md-12">
                        <div class="fix-width">
                            <div class="row">
                                <div class="col-lg-12 text-center"><h2> How can we help you? </h2> </div>
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                    <p class="m-t-20">You can also browse the topics below to find what you are looking for.</p>
                                </div>
                                <div class="col-lg-3">
                                </div>                                
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="row m-l-40 m-r-40" style="margin-top: -130px;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="font-bold m-10"><i class="ti-help-alt"></i> Frequently Asked Questions about MalaysiaBiz </h3>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul style="list-style: none;">
                                            <li class="m-b-30"><h6><a href="Faq-result-found.php">What should I do to start a business? </a></h6></li>
                                            <li class="m-b-30"><h6><a href="Faq-result-found.php">How does MalaysiaBiz Portal assist me in starting a business? </a></h6></li>
                                            <li class="m-b-30"><h6><a href="Faq-result-found.php">Can I register my business and apply for licenses via the MalaysiaBiz Portal? </a></h6></li>
                                            <li class="m-b-30"><h6><a href="Faq-result-found.php">What information on business registration is obtainable from the MalaysiaBiz Portal? </a></h6></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

  <script type="text/javascript">
                                jQuery(document).ready(function(e) {
                                    $("#addquestion").on("click", function(){
                            
                                     alert('ss');
                                });
                            </script>
							
							<script>
		$(function() { 

			$('#search-luqman').on('click', function(event) {
				event.preventDefault();
				$('#search-bar .input-group > input').val('');
				$('#search-bar').toggleClass('open');
				$('a[href="#toggle-search"]').closest('li').toggleClass('active');

				if ($('#search-bar').hasClass('open')) {
					/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
					setTimeout(function() { 
						$('#search-bar .form-control').focus();
					}, 100);
				}			
			});

			$(document).on('keyup', function(event) {
				if (event.which == 27 && $('#search-bar').hasClass('open')) {
					$('a[href="#toggle-search"]').trigger('click');
				}
			});
			
		});
		</script>

</body>

</html>