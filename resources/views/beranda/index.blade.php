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

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <h3 style="color:white;"><b>We Are <span style="color: #f7941d"> {{strtoupper($beranda->nama_workshop) }}</span> The Innovation House of Information Technology     </b><a href="/files/CompanyProfileDigitak.pdf" target="_blank"><button type="button" class="btn btn-sm btn-danger btn-lg px-4 gap-3"><b>Download Here!</b></button></a></h3>
  </div>
</div>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <center>
      <img src="https://cdn-icons-png.flaticon.com/512/835/835369.png" width="20%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </center>
      <h3>DEFINE</h3>
      <p>Membantu anda dalam merumuskan masalah serta mendefinisikan kebutuhan solusi atas permasalahan yang sedang dihadapi.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <center>
        <img src="https://cdn-icons-png.flaticon.com/512/684/684831.png" width="20%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </center>

      <h3>DESIGN</h3>
      <p>Menyusun rancangan teknis atas kebutuhan solusi yang akan diambil untuk menyelesaiakan permasalahan yang sedang dihadapi.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <center>
        <img src="https://cdn-icons-png.flaticon.com/512/711/711284.png" width="20%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </center>

      <h3>DEVELOP</h3>
      <p>Menerjemahkan rancangan teknis menjadi sebuah produk yang siap digunakan untuk menyelesaikan permasalahan yang sedang dihadapi.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <br class="featurette-divider">
  <br>
  <div class="row featurette">
      <h2 class="featurette-heading mb-5"><b> <span style="color: #f7941d">//</span> PORTOFOLIO TERBARU KAMI</b></h2>
      <div class="col-md-12">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($portofolio as $pt)
          <div class="col">
            <div class="card bg-dark shadow-sm">
              <img src="/images/{{ $pt->image }}" class="img-fluid">
              <div class="card-body">
                <h4 style="color: white"><b>{{ $pt->nama_aplikasi }}</b></h4>
                <p style="color:#f7941d" class="card-text">{{ $pt->kategori }} - {{ $pt->tahun_pembuatan }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                  <small class="text-muted"><button type="button" class="btn btn-sm btn-outline-light"><i class="fa-solid fa-circle-info"></i> </i>Selengkapnya</button></small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
  </div>

  <br class="featurette-divider">
  <br>
  <div class="row row-cols-sm-2 featurette">
      <h2 class="featurette-heading mb-5"><b> <span style="color: #f7941d">//</span> TEKNOLOGI KAMI</b></h2>
      <div class="col-md-12 mb-5 g-3">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/AngularJS-large.png" width="10%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Webysther_20160423_-_Elephpant.svg" width="5%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/MySQL_textlogo.svg"  width="5%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" width="3.4%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://cdn.freebiesupply.com/logos/large/2x/codeigniter-logo-png-transparent.png" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg" width="9%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://assets.stickpng.com/images/62a74f85223343fbc2207d05.png" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/1200px-Node.js_logo.svg.png" width="7%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbspnbsp
        <img src="https://www.yiiframework.com/image/design/logo/yii3_full_for_light.png" width="10%"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

      </div>
  </div>

  {{-- END SECTION --}}
</div>
<hr style="color:#f7941d;border-width:10px" >
<br>
<br>
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