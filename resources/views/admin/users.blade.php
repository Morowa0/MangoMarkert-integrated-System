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
    <h1 class="mb-4" style=" text-align: center ;">User Management Centre</h1>
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
        <th style="color: white;">ID</th>
        <th style="color: white;">Name</th>
        <th style="color: white;">Email</th>
        <th style="color: white;">Status</th>
        <th style="color: white;">Role</th>
        <th style="color: white;">Action</th>
        <th style="color: white;">Change Role</th>
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
            <td style="color: white;">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionDropdown{{ $user->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                        select
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown{{ $user->id }}">
                        <li>
                            <form action="{{ route('users.activate', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">Activate</button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('users.disable', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">Disable</button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('users.delete', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
            <td style="color: white;">
                <form action="{{ route('users.changeRole', $user->id) }}" method="POST" class="d-inline">
                    @csrf
                    <select name="role" class="form-select d-inline" style="width: auto;">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </td>
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