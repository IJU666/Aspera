@extends('layout.layout')
@include('layout.navbar')
@section('content')
<div class="col-lg-12 py-5" style="background-color: #F5F5F5;">
    <div class="col-lg-10 mx-auto row">
        <div class="col-lg-5 align-self-center mx-auto">
            <h5 class="fw-semibold">A S P E R A</h5>
            <h5 class="fw-semibold">Layanan Aspirasi</h5>
            <h5 class="fw-semibold">dan Pengaduan Masyarakat</h5>
            <p>Laporkan Keluhan atau Aspirasi Kepada Lembaga Pemerintah Berwenang</p>
        </div>
        <div class="col-lg-5 float-end mx-auto">
            <img src="img/konten1.png" class="img-fluid" width="350" alt="">
        </div>
    </div>
</div>
<div class="container mt-4">
    <h5 class="fw-semibold text-center">Alur Aspera</h5>
    <div class="border-top border-3 col-lg-1 mx-auto"></div>
    <div class="mt-4">
        <img src="img/alur.png" class="img-fluid" width="" alt="">
    </div>
<div class="mt-5">
    <h5 class="fw-semibold text-center">Sampaikan laporan anda</h5>
    <div class="col-lg-1 border-top border-3 mx-auto "></div>
</div>
<div class="col-lg-4 mt-5 mx-auto">
    <p><small>Pilih Klasifikasi Laporan</small></p>
    <form action="" method="post">
        <div class="row col-lg-12 mx-auto">
        <div class="form-check d-inline col-lg-4 p-2 rounded-2" style="background-color: #F5F5F5;">
            <input class="form-check-input mx-auto" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label ms-1" for="exampleRadios1">
              Pengaduan
            </label>
          </div>
          <div class="form-check d-inline col-lg-4 ms-2 p-2 justify-content-center rounded-2" style="background-color: #F5F5F5;">
            <input class="form-check-input mx-auto" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label ms-1" for="exampleRadios2">
              Aspirasi
            </label>
          </div>
        </div>
    </form>
</div>
</div>
@endsection
