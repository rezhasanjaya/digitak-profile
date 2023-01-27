<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a href="/beranda"><img src="/images/digilogo.png" width="45"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" href="/beranda">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }}" href="/portofolio">Portofolio</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Kontak Kami</a>
        </li>
      </ul>       
    </div>
  </div>
</nav>