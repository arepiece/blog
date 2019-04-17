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
        <title>License Search Result</title>
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
	
	@extends('layouts.master-public')

@section('title')
    Search Result | @parent
@stop
@section('meta')

@stop

@section('styles')

    <style>
        @media print {
            .myDivToPrint {
                background-color: white;
                height: 100%;
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 15px;
                font-size: 12px;
                line-height: 18px;
            }
             
            .printPage {
                display: none;
            }

            html, body {
                height:100%; 
                margin: 0 !important; 
                padding: 0 !important;
                overflow: hidden;
            }
        }

        @media (min-width: 768px) { 
            .modal-lg {
                max-width: 80vw;
            }
        }

        .search-body-widget {
            height: 80px;
        }

        #fed-loader, #state-loader {
            margin-top:20px;
            padding-top: 0;
            height: 70px;
            display: none
        }

        .round {
            line-height: 40px;  
            width: 35px;
            height: 35px;
        }

        .box {
            margin-top: -15px;
        }

        .selected-item {
            font-size: 14px !important;
            font-weight: 400;
            color: #4CAF50;
        }

        .title {
            color: #222;
            line-height: 20px;
            font-size: 18px;
        }


        .sub-title, .sub-title>div>span, .sub-title>p{
        font-family: "Poppins", sans-serif !important;
        font-weight: 500 !important;
        color: #666  !important;
        font-size: 14px !important;
        }

        .agensi {
            font-weight: 400; 
            color: #9c27b0;
        }
    </style>
@stop

@section('content')

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
			
			 <!-- Floating button -->
                    <div class="row page-titles">
                    <div class="col-lg-12">
                        <a href="#" title="Dismissible popover">
                        <button type="button" class="btn waves-effect waves-light btn-md-6  btn-primary" style="position: fixed; z-index: 9999; right: 0; margin:20px 0;" data-toggle="modal" onclick="openMySelection()">MySelection (<span id="countMySelection"></span>) </button> 
                    </a>
					</div>
					</div>
			
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
				<!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-12 col-12 align-self-center">
                            <h3 class="m-b-0 m-t-15">Search Result</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/pelesenan">Business Licensing</a></li>
                                <li class="breadcrumb-item active">Business Licensing Search</li>
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
				<div class="col-12">
					<div class="card" style="border-radius: 10px;">
					<div class="card-body">
						<div class="row box bg-light-info text-center" >
                                        <div class="col-lg-12">
                                            <h3 class="font-bold m-b-10">
                                                <span class="round align-self-center round-success">
                                                <i class="ti-light-bulb"></i></span> 
                                                Attention! </h3>

                                                <p>Based on the information <span class="round align-self-center round-success"><i class="ti-info"></i></span>, you have to choose required license based on your business activity requirement.</p>
                                        </div>
                                    </div>
									<div class="row m-t-20">
                                        <div class="col-md-6 col-12">                                
                                            <h3 class="font-bold">Your search input is:</h3>                
                                                  <h5 class="m-b-0">Address</h5>
                                                    <p class="selected-item" id="address">
													Johor / Batu Pahat
                                                    </p>
                                                   <h5 class="m-b-0">Activity</h5>
                                                    <p class="selected-item" id="carian">
													Cafe / Canteen
													</p>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="pull-right">
                                                <a href="javascript:;" onclick="printAllLicenses()" class="btn waves-effect waves-light btn-info btn-sm">
                                                    <i class="ti-printer"> </i> Print Licensing List</a>
                                                <a  href="/pelesenan" class="btn waves-effect waves-light btn-info btn-sm"><i class="ti-arrow-left"> </i> Back to Search</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="font-bold">Search Result:</h3>
                                        </div>                                        
                                    </div> 
					
                                
                                <div class="row m-t-10">
                                    <!-- Perlesenan Persekutuan -->
                                    <div class="col-md-6 col-sm-12"> 
									   <div class="card card-outline-info">
                                                <div class="card-header">
                                                    <h4 class="m-b-0 text-white">List of Federal Licensing
                                                        <span class="badge label-light-info pull-right"><text id="total-federal">0</text> Licensing</span></h4>
                                                </div> 
										   <div class="card-body">
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b" id="LesenName1">Permission of Petroleum Development Act 1974 (PDA Commercial)</h5>
													</div>
													<div class="col-md-3 col-3 text-right">
													<button type="button" class="btn btn-info btn-xs waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Mana-mana individu, perniagaan, syarikat agensi swasta, agensi kerajaan dan lain-lain yang ingin menjalankan ...</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">1. Menjalankan perkhidmatan bunkering melibatkan kebenaran di bawah Akta Kemajuan Petroleum1974 (PDA 2) ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency1">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0;">
													<p class="text-right">
                                                     <button id="Btn1" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('1')">
                                                     <span id="textBtn1" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn1" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-sm" onclick="deleteThis('1')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;">Pendaftaran Francais Bagi Francaisor Tempatan dan Francais Induk (Seksyen 6)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen" ><i class="ti-info" id="LesenName2"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Syarikat-syarikat yang menjalankan perniagaan francais ...</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Perniagaan francais di Malaysia dikawal di bawah Akta Francais 1998. Akta ini terpakai bagi penjualan apa-apa francais ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0">
                                                    <p class="text-right"> <a href="https://www.kpdnkk.gov.my/kpdnkk/diesel-bersubsidi-skid-tank/" target="_blank"> <button type="button" class="btn btn-info btn-sm"><i class="fa fa-link"></i> Link to Agency</button></a></p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;">Lesen Borong Barang Kawalan Berjadual (CSA)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen" ><i class="ti-info" id="LesenName2"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - ROB/ROC/Koperasi</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Lesen Untuk Aktiviti Borong Bagi Barang-Barang Berjadual sepertimana yang tertakluk di bawah Peraturan-Peraturan ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0">
													</div>
													<div style="padding-top: 1rem;background: #F5F5F5;border-bottom: 1px solid rgba(120, 130, 140, 0.13);text-align justify;">
													<div class="col-md-12 align-self-center">
													<h5>Over the counter</h5>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color: #757575">Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Wilayah Persekutuan Putrajaya<br>No. 13, Persiaran Perdana,<br> Presint 2,<br> 62623 Putrajaya,<br> Wilayah Persekutuan Putrajaya.
													</h6>
													</div>
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;" id="LesenName2">Kebenaran Menjalankan Aktiviti Di Bawah Akta Kemajuan Petroleum 1974 (PDA) Dan Akta Kawalan Bekalan 1961 (CSA)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info" ></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Perniagaan, Syarikat, Perkongsian Liabiliti Terhad & Badan-badan Profesional</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Kebenaran PDA bagi menjual runcit bahan petroleum melibatkan kebenaran mengusahakan Stesen Minyak/Skid Tank ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency2">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0">
													<p class="text-right">
                                                     <button id="Btn2" type="button" class="btn btn-action btn-info btn-sm " onclick="addMySelection('2')">
                                                     <span id="textBtn2" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn2" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('2')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;">Pendaftaran Francais Bagi Francaisor Asing (Seksyen 54)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen" ><i class="ti-info" id="LesenName2"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Perniagaan, Syarikat, Perkongsian Liabiliti Terhad & Badan-badan Profesional</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Pendaftaran Perniagaan Francais bagi Pemberi Francais Asing/Francaisor Asing di bawah Seksyen 54 Akta Francais ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5 text-right">
													<p class="text-right"> <a href="https://www.kpdnkk.gov.my/kpdnkk/wp-content/uploads/2017/04/Borang-KSD-1-Pengangkutan-Darat-15082014.pdf" target="_blank" download> <button type="button" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Download Form</button></a></p>
													
													</div>
													
													
											</div>
											
											
											
                                                <div class="message-box contact-box">
                                                   
                                                    <div class="message-widget contact-widget">
												

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Perlesenan Persekutuan -->
                                   <div class="col-md-6 col-sm-12"> 
                                           <div class="card card-outline-info">
                                                <div class="card-header">
                                                    <h4 class="m-b-0 text-white">List of State Licensing
                                                        <span class="badge label-light-info pull-right"><text id="total-state">0</text> Licensing</span></h4>
                                                </div> 
                                            <div class="card-body">
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b" id="LesenName3">Permission of Petroleum Development Act 1974 (PDA Commercial)</h5>
													</div>
													<div class="col-md-3 col-3 text-right">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info" id="LesenName1"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Mana-mana individu, perniagaan, syarikat agensi swasta, agensi kerajaan dan lain-lain yang ingin menjalankan ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency3">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left:0">
													<p class="text-right">
                                                     <button id="Btn3" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('3')">
                                                     <span id="textBtn3" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn3" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('3')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;" id="LesenName4">Pendaftaran Francais Bagi Francaisor Tempatan dan Francais Induk (Seksyen 6)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info" id="LesenName1"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Syarikat-syarikat yang menjalankan perniagaan francais ...</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency4">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0">
													<p class="text-right">
                                                     <button id="Btn4" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('4')">
                                                     <span id="textBtn4" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn4" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('4')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;" id="LesenName5">Lesen Borong Barang Kawalan Berjadual (CSA)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info" id="LesenName1"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - ROB/ROC/Koperasi</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency5">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0">
													<p class="text-right">
                                                     <button id="Btn5" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('5')">
                                                     <span id="textBtn5" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn5" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('5')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;" id="LesenName6">Kebenaran Menjalankan Aktiviti Di Bawah Akta Kemajuan Petroleum 1974 (PDA) Dan Akta Kawalan Bekalan 1961 (CSA)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info" ></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Perniagaan, Syarikat, Perkongsian Liabiliti Terhad & Badan-badan Profesional</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency6">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5 text-right">
													<p class="text-right">
                                                     <button id="Btn6" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('6')">
                                                     <span id="textBtn6" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn6" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('6')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
											
											<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b;padding-top: 2rem;" id="LesenName7">Pendaftaran Francais Bagi Francaisor Asing (Seksyen 54)</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem;">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info" id="LesenName1"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib - Perniagaan, Syarikat, Perkongsian Liabiliti Terhad & Badan-badan Profesional</h6>
													</div>
													<div class="col-md-7 col-7 align-self-center">
													<h6 ><a href="https://www.kpdnkk.gov.my/kpdnkk/" class="link" style="color:#1e88e5" id="Agency7">Kementerian Perdagangan Dalam Negeri Koperasi dan Kepenggunaan</a></h6>
													</div>
													<div class="col-md-5 col-5" style="padding-left: 0">
													<p class="text-right">
                                                     <button id="Btn7" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('7')">
                                                     <span id="textBtn7" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn7" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('7')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>

                                                <div class="message-box contact-box">
                                                    
                                                    <div class="message-widget contact-widget">
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
					</div>
					</div>
				</div>
                       

						
						<!-- modal info Lesen-->
                        <div class="modal fade bs-example-modal-lg" id="info-lesen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;z-index: 9999;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#222">
                                        <h4 class="modal-title" id="myLargeModalLabel" style="color:#ffff"><div class="round align-self-center round-success m-r-10"><i class="ti-info"></i></div> Licensing Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ffff;opacity: 1;">×</button>
                                    </div>
                                    <div class="modal-body" style="padding-top: 0">
									
									
                                    <div style="font-size: 12px">
									<table class="table color-table primary-table">
                                        
                                        <tbody>
                                           
											 <tr >
                                                <td ><b>Licensing</b></td>
                                                
                                                <td>Perakuan Bomba<br><br>
                                                </td>
												<td><div style="text-right;" class="printPage"><button type="button" class="btn btn-info btn-circle waves-effect text-right" data-dismiss="modal"><i class="ti-printer" onclick="window.print();"></i></button></div></td>
                                            </tr>
                                            <tr >
                                                <td ><b>Activity/Licensing Type</b></td>
                                                
                                                <td>Sijil Perakuan Bomba<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Purpose/Description</b></td>
                                                
												<td>Untuk memastikan semua pepasangan keselamatan kebakaran berada dalam keadaan baik dan boleh berfungsi dengan baik.</td>
                                                <td><br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Agency</b></td>
                                                
                                                <td>Jabatan Bomba & Penyelamat Malaysia, Kementerian Kesejahteraan Bandar, Perumahan Dan Kerajaan Tempatan<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Address</b></td>
                                                
                                                <td>Jabatan Bomba & Penyelamat Malaysia<br>
												LEBUH WAWASAN, PRESINT 7,<br>
												62250 PUTRAJAYA.<br>
												<b>Tel :</b>0388927713<br>
												<b>Fax :</b>0388880025<br>
												Laman Sesawang :<br>
												<a href="http://www.bomba.gov.my" target="_blank">http://www.bomba.gov.my</a>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Licensing Locations</b></td>
                                                
                                                <td>Jabatan Bomba dan Penyelamat Malaysia di peringkat Zon/Negeri<br><br>
                                                </td>
                                            </tr>
											  <tr >
                                                <td ><b>License Terms</b></td>
                                                
                                                <td>-<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Fees / Licensing Validity Period</b></td>
                                                
                                                <td>No fee<br>
												<b>Tempoh Sah Laku :</b> Wajib diperbaharui setiap tahun<br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Acts & Regulations
												</b></td>
                                                
                                                <td>1. Undang-undang Kecil Bangunan Seragam 1984 2. Akta Perkhidmatan Bomba 1988 (Akta 341)<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Application Methods</b></td>
                                                
                                                <td><a target="_blank" href="https://www.bless2.gov.my/index.php/login/">https://www.bless2.gov.my/index.php/login/</a>
                                                    <br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Eligible Business Entities</b></td>
                                                
                                                <td>Semua jenis premis yang telah ditetapkan<br><br>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                               
                            </div>
                            
                        </div>
                    
                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
			</div>
				<div class="modal fade modal-list-myselection" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">MySelection</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<div class="table-responsive">
									<table id="demo-foo-addrow" class="table table-hover">

										<tbody>


										</tbody>
										
									</table>
								</div>
							</div>
							<div class="modal-footer">
								<td >
									<button type="button" class="btn btn-info waves-effect" onclick="goToNext()"> Go To MyTray</button>
								</td>
								<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
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

            <!-- Footable -->
            <script src="../assets/plugins/footable/js/footable.all.min.js"></script>
            <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
            <!--FooTable init-->
            <script src="js/footable-init.js"></script>
            <!-- ============================================================== -->
            <!-- Style switcher -->
            <!-- ============================================================== -->
            <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

            <script>

                                            $(document).ready(function () {
                                                $("#countMySelection").text($(".cls-row").length);
                                                $("#countMySelection").val($(".cls-row").length);

                                            });

                                            function deleteThis(classTrName) {
                                                $(".footable" + classTrName).remove();
                                                $("#countMySelection").text($(".cls-row").length);
                                                $("#countMySelection").val($(".cls-row").length);
                                                if ($(".cls-row").length == 0) {
                                                    $(".modal-list-myselection").modal('hide');
                                                }
                                                $("#Btn" + classTrName).show();
                                                $("#removeBtn" + classTrName).hide();
                                            }

                                            function addMySelection(rowCnt) {
                                                if ($("#textBtn" + rowCnt).hasClass('fa fa-minus')) {
                                                    deleteThis(rowCnt);
                                                    return;
                                                }

                                                var myModal = $("#targetModal" + rowCnt).val();

                                                var app = "<tr class='footable" + rowCnt + " cls-row' style='height: 40px;'>";
                                                app += "<td> <p class='font-mid text-info' style=' color:#26c6da;'>" + $("#LesenName" + rowCnt).text() + "</p>";
                                                app += "<p> " + $("#Agency" + rowCnt).text() + "</p></td><td>";
                                                app += "<button type='button' class='btn btn-sm btn-icon btn-pure btn-outline' data-toggle='tooltip' data-original-title='Delete' onclick='deleteThis(" + rowCnt + ")'><i class='ti-trash' aria-hidden='true'></i></button></td></tr>";
                                                $("#demo-foo-addrow").append(app);
                                                $("#countMySelection").text($(".cls-row").length);
                                                $("#countMySelection").val($(".cls-row").length);

                                                $("#Btn" + rowCnt).hide();
                                                $("#removeBtn" + rowCnt).show();
                                            }

                                            function openMySelection() {
                                                if ($(".cls-row").length == 0) {
                                                    return;
                                                } else {
                                                    $(".modal-list-myselection").modal('show');
                                                }
                                            }

                                            function goToNext() {
                                                location.href = '/demo-gosg/index.html';
                                            }
            </script>
    </body>

</html>