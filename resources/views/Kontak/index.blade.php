@extends('layouts.main')

@section('container')
<style>
  p{
      color: black;
    }
</style>
<div class="container mt-5">
<div class="row">

  <div class="col-lg-4">
    <h1>Kontak Kami</h1>
    <hr>
      <div><strong><i class="fas fa-home"></i> Address:</strong><br>Jl. Gn. Batu Dalam Komplek Citra Asri Permai No.C-26, Pasirkaliki, Kec. Cimahi Utara Kota Cimahi - Jawa Barat 40514</div>
      <div><br><strong><i class="fas fa-building"></i> Workshop:<br></strong>Jl. Gn. Batu Dalam Komplek Citra Asri Permai No.C-26, Pasirkaliki, Kec. Cimahi Utara Kota Cimahi - Jawa Barat 40514</div><br>
      <div><strong><i class="fas fa-phone"></i> Phone:<br></strong>(+62 22) 2028 0625</div><br>
      <div><strong><i class="fas fa-whatsapp"></i> Whatsapp:<br></strong>+62 821 2707 8478</div><br>
      <div><strong><i class="fas fa-envelope"></i> Email:<br></strong>info@digitak.id</div><br>
    </div>
  <div class="col-lg-8">
    <h1>Kontak Form</h1>
    <hr>
    <input class="form-control mb-3" type="text" placeholder="Nama Lengkap *">
    <input class="form-control mb-3" type="text" placeholder="Email *">
    <input class="form-control mb-3" type="text" placeholder="Telepon">
    <input class="form-control mb-3" type="text" placeholder="Masukkan pesan anda">
    <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Default input"></textarea>
    <b style="color: black">Masukan kata dengan pembatas koma</b>
    <hr>
    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-paper-plane"></i> Kirim</button>
  </div>
</div>
</div>


  
@endsection