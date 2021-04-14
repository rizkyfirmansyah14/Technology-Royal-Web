    <!-- plugins:js -->
    <script src="{{ asset('admin-style/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin-style/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('admin-style/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset('admin-style/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{ asset('admin-style/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('admin-style/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin-style/assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin-style/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin-style/assets/js/misc.js')}}"></script>
    <script src="{{ asset('admin-style/assets/js/settings.js')}}"></script>
    <script src="{{ asset('admin-style/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin-style/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Modal Detail -->
    <script type="text/javascript">
        $('.show').click(function () {
            $('#exampleModal').modal();

            var nama = $(this).attr('nama')
            var email = $(this).attr('email')
            var message = $(this).attr('message')
            $('#nama').val(nama)
            $('#email').val(email)
            $('#message').val(message)
        })
    </script>

    <script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("myInput")
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunction2() {
        var x = document.getElementById("myInput2")
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>