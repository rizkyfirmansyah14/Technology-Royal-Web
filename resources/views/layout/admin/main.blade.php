<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    
    @include('partial.admin.style')
</head>

<body>
    
    <div class="container-scroller">

        @include('partial.admin.sidebar')

        <div class="container-fluid page-body-wrapper">

            @include('partial.admin.navbar')

            <div class="main-panel">

                <div class="content-wrapper">

                    @yield('content')

                </div>
                @include('partial.admin.footer')

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('partial.admin.modal')
    @include('partial.admin.script')
</body>

</html>