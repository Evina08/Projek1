@extends('layouts.layout')
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

@endsection
