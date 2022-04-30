<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>

    <!-- Application Entry -->
    <div class="entry">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <!-- Sidebar -->
                <div class="col-auto  px-sm-1 px-0 bg-primary">
                    <div
                        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="list-unstyled slim-nav-menu flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-box-archive"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-file"></i>
                                </a>
                            </li>

                        </ul>

                        <div class="pb-4">
                            <ul class="list-unstyled slim-nav-menu flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                id="menu">
                                <li>
                                    <a href="#" class="nav-link align-middle px-0">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link align-middle px-0">
                                        <img src="/img/avatar.png" alt="profile image" class="img-responsive"
                                            style="width: 20px; border-radius: 100px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link align-middle px-0">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>


                        </div>

                    </div>
                </div>
                <!--// Sidebar -->
                <div class="col-auto col-md-1 col-xl-2 px-sm-1 px-0 bg-white">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
                        style="100%">
                        <div class="m-t-50"></div>
                        <ul class="list-unstyled sidenav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            style="100%" id="menu">
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-dashboard"></i>&nbsp; <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0 active-link">
                                    <i class="fa fa-users"></i>&nbsp; <span>Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-box-archive"></i>&nbsp; <span>Departments</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-users"></i>&nbsp; <span>Employee</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-list-check"></i>&nbsp; <span>Activities</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-history"></i>&nbsp; <span>Holidays</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-calendar"></i>&nbsp; <span>Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-credit-card"></i>&nbsp; <span>Payroll</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-user"></i>&nbsp; <span>Accounts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa fa-history"></i>&nbsp; <span>Reports</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg top-nav">
                            <!-- Container wrapper -->
                            <div class="container-fluid">

                                <div style="width: 60%">

                                    <form class="row">
                                        <div class="col-md-2">
                                            <h4>Users</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="">Year</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group" style="width: 100%">
                                                <input type="search" class="form-control rounded" placeholder="Search"
                                                    aria-label="Search" aria-describedby="search-addon" />
                                                <span id="search-addon">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Right elements -->
                                <div class="d-flex align-items-center" style="margin-top: -20px">

                                    <a class="text-reset me-3" href="#">
                                        Language
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <a class="text-reset me-3" href="#">
                                        Report
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <a class="text-reset me-3" href="#">
                                        Project
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <!-- Icons -->
                                    <div class="dropdown">
                                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fas fa-envelope"></i>
                                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                                        </a>

                                    </div>


                                    <div class="dropdown">
                                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fas fa-bell"></i>

                                        </a>

                                    </div>
                                    <div class="dropdown">
                                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fas fa-user"></i>

                                        </a>

                                    </div>

                                </div>
                                <!--// Right elements -->

                            </div>
                            <!-- Container wrapper -->
                        </nav>
                        <!-- Navbar -->
                        <div class="section">
                            <div class="container-fluid">
                                <!-- divider -->
                                <hr>
                                <div id="app">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="add-user-modal" tabindex="-1" aria-labelledby="AdduserModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="add-user">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" class="form-control" name="employee_id" placeholder="Employee ID" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email ID" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="role" required>
                                    <option value="">Select Role Type</option>
                                    <option value="admin">Admin</option>
                                    <option value="super admin">Super Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" id="pass1" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" id="pass2" placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Module Permission</th>
                                    <th>Read</th>
                                    <th>Write</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Super Admin</strong></td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="read" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="write" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ddlete" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Admin</strong></td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="read" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="write" value="" />
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ddlete" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Employee</strong></td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="read" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="write" value=""/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ddlete" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>HR Admin</strong></td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="read" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="write" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ddlete" value="" checked disabled/>
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                      </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add User</button>
                <button type="button" class="btn btn-default" data-mdb-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--// Modal -->
        <script src="/js/vendor/modernizr-3.11.2.min.js"></script>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

</body>

</html>
