<!-- @extends('layouts.layout')
@section('content')

<!-- MAIN -->
<div class="card-body">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container  ">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-center">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{ asset('assets/img/'.$dt->avatar) }}"
                                    class="img-circle" height="100" width="100" alt="Avatar">
                                <h3 class="name">{{ $dt->name }}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">

                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Profile</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Nama <span>{{ $dt->name }}</span></li>
                                    <li>No Handphone <span>{{ $dt->no_hp }}</span></li>
                                    <li>No Handphone Orang Tua <span>{{ $dt->no_hp_orangtua }}</span></li>
                                    <li>Jenis Kelamin <span>{{ $dt->jenis_kelamin }}</a></span></li>
                                    <li>Agama <span>{{ $dt->agama }}</span></li>
                                    <li>NIK <span>{{ $dt->nik }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="text-center">
    <a href="/dataUser" class="btn btn-primary">Edit Profile</a>
</div>

</div>
<!-- END WRAPPER -->
<footer>
    <div class="container-fluid">
        <p class="copyright">Shared by <i class="fa fa-love"></i><a
                href="https://bootstrapthemes.co">BootstrapThemes</a>
        </p>
    </div>
</footer>
<!-- Javascript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>

@endsection-->

<!doctype html>
<html lang="en">

<head>
    <title>Profile User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/logo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
