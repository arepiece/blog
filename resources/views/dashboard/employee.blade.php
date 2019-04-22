@extends('layouts.master')

@section('title', 'Page Title')
@push('custom-link')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/Malaysiabiz2019//assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/Malaysiabiz2019//assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Footable CSS -->
    <link href="/Malaysiabiz2019//assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="/Malaysiabiz2019//assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/Malaysiabiz2019/horizontal/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/Malaysiabiz2019/horizontal/css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endpush

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
                  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">$48,356</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
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
                        <div class="card">
                            <!-- .left-right-aside-column-->
                            <div class="contact-page-aside">
                                <!-- .left-aside-column-->
                                <div class="left-aside">
                                    <ul class="list-style-none">
                                        <li class="box-label"><a href="javascript:void(0)">All Contacts <span>123</span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Work <span>103</span></a></li>
                                        <li><a href="javascript:void(0)">Family <span>19</span></a></li>
                                        <li><a href="javascript:void(0)">Friends <span>623</span></a></li>
                                        <li><a href="javascript:void(0)">Private <span>53</span></a></li>
                                        <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">+ Create New Label</a></li>
                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Add Lable</h4> </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Name of Label</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" placeholder="type name"> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Select Number of people</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control">
                                                                        <option>All Contacts</option>
                                                                        <option>10</option>
                                                                        <option>20</option>
                                                                        <option>30</option>
                                                                        <option>40</option>
                                                                        <option>Custome</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </ul>
                                </div>
                                <!-- /.left-aside-column-->
                                <div class="right-aside">
                                    <div class="right-page-header">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10">Contacts / Employee List </h4></div>
                                            <div class="ml-auto">
                                                <!--<input type="text" id="demo-input-search2" placeholder="search contacts" class="form-control"> </div>-->
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Role</th>
                                                    <th>Age</th>
                                                    <th>Joining date</th>
                                                    <th>Salery</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($lesens as $lesen)
                                                    <tr>
                                                        <td>{{ $loop->iteration }} .</td>
                                                        <td>
                                                            <a href="app-contact-detail.html"><img src="images/{{$lesen->avatar}}" alt="user" class="img-circle" />{{$lesen->name}}</a>
                                                        </td>
                                                        <td>{{$lesen->email}}</td>
                                                        <td>{{$lesen->phone}}</td>
                                                        <td><span class="label label-danger">{{$lesen->role}}</span> </td>
                                                        <td>{{$lesen->age}}</td>
                                                        <td>{{$lesen->joindate}}</td>
                                                        <td>${{$lesen->salary}}</td>
                                                        <td>
                                                            <a href="/deleteemployee/{{$lesen->id}}" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/2.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                                    </td>
                                                    <td>arijit@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class="label label-info">Developer</span> </td>
                                                    <td>26</td>
                                                    <td>10-09-2014</td>
                                                    <td>$1800</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/3.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class="label label-success">Accountant</span></td>
                                                    <td>28</td>
                                                    <td>1-10-2013</td>
                                                    <td>$2200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/4.jpg" alt="user" class="img-circle" /> Hritik Roshan</a>
                                                    </td>
                                                    <td>hritik@gmail.com</td>
                                                    <td>+456 456 789</td>
                                                    <td><span class="label label-inverse">HR</span></td>
                                                    <td>25</td>
                                                    <td>2-10-2017</td>
                                                    <td>$200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/5.jpg" alt="user" class="img-circle" /> John Abraham</a>
                                                    </td>
                                                    <td>john@gmail.com</td>
                                                    <td>+567 456 789</td>
                                                    <td><span class="label label-danger">Manager</span></td>
                                                    <td>23</td>
                                                    <td>10-9-2015</td>
                                                    <td>$1200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/6.jpg" alt="user" class="img-circle" /> Pawandeep kumar</a>
                                                    </td>
                                                    <td>pawandeep@gmail.com</td>
                                                    <td>+678 456 789</td>
                                                    <td><span class="label label-warning">Chairman</span></td>
                                                    <td>29</td>
                                                    <td>10-5-2013</td>
                                                    <td>$1500</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/7.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                                    </td>
                                                    <td>ritesh@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class="label label-danger">Designer</span></td>
                                                    <td>35</td>
                                                    <td>05-10-2012</td>
                                                    <td>$3200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/8.jpg" alt="user" class="img-circle" /> Salman Khan</a>
                                                    </td>
                                                    <td>salman@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class="label label-info">Developer</span></td>
                                                    <td>27</td>
                                                    <td>11-10-2014</td>
                                                    <td>$1800</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/1.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class="label label-success">Accountant</span></td>
                                                    <td>18</td>
                                                    <td>12-5-2017</td>
                                                    <td>$100</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/2.jpg" alt="user" class="img-circle" /> Sonu Nigam</a>
                                                    </td>
                                                    <td>sonu@gmail.com</td>
                                                    <td>+456 456 789</td>
                                                    <td><span class="label label-inverse">HR</span></td>
                                                    <td>36</td>
                                                    <td>18-5-2009</td>
                                                    <td>$4200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/3.jpg" alt="user" class="img-circle" /> Varun Dhawan</a>
                                                    </td>
                                                    <td>varun@gmail.com</td>
                                                    <td>+567 456 789</td>
                                                    <td><span class="label label-danger">Manager</span></td>
                                                    <td>43</td>
                                                    <td>12-10-2010</td>
                                                    <td>$5200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/4.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                                    </td>
                                                    <td>genelia@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class="label label-danger">Designer</span> </td>
                                                    <td>23</td>
                                                    <td>12-10-2014</td>
                                                    <td>$1200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/5.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                                    </td>
                                                    <td>arijit@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class="label label-info">Developer</span> </td>
                                                    <td>26</td>
                                                    <td>10-09-2014</td>
                                                    <td>$1800</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="/Malaysiabiz2019/assets/images/users/6.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class="label label-success">Accountant</span></td>
                                                    <td>28</td>
                                                    <td>1-10-2013</td>
                                                    <td>$2200</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2">
                                                        <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                                    </td>
                                                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <form method="post" action="{{url('/addemployee')}}" enctype="multipart/form-data" class="form-horizontal form-material">
                                                                {{ csrf_field() }}

                                                                <div class="modal-body">
                                                                 
                                                                        <div class="form-group">
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input name="name2" type="text" class="form-control" placeholder="Type name"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input name="email" type="text" class="form-control" placeholder="Email"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input name="phone" type="number" class="form-control" placeholder="Phone"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input name="designation" type="text" class="form-control" placeholder="Designation"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input name="age" type="number" class="form-control" placeholder="Age"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                            <input name="datejoin" type="text" class="form-control mydatepicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy"></div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input name="salary" type="number" class="form-control" placeholder="Salary"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                    <input name="avatar" type="file" class="upload"> </div>
                                                                            </div>
                                                                        </div>
                                                                  
                                                                </div>
                                                                <div class="modal-footer">
                                                                   <button type="submit" class="btn btn-primary">Add</button>
                                                                   <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                                          </from>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <td colspan="7">
                                                        <div class="text-right">
                                                            <ul class="pagination"> </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- .left-aside-column-->
                                </div>
                                <!-- /.left-right-aside-column-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/Malaysiabiz2019/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="/Malaysiabiz2019/assets/plugins/jquery.sparkline.min.js"></script>-->
       <script src="/Malaysiabiz2019//assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/Malaysiabiz2019/assets/plugins/popper/popper.min.js"></script>
    <script src="/Malaysiabiz2019/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/Malaysiabiz2019/horizontal/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/Malaysiabiz2019/horizontal/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/Malaysiabiz2019/horizontal/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/Malaysiabiz2019/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/Malaysiabiz2019/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/Malaysiabiz2019/horizontal/js/custom.min.js"></script>
    <!-- Footable -->
    <script src="/Malaysiabiz2019/assets/plugins/footable/js/footable.all.min.js"></script>
    <script src="/Malaysiabiz2019/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="/Malaysiabiz2019/horizontal/js/footable-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/Malaysiabiz2019/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="/Malaysiabiz2019//assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


<script>
      jQuery('.mydatepicker, #datepicker').datepicker();
$(document).ready(function(){
    $('#demo-foo-addrow').DataTable();
    $("#submitBtn").click(function(){     
        alert('sssss');
//        $("#myForm").submit(); // Submit the form
         $(this).submit();
    });
    
   $("form").submit(function(){
  });
  
//    jQuery('.mydatepicker, #datepicker').datepicker();
});
</script>
@stop