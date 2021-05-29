@extends('layouts.layout')

@section('content')
<main>
  <div class="container-fluid">
    <h1 class="mt-4">Biodata User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">
        <a href="/">User</a>
      </li>
      <li class="breadcrumb-item">
        <a href="/">Biodata</a>
      </li>
      <li class="breadcrumb-item active">Data User</li>
    </ol>
  </div>
</main>
<div class="row">
  <div class="col-md-12">
    <div class="container-fluid">
      <h4>Input Biodata User</h4>
      <div class="box box-warning">
        <div class="box-body">

          @if($cek < 1) <form role="form" method="post" enctype="multipart/form-data" action="{{ url('/dataUser/'.\Auth::user()->id) }}">
            @csrf
            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="name">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">No Handphone</label>
                <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Handphone">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">No Handphone Ortu</label>
                <input type="number" name="no_hp_orangtua" class="form-control" id="exampleInputPassword1" placeholder="No Handphone Orang Tua">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jenis_kelamin" name="jenis_kelamin">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Agama" name="agama">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">NIK</label>
                <input type="number" name="nik" class="form-control" id="exampleInputPassword1" placeholder="NIK">
              </div>

              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Avatar</label>
                  <input type ="file" name="avatar" class="form-control">
                  
                </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

            @else

            <form role="form" method="post" enctype="multipart/form-data" action="{{ url('/dataUser/'.\Auth::user()->id) }}">
              @csrf
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="name" value="{{ $dt->name }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Handphone</label>
                  <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Handphone" value="{{ $dt->no_hp }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Handphone Ortu </label>
                  <input type="number" name="no_hp_orangtua" class="form-control" id="exampleInputPassword1" placeholder="No Handphone" value="{{ $dt->no_hp_orangtua }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="text" name="jenis_kelamin" class="form-control datepicker" id="exampleInputPassword1" placeholder="Jenis Kelamin" autocomplete="off" value="{{ $dt->jenis_kelamin}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Agama" name="agama" value="{{ $dt->agama }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="number" name="nik" class="form-control" id="exampleInputPassword1" placeholder="NIK" value="{{ $dt->nik }}">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Avatar</label>
                  <input type ="file" name="avatar" class="form-control" value="{{ $dt->avatar }}">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>

              <div class="text-center"><a href="/data" class="btn btn-primary">Go To Profile</a></div>

            </form>

            @endif

        </div>
      </div>
    </div>
  </div>
</div>

<br>

@endsection