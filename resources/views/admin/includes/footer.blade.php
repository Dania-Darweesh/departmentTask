<script src="{{asset('adminStyle/js/core/popper.min.js')}}"></script>
<script src="{{asset('adminStyle/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('adminStyle/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('adminStyle/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('adminStyle/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>