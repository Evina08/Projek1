<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo.png" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">Admin NoCyb </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/tabelData">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Data User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Chatting</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/pendampingan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pendampingan</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <img class="img-profile rounded-circle mt-3" src="img/girl.png" style="width: 25px">
                            <!-- Authentication Links -->
                            @guest
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if(Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        </li>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0" style="color:darkblue">Pendampingan</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pendampingan</li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-success">
                                                WhatsApp
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">089123456789</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i
                                                        class="fab fa-whatsapp text-success"></i>
                                                </span>
                                                <span>Hubungi Nomor Diatas</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href=""><i class="fab fa-whatsapp fa-2x text-success"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1"
                                                style="color:#DC143C">Instagram</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">@noCyb</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i class="fab fa-instagram"
                                                        style="color:#DC143C"></i>
                                                </span>
                                                <span>Social Media Instagram</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href=""><i class="fab fa-instagram fa-2x" style="color:#DC143C"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New User Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1"
                                                style="color:#8B0000">Email</div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">nocyb11@gmail.com
                                            </div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i class="far fa-envelope"
                                                        style="color:#8B0000"></i>
                                                </span>
                                                <span>Email NoCyb</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href=""><i class="far fa-envelope fa-2x" style="color:#8B0000"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1"
                                                style="color:#1E90FF">Twitter
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">@nocyb11</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-danger mr-2"><i class="fab fa-twitter-square"
                                                        style="color:#1E90FF"></i>
                                                </span>
                                                <span>Social Media Twitter</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href=""><i class="fab fa-twitter-square fa-2x"
                                                    style="color:#1E90FF"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Message From Customer-->
                        <div class="col-xl-12 col-lg-5 ">
                            <div class="card">
                                <div class="card-header py-4 bg-primary d-flex
                                flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Message From Customer</h6>
                                </div>
                                <div>
                                    <div class="customer-message align-items-center">
                                        <a class="font-weight-bold" href="#">
                                            <div class="text-truncate message-title">Hi there! I am wondering if you can
                                                help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500 message-time font-weight-bold">Udin Cilok ·
                                                58m</div>
                                        </a>
                                    </div>
                                    <div class="customer-message align-items-center">
                                        <a href="#">
                                            <div class="text-truncate message-title">But I must explain to you how all
                                                this mistaken idea
                                            </div>
                                            <div class="small text-gray-500 message-time">Nana Haminah · 58m</div>
                                        </a>
                                    </div>
                                    <div class="customer-message align-items-center">
                                        <a class="font-weight-bold" href="#">
                                            <div class="text-truncate message-title">Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit
                                            </div>
                                            <div class="small text-gray-500 message-time font-weight-bold">Jajang Cincau
                                                · 25m</div>
                                        </a>
                                    </div>
                                    <div class="customer-message align-items-center">
                                        <a class="font-weight-bold" href="#">
                                            <div class="text-truncate message-title">At vero eos et accusamus et iusto
                                                odio dignissimos
                                                ducimus qui blanditiis
                                            </div>
                                            <div class="small text-gray-500 message-time font-weight-bold">Udin Wayang ·
                                                54m</div>
                                        </a>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="m-0 small text-primary card-link" href="#">View More <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());

                            </script> - developed by
                            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">nocyb</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
