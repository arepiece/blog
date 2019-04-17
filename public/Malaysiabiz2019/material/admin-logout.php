<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" onclick="gotoLogout();"><i class="ti-power-off"></i> Logout </a>
</li>
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
            location.href = 'admin-login.php';
        });
    }
</script>
 