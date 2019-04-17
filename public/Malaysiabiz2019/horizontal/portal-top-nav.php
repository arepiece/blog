        <style>

		.navbar-bootsnipp .bootsnipp-search {
			display: none;
		}
		.navbar-bootsnipp .bootsnipp-search .form-control {
			background-color: #d1d1d1;
			border-radius: 0px;
			border-width: 0px;
			font-size: 12px;
			padding: 20px 0px;
		}
		.navbar-bootsnipp .bootsnipp-search .form-control {
			background-color: #d1d1d1;
			border-radius: 0px;
			border-width: 0px;
			font-size: 12px;
			padding: 4px 0px;
		}
		.navbar-bootsnipp .bootsnipp-search .form-control:focus {
			border-color: transparent;
			outline: 0;
			-webkit-box-shadow: none;
			box-shadow: none;
		}
		.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn {
			padding: 14px 16px;
			border-radius: 0px;
		}
		.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn.active,
		.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:hover,
		.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:focus {
			padding: 14px 16px 14px 15px;
		}
		.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn-default {
			background-color: #d1d1d1;
		}
		.nav-padding {
			padding-top: 61px;
		}

		@media screen and (min-width: 768px) {
			.navbar-bootsnipp .navbar-brand {
				font-size: 20px;
				height: auto;
				padding: 15px 5px;
			}
			.navbar-bootsnipp .navbar-nav > li > a {
				font-size: 16px;
				letter-spacing: 1px;
			}
			.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
			.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
			.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover, 
			.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
				border-bottom-width: 5px;
				border-left-width: 0px;
				padding-bottom: 10px;
				padding-left: 14px;
			}

			.navbar-bootsnipp .navbar-nav > li.disabled > a {
				padding-left: 10px;
				padding-right: 10px;
			}


			.navbar-bootsnipp .bootsnipp-search {
				background-color:#d1d1d1;
				display: block;
				position: absolute;
				top: 100%;
				width: 100%;
				-webkit-transform: rotateX(-90deg);
				-moz-transform: rotateX(-90deg);
				-o-transform: rotateX(-90deg);
				-ms-transform: rotateX(-90deg);
				transform: rotateX(-90deg);
				-webkit-transform-origin: 0 0 0;
				-moz-transform-origin: 0 0 0;
				-o-transform-origin: 0 0 0;
				-ms-transform-origin: 0 0 0;
				transform-origin: 0 0 0;
				visibility: hidden;
			}
			.navbar-bootsnipp .bootsnipp-search.open {
				-webkit-transform: rotateX(0deg);
				-moz-transform: rotateX(0deg);
				-o-transform: rotateX(0deg);
				-ms-transform: rotateX(0deg);
				transform: rotateX(0deg);
				visibility: visible;	
			}
			.navbar-bootsnipp .bootsnipp-search > .container {
				padding: 0px;
			}    
		}
		</style>
		<aside class="navbar-bootsnipp"> 
                <div class="row m-b-20">
                    <div class="col-lg-12">
                       
                        <nav class="navbar navbar-expand-lg" style="top: 0px; padding: .5rem 1rem">
                       
                        <a class="navbar-brand" href="/" title="Go to MalaysiaBiz">
                             <img src="/Malaysiabiz2019/assets/images/logo-mbiz.png" class="mybiz-logo" alt="MalaysiaBiz"></a>

                             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="ti-menu text-info"></i></button>
                            <nav class="collapse navbar-collapse sidebar-nav" id="navbarResponsive">
                            <ul class="ml-auto" id="sidebarnav">
                                <li class="nav-small-cap">PERSONAL</li>
                                <li class="<?php if($page=='homepage'){echo 'active';}?>">
                                    <a class="has-arrow" href="/en">
                                      <i class="ti-home"></i>
                                        <span class="hide-menu">Home </span></a>
                                </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Services </span></a>
                            <ul aria-expanded="false" class="collapse" >
                                <li class="<?php if($page=='business-entity'){echo 'active';}?>">
                                    <a href="searchEntity.php">Business Registeration</a></li>
                                <li><a href="/en/pelesenan">Business Licensing</a></li>
                               
                            </ul>
                        </li>
						<li>
							<a class="has-arrow" href="/media/media">
								<i class="ti-gallery"></i>
								<span class="hide-menu">Media </span></a>
						</li>
						 <li class="<?php if($page=='faq-home'){echo 'active';}?>">
							<a class="has-arrow"href="Faq-home.php">
								 <i class="ti-comments"></i>
								<span class="hide-menu">FAQ </span></a>
						</li>
						<li class="<?php if($page=='feedback-form'){echo 'active';}?>">
							<a class="has-arrow" href="feedback-form.php">
							 <i class="far fa-thumbs-up"></i>
								<span class="hide-menu">Feedback </span></a>
						</li>
						<li>
							<a class="has-arrow" href="#" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Login </span></a>
							<ul aria-expanded="false" class="collapse">
							<li class="<?php if($page=='business-entity'){echo 'active';}?>">
							 <a href="https://uapstaging.malaysia.gov.my/idpaa/module.php/mimos/loginuserpass.php?AuthState=_690921859bb7b4bc9dd75498958a2c1686cd8787a7%3Ahttps%3A%2F%2Fuapstaging.malaysia.gov.my%2Fidpaa%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fmybiz.gov%253A8443%252Fsaml2%252Fmetadata%26cookieTime%3D1546575829%26RelayState%3Dmain%252Fmytray">Login</a></li>
							<li><a href="https://gosgstag.malaysia.gov.my/portal/register?forward_url=https:%2F%2Fmybiz.gov:8443%2Fauth">Register</a></li>
						   <li><a href="https://uapstaging.malaysia.gov.my/uap/lostcredential.jsp?language=en">Reset Account</a></li>
							</ul>
						</li>
						<li class="hidden-xs"><a href="#toggle-search" class="animate" id="search-luqman"><span class="ti-search"></span></a></li>
                            </ul>
                         </nav>
                        </nav>
                    </div>
                </div>
				
				<div class="bootsnipp-search animate" id="search-bar" style="top: 101px; z-index: 9999; position: fixed">
					<div class="container">
						<form action="http://gerbang-uiux-newlook.gov/" method="GET" role="search">
							<div class="input-group">
								<input type="text" class="form-control" name="q" placeholder="Search for MalaysiaBiz and hit enter">
								
							</div>
						</form>
					</div>
				</div>
		
            </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
			
	