<style>
@media (min-width: 768px) {
  .navbar-nav > li > a {
    padding-top: 20.5px;
    padding-bottom: 20.5px;
    line-height: 15px;
  }
}
.primary-nav {
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
 }

 .shrink {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        min-height: 55px !important;
    }

    .shrink .navbar-brand {
        height: 0 !important;
        line-height: 0 !important;
    }

    .shrink a {
        padding-top: 0 !important;
        padding-bottom: 0 !important;       
    }

    .active, .nav-link:hover {
      background-color: rgb(252,148,28);
      color: white;
    }

    
</style>
<nav id="primary-nav" class="navbar shadow-sm navbar-expand-lg navbar-dark fixed-top bg-dark primary-nav">
  <div class="container">
    <a href="/beranda"><img src="/images/digitak-logo.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('portfolio','portfolio/*') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portofolio</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak Kami</a>
        </li>
      </ul>       
    </div>
  </div>
</nav>


<script>
$(document).on("scroll", function(){

if ($(document).scrollTop() > 80){
    $(".primary-nav").addClass("shrink");
} else {
    $(".primary-nav").removeClass("shrink");
}

});
</script>
