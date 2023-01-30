@extends('layouts.main')

@section('container')

<div id="myCarousel" class="carousel slide mb-0" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="/images/gambar1.png"></svg>

      <div class="container">
        <div class="carousel-caption text-start">
          <b><h1>WEB DESIGN & DEVELOPMENT</h1>
          <p>Manfaatkan keunggulan internet untuk menjangkau publisitas yang lebih luas. Website dapat menjadi representasi dari perusahaan atau bisnis Anda. Ini adalah rumah online Anda, dimana informasi/promosi dari perusahaan atau bisnis Anda lebih cepat diterima oleh masyarakat.</p></b>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="/images/gambar2.png"></svg>

      <div class="container">
        <div class="carousel-caption">
          <b><h1>MANAGEMENT INFORMATION SYSTEM</h1>
          <p>Manfaatkan keunggulan internet untuk menjangkau publisitas yang lebih luas. Website dapat menjadi representasi dari perusahaan atau bisnis Anda. Ini adalah rumah online Anda, dimana informasi/promosi dari perusahaan atau bisnis Anda lebih cepat diterima oleh masyarakat.</p></b>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="/images/gambar3.png"></svg>

      <div class="container">
        <div class="carousel-caption text-end">
          <b><h1>MANAGEMENT INFORMATION SYSTEM</h1>
          <p>Maksimumkan Sumber Daya yang ada di perusahaan Anda dengan aplikasi Managemen Informasi System untuk menjawab kompleksitas informasi dari data yang ada. Sehingga perusahaan lebih fleksibel dalam menciptakan rencana dan melakukan evaluasi kinerja.</p></b>
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

<div class="bg-dark text-secondary py-4 text-center mb-5">
  <h3 style="color:white;"><b>We Are <span style="color: #f7941d"> {{strtoupper($beranda->nama_workshop) }}</span> The Innovation House of Information Technology     </b><a href="/files/CompanyProfileDigitak.pdf" target="_blank"><button type="button" class="btn btn-sm btn-warning btn-lg px-4 gap-3"><b>Download Here!</b></button></a></h3>
</div>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    
    <div class="col-lg-4">
      <i class="fa-solid fa-cubes fa-3x"></i><br><br>
      <b><h5>DEFINE</h5></b>
      <p>Membantu anda dalam merumuskan masalah serta mendefinisikan kebutuhan solusi atas permasalahan yang sedang dihadapi.</p>
    </div><!-- /.col-lg-4 -->
    
    <div class="col-lg-4">
      <i class="fa-regular fa-pen-to-square fa-3x"></i><br><br>
        <b><h5>DESIGN</h5></b>
      <p>Menyusun rancangan teknis atas kebutuhan solusi yang akan diambil untuk menyelesaiakan permasalahan yang sedang dihadapi.</p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <i class="fa-solid fa-code fa-3x"></i><br><br>
        <b><h5>DEVELOP</h5></b>
      <p>Menerjemahkan rancangan teknis menjadi sebuah produk yang siap digunakan untuk menyelesaikan permasalahan yang sedang dihadapi.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <!-- START THE FEATURETTES -->
  
  <br class="featurette-divider">
  <div class="row featurette">
      <h2 class="featurette-heading mt-0"><b> <span style="color: #f7941d">//</span> PORTOFOLIO TERBARU KAMI</b></h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @if ($portofolio != null)
        @foreach ($portofolio as $pt)
        <div class="col">
          <div class="card ">
            <div class="fall-item fall-effect">
              <img class="center-cropped" src="/images/{{ $pt->image }}">
              <div class="mask">
                  <h4>{{ $pt->nama_aplikasi }}</h4>
                  <p>{{ $pt->kategori }} - {{ $pt->tahun_pembuatan }}</p>
                  <a href="{{ route('portfolio.show', $pt->id_portofolio) }}"class="btn btn-sm btn-success"><i class="fa-solid fa-circle-info"></i> Selengkapnya</button></a>
              </div>
          </div>
          </div>
        </div>
        @endforeach
        @else
        <h4 class="featurette-heading mt-0 mb-3"><b> <span style="color: gray"></span> PORTOFOLIO TIDAK ADA</b></h4>
        @endif        
      </div>
  </div>

  <div class="row featurette">
      <h2 class="featurette-heading mt-5"><b> <span style="color: #f7941d">//</span> TEKNOLOGI KAMI</b></h2>
      <div class="col-md-12 mb-3 g-3">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/AngularJS-large.png" width="10%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Webysther_20160423_-_Elephpant.svg" width="5%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/MySQL_textlogo.svg"  width="5%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" width="3.4%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" width="10%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://cdn.freebiesupply.com/logos/large/2x/codeigniter-logo-png-transparent.png" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg" width="9%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Vue.png" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1024px-React-icon.svg.png" width="3%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/1200px-Node.js_logo.svg.png" width="7%"> &nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="https://www.yiiframework.com/image/design/logo/yii3_full_for_light.png" width="10%"> &nbsp&nbsp&nbsp&nbsp&nbsp
      </div>
  </div>

  {{-- END SECTION --}}
</div>

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