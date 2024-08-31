<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
            <div allign="" style="padding-top:5px" >
            <div class="container mt-5">
    <h1 class="mb-4" style=" text-align: center ;">Currently Logged In Users</h1>
    @if(session()->has('success'))
       
        <div class="alert alert-success alert-dismissible fade show" id="alert" style="font-size: 16px; top: 10px; left: 50%; right: 50%; transform: translateX(-50%);" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('message'))
       
    <div class="alert alert-danger alert-dismissible fade show" id="alert" style="font-size: 16px; top: 10px; left: 50%; right: 50%; transform: translateX(-50%);" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<center>
    <table class="table table-bordered" style="border: 10px Cyan;">
        <thead style="border: 10px Cyan;">
        <tr style="color: white;">
        </thead>
            <th style="color: #00FF00;">ID</th>
            <th style="color: #FFFF00">Name</th>
            <th style="color: #FFFF00;">Email</th>
            <th style="color: #FFFF00;">Status</th>
            <th style="color: #FFFF00;">Role</th>
            <th style="color: #FFFF00;">Last Login Exact Time</th>
            <th style="color: #FFFF00;">Last Login</th>
            
        </tr>
        </thead>
        <tbody style="border: 10px Cyan;">
        @foreach($users as $user)
            <tr>
                <td style="color: white;">{{ $user->id }}</td>
                <td style="color: white;">{{ $user->name }}</td>
                <td style="color: white;">{{ $user->email }}</td>
                <td style="color: white;">{{ $user->status }}</td>
                <td style="color: white;">{{ $user->usertype }}</td>
                <td style="color: white;">{{ $user->last_login_at }}</td>
                <td style="color: white;">{{ \Carbon\Carbon::parse($user->last_login_at)->diffForHumans() }}</td>
               
            </tr>
        @endforeach
        </tbody>
    </table>
</center>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
   <!-- End custom js for this page -->
   <script type="text/javascript">
    $("document").ready(function()
    {
       setTimeout(function()
       {
           $("div.alert").remove();
       },3000);

    } );
    </script>
  </body>
</html>