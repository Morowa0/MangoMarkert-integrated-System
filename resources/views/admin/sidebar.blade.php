<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: white; padding: 10px;">
  <!-- Logo at the top -->
  <div class="sidebar-header" style="text-align: center; margin-bottom: 2px;">
    <img src="assets/img/tanalogo.PNG"  alt="Logo" style="max-width: 100px; height: auto;">
  </div>

  <ul class="nav" style="color: black;">
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/currentusers') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Logged In Users</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('manufacturers') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Manufacturers</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('messages') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Messages</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('farmers') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Farmers</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/allusers') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">All Users</span>
      </a>
    </li>
  </ul>
</nav>
