
<ul class="navbar-nav my-lg-0">
    <li class=""><span style="
    color: #fff;
    font-size: 14px;
    line-height: 35px;
"><i class="ti-user round-circle m-r-5"></i> Hi Azli Shafie </span></li> 
<li>
    
   <!-- <select class="custom-select top-nav-select">
		<option>Show All</option>
        <option data-tokens="1">MED - BLESS1.0</option>
        <option data-tokens="2">MED - BLESS2.0</option>
        <option data-tokens="3">MBPP</option>
        <option data-tokens="3">LAM</option>
        <option data-tokens="3">LJTM</option>
        <option data-tokens="3">LJBM</option>
    </select> -->
    
</li>  
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-options-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right scale-up">
            <ul class="dropdown-user">
                <li><a href="MyProfile.php" class="reg-top-nav-link  nav-link dropdown-toggle waves-effect waves-dark">
                    <i class="ti-user  m-r-10"></i> MyProfile</a></li>
                 <li role="separator" class="divider"></li>                       
                 <li><a href="login-id-directory.php" class="reg-top-nav-link  nav-link dropdown-toggle waves-effect waves-dark">
                    <i class="ti-id-badge  m-r-10"></i> Add Agency Login ID
                 </a></li>

                 <li role="separator" class="divider"></li>
                 <li><a href="feedback.html" class="reg-top-nav-link nav-link dropdown-toggle waves-effect waves-dark">
                    <i class="ti-pencil-alt m-r-10"></i> Feedback
                 </a></li>

                 <li role="separator" class="divider"></li>
                 <li><a href="Faq-home.php" class="reg-top-nav-link nav-link dropdown-toggle waves-effect waves-dark">
                    <i class="ti-help m-r-10"></i> FAQ
                 </a></li>

                 <li role="separator" class="divider"></li>
                 <li><a href="#" class="reg-top-nav-link  nav-link dropdown-toggle waves-effect waves-dark" onclick="gotoLogout();">
                    <i class="icon-logout m-r-10"></i> Logout
                 </a></li>
            </ul>                             
        </div>
    </li>
</ul>
<script>
    function gotoLogout() {
        swal({
            title: "Are you sure to logout?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            closeOnConfirm: false
        }, function () {
            location.href = '../../index.php';
        });
    }
</script>