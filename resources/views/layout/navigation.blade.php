<nav id="top-navbar" class="navbar navbar-expand-lg navbar-light bg-white c-shadow py-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('inventory_management/assets/images/logo1.png') }}" width="120px" alt=""></a>
      <div class="d-flex">
        <a id="offcanvas-btn" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight"><i class="fas fa-cogs"></i></a> <!-- Off Canvas Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navbar-left" class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><i class="fas fa-tachometer-alt"></i>
              Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><i class="fas fa-user"></i> Users
            </a>
            <div class="dropdown-menu custom-nav c-shadow" aria-labelledby="navbarDropdown">
              <span class="dropdown-item disabled">Permission</span>
              <a class="dropdown-item" href="{{ url('user/index') }}"><i class="fas fa-users pe-3"></i> User Management</a>
              <a class="dropdown-item" href="#"><i class="fas fa-unlock pe-3"></i> User Role</a>
              <a class="dropdown-item" href="#"><i class="far fa-gem pe-3"></i> Projects</a>
              <a class="dropdown-item" href="#"><i class="fas fa-cogs pe-3"></i> User Setting</a>

              <hr class="dropdown-divider">
              <span class="dropdown-item disabled">Management</span>
              <a class="dropdown-item" href="#"><i class="fas fa-user pe-3"></i> User Access</a>
              <a class="dropdown-item" href="#"><i class="fas fa-users pe-3"></i> User Control</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><i class="fas fa-list"></i>
              Category
            </a>
            <ul class="dropdown-menu custom-nav c-shadow" aria-labelledby="navbarDropdown">
              <span class="c-shadow">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </span>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><i class="fas fa-shopping-bag"></i>
              Products
            </a>
            <div class="dropdown-menu custom-nav c-shadow" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/product_types') }}">Product Type</a>
              <a class="dropdown-item" href="#">Product Size</a>
              <a class="dropdown-item" href="#">Product Unit</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-money-bill-wave"></i> Transaction</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-file-invoice"></i> Report</a>
          </li>
        </ul>
        <div>
          <ul id="right-navbar" class="navbar-nav navbar-right align-items-center me-auto mb-2 mb-lg-0">
            <li class="nav-item icon-nav">
              <a class="nav-link" id="offcanvas-btn1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><i class="fas fa-cogs"></i></a>
              <!-- Off Canvas Button -->
            </li>
            <li class="nav-item dropdown icon-nav">
              <a class="nav-link dropdown-toggle px-2" href="#" id="navbarDropdown" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-search"></i>
              </a>
              <div class="dropdown-menu c-shadow search-dropdown" aria-labelledby="navbarDropdown">
                <div>
                  <form action="" class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search...">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </form>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown icon-nav">
              <a class="nav-link dropdown-toggle px-3 py-2" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell"><span
                    class="position-absolute top-5 start-40 p-1 translate-middle badge rounded-pill bg-danger">
                  </span></i>
              </a>
              <div class="dropdown-menu c-shadow" aria-labelledby="navbarDropdown">
                <div class="px-3">
                  <h5>You have 5 notifications</h5>
                </div>
                <hr>
                <a href="#" class="dropdown-item notification-msg d-flex align-items-center py-2">
                  <i class="fas fa-user-plus"></i>
                  <p class="ms-3 w-full">New User Registered</p>
                  <p class="text-end ms-3"><i class="far fa-clock"></i> 10 AM</p>
                </a>
                <a href="#" class="dropdown-item notification-msg d-flex align-items-center py-2">
                  <i class="fas fa-user-plus"></i>
                  <p class="ms-3 w-full">New User Registered</p>
                  <p class="text-end ms-3"><i class="far fa-clock"></i> 07 AM</p>
                </a>
                <a href="#" class="dropdown-item notification-msg d-flex align-items-center py-2">
                  <i class="fas fa-user-plus"></i>
                  <p class="ms-3 w-full">New User Registered</p>
                  <p class="text-end ms-3"><i class="far fa-clock"></i> 02 AM</p>
                </a>
                <a href="#" class="dropdown-item notification-msg d-flex align-items-center py-2">
                  <i class="fas fa-user-plus"></i>
                  <p class="ms-3 w-full">New User Registered</p>
                  <p class="text-end ms-3"><i class="far fa-clock"></i> 12 AM</p>
                </a>
                <hr>
                <a class="dropdown-item text-center d-block" href="#">View All</a>
              </div>
            </li>
            <li class="nav-item dropdown avatar-wrap">
              <a class="nav-link dropdown-toggle px-2" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="{{ asset('inventory_management/assets/images/user/user.png') }}" width="25px" height="25px" alt="">
              </a>
              <ul class="dropdown-menu c-shadow" id="avatar" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"><i class="fas fa-user pe-3"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-envelope pe-3"></i> Message</a></li>
                <li><a class="dropdown-item" href="#"><i class="far fa-gem pe-3"></i> Projects</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs pe-3"></i> Account Setting</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt pe-3"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>