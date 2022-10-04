
     <!-- ========== Left Sidebar Start ========== -->
     <div class="left-side-menu">

        <div class="h-100" data-simplebar>

             <!-- User box -->
            <div class="user-box text-center">

                <img src="{{asset('')}}assets/images/users/dk.png" width="40%" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                    <div class="dropdown">
                        <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">{{auth('web')->user()->name}}</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->

                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>

                        </div>
                    </div>


            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{URL::to('admin/index')}}">
                            <i class="mdi mdi-view-dashboard-outline"></i>

                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('admin/logo-index')}}">
                            <i class="mdi mdi-view-dashboard-outline"></i>

                            <span> Web Config </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Apps</li>

                    <li>
                        <a href="#email" data-bs-toggle="collapse">
                            <i class="fas fa-code-branch
                            "></i>
                            <span> Shop </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="email">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('brance.list')}}">Shop List</a>
                                </li>
                                <li>
                                    <a href="{{route('brance.create')}}">Create Shop</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#employee" data-bs-toggle="collapse">
                            <i class="fas fa-users
                            "></i>
                            <span> Employee </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="employee">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('employ.list')}}">Employee List</a>
                                </li>
                                <li>
                                    <a href="{{route('employ.create')}}">Add Employee</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#report" data-bs-toggle="collapse">
                            <i class="fas fa-clipboard-list
                            "></i>
                            <span> Report </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="report">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('active.employee.report')}}">Active Employee</a>
                                </li>
                                <li>
                                    <a href="{{route('inactive.employee.report')}}">Inactive Employee</a>
                                </li>
                                <li>
                                    <a href="{{route('passport.expiry.report')}}">Passport Expired</a>
                                </li>
                                <li>
                                    <a href="{{route('rdexpiry.report')}}">Residence Card Expired</a>
                                </li>
                                <li>
                                    <a href="{{route('workpermit.report')}}">Work Permit Expired</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
