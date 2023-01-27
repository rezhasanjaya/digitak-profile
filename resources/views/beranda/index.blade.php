@extends('layouts.main')

@section('container')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="/images/gambar1.jpg"></svg>

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>WEB DESIGN & DEVELOPMENT</h1>
          <p>Manfaatkan keunggulan internet untuk menjangkau publisitas yang lebih luas. Website dapat menjadi representasi dari perusahaan atau bisnis Anda. Ini adalah rumah online Anda, dimana informasi/promosi dari perusahaan atau bisnis Anda lebih cepat diterima oleh masyarakat.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="/images/gambar2.jpg"></svg>

      <div class="container">
        <div class="carousel-caption">
          <h1>MANAGEMENT INFORMATION SYSTEM</h1>
          <p>Manfaatkan keunggulan internet untuk menjangkau publisitas yang lebih luas. Website dapat menjadi representasi dari perusahaan atau bisnis Anda. Ini adalah rumah online Anda, dimana informasi/promosi dari perusahaan atau bisnis Anda lebih cepat diterima oleh masyarakat.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="/images/gambar3.jpg"></svg>

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>MANAGEMENT INFORMATION SYSTEM</h1>
          <p>Maksimumkan Sumber Daya yang ada di perusahaan Anda dengan aplikasi Managemen Informasi System untuk menjawab kompleksitas informasi dari data yang ada. Sehingga perusahaan lebih fleksibel dalam menciptakan rencana dan melakukan evaluasi kinerja.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  
</style>
@endsection