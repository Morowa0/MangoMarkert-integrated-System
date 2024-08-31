<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body style="background-image: url('../assets/img/bg_image_1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; margin: 0; padding: 0; height: 100vh; width: 100vw; background-attachment: fixed;">
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <div class="container-fluid page-body-wrapper">
                <div class="container" align="center" style="padding-top:10px">

                    @if(session()->has('message'))
                    <div class="alert alert-warning" id="alert" style="font-size: 16px; position: absolute; top: 10px; left: 50%; transform: translateX(-50%);">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                </div>
            </div>
            <!-- partial -->
        </div>
    </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
