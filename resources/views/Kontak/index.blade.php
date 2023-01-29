@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-4 mb-3">
    <h3 style="color:white;"><b>KONTAK KAMI</b></h3>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 mt-5 mb-5">
      MAP
    </div>
  </div>
  </div>
<div class="container">
<div class="row">
  <div class="col-lg-4">
    <h1>Kontak Kami</h1>
    <hr>
      <div><strong><i class="fas fa-home"></i> Address:</strong><br>-</div>
      <div><br><strong><i class="fas fa-building"></i> Workshop:<br></strong>{{ $beranda->alamat }}</div><br>
      <div><strong><i class="fas fa-phone"></i> Phone:<br></strong>{{ $beranda->phone }}</div><br>
      <div><strong><i class="fas fa-whatsapp"></i> Whatsapp:<br></strong>{{ $beranda->whatsapp }}</div><br>
      <div><strong><i class="fas fa-envelope"></i> Email:<br></strong>{{ $beranda->email_workshop }}</div><br>
    </div>
  <div class="col-lg-8 mb-5">
    <h1>Kontak Form</h1>
    <hr>
    <input class="form-control mb-3" type="text" placeholder="Nama Lengkap *">
    <input class="form-control mb-3" type="text" placeholder="Email *">
    <input class="form-control mb-3" type="text" placeholder="Telepon">
    <input class="form-control mb-3" type="text" placeholder="Masukkan pesan anda">
    <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Default input"></textarea>
    <b class="text-black">Masukan kata dengan pembatas koma</b>
    <hr>
    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-paper-plane"></i> Kirim</button>
  </div>
</div>
</div>

@endsection