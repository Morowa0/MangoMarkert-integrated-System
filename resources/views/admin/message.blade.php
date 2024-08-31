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
    <h1 class="mb-4" style=" text-align: center ;">Messages</h1>
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
<table class="table table-bordered" style="border: 10px Cyan;">
    <thead style="border: 10px Cyan;">
    <tr style="color: white;">
    </thead>
        <th style="color: white;">Name</th>
        <th style="color: white;">Email</th>
        <th style="color: white;">Message</th>
        <th style="color: white;">Date Received</th>
    </tr>
    </thead>
    <tbody style="border: 10px Cyan;">
    @foreach($users as $user)
        <tr>
         
            <td style="color: white;">{{ $user->name }}</td>
            
            <td style="color: white;">{{ $user->email }}</td>
            <td style="color: white;">{{ $user->message }}</td>
            <td style="color: white;">{{ $user->created_at }}</td>
           
        </tr>
    @endforeach
    </tbody>
</table>

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