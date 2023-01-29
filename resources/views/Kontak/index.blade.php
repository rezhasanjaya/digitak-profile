@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-4">
    <h3 style="color:white;"><b>KONTAK KAMI</b></h3>
  </div>
</div>


<div id="map" class="mb-5"></div>

<div class="container">
<div class="row">
  <div class="col-lg-4">
    <h1>Kontak Kami</h1>
    <hr>
      <div><strong><i class="fas fa-home"></i> Address:</strong><br>-</div>
      <?php 
      $str = $beranda->whatsapp;
      $str2 = $beranda->phone;
      $whatsapp = str_replace(' ', '', $str); 
      $phone = str_replace(' ', '', $str); 
      ?>
      <div><br><strong><i class="fas fa-building"></i> Workshop:<br></strong>{{ $beranda->alamat }}</div><br>
      <div><strong><i class="fas fa-phone"></i> Phone:<br></strong><a class="sosmed-link" href="tel:{{$phone}}">{{ $beranda->phone }}</a></div><br>
      <div><strong><i class="fab fa-whatsapp"></i> Whatsapp:<br></strong><a class="sosmed-link" href="https://wa.me/{{$whatsapp}}" target="_blank">{{ $beranda->whatsapp }}</a></div><br>
      <div><strong><i class="fas fa-envelope"></i> Email:<br></strong><a class="sosmed-link" href="mailto:{{ $beranda->whatsapp }}" target="_blank">{{ $beranda->email_workshop }}</a></div><br>
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

<style>
  #map {
    height: 400px;
  }
</style>

<script>
  const map = L.map('map').setView([{{ $beranda->latitude }}, {{ $beranda->longitude }}], 14);

  const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  const marker = L.marker([{{ $beranda->latitude }}, {{ $beranda->longitude }}]).addTo(map)
    .bindPopup('<b>PT. Metanouva Informatika</b><br />Digitak').openPopup();
</script>

@endsection