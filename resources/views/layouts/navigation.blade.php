<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="navbar-brand" href="{{route('dashboard')}}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        Discover Zim
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-5">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
                Options
                <img src="{{asset('assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
            </a>
            <div class="dropdown-menu ms-n3 dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Main Menu
                </h6>
                <a href="" class="dropdown-item border-radius-md">
                  <span>Home</span>
                </a>
                <a href="" class="dropdown-item border-radius-md">
                  <span>Tickets</span>
                </a>
                <a href="" class="dropdown-item border-radius-md">
                    <span>Departments</span>
                </a>
                <a href="" class="dropdown-item border-radius-md">
                    <span>Criteria</span>
                </a>
                <a href="" class="dropdown-item border-radius-md">
                  <span>Users</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="" class="dropdown-item border-radius-md">
                  <span>Profile</span>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item ms-lg-auto">
            <a class="nav-link nav-link-icon me-2" href="" >
                <i class="fa fa-user me-1"></i>
                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">
                    {{Auth::user()->name}}
                </p>
            </a>
          </li>

          <li class="nav-item my-auto ms-3 ms-lg-0">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            <a href="#" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0"href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
  <!-- End Navbar -->
