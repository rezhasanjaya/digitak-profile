<hr style="height:20px" >
<br>
<div class="container-fluid">
<div class="container">
  <footer>
    <div class="row">
        <div class="col-4">
            <h5 style="color: black">Kontak Kami</h5>
            <hr>
            <h6><b>DIGITAL DATA STUDIO ({{strtoupper($beranda->nama_workshop) }})</b></h6>
                <b>Workshop</b> : {{$beranda->alamat}}
                <br>
                <br>
                <b>Phone</b>    : {{$beranda->phone}}
                <br>
                <b>WhatsApp</b> : {{$beranda->whatsapp}}
                <br>
                <b>Email</b> : <span style="color: #f7941d">{{$beranda->email_workshop}}</span>
          </div>
      <div class="col-4 ">
        <h5 style="color: black">Ikuti Kami</h5>
          <hr class="garis">
          <ul class="list-unstyled d-flex">
            <li><a class="text-muted" href="#"><i class="fab fa-twitter fa-2xl"></i></a></li>
            <li class="ms-2"><a class="text-muted" href="#"><i class="fab fa-instagram fa-2xl"></i></a></li>
            <li class="ms-2"><a class="text-muted" href="#"><i class="fab fa-facebook fa-2xl"></i></a></li>
          </ul>
          <h5 style="color: black">Sitemap</h5>
        <hr>
        <ul class="sosmed flex-column">
          <li class="sosmed-item mb-2"><a class="sosmed-link" href="{{ route('beranda') }}">Home</a></li>
          <li class="sosmed-item mb-2"><a class="sosmed-link" href="{{ route('about') }}">Tentang Kami</a></li>
          <li class="sosmed-item mb-2"><a class="sosmed-link" href="{{ route('portfolio') }}">Portofolio</a></li>
          <li class="sosmed-item mb-2"><a class="sosmed-link" href="{{ route('contact') }}">Kontak Kami</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5 style="color: black">Tentang Kami</h5>
        <hr>
        <h6><b>DIGITAL DATA STUDIO ({{strtoupper($beranda->nama_workshop) }})</b></h6>
            <p style="text-align: justify; color:">adalah sebuah team pengembang perangkat lunak yang fokus pada pengembangan Teknologi Informasi untuk menunjang aktifitas instansi atau perusahaan anda sejak 2014. Kami menciptakan solusi (aplikasi, web design & development dan digital marketing) yang lebih futuris dan pastinya kompatibel dengan kebutuhan perusahaan Anda.</p>
      </div> 
    </div>
    <hr>
     <center><p>Copyright &copy; @php echo date("Y") @endphp <a style="text-decoration: none;" href="http://www.digitak.id/">Digitak Studio,</a> All right reserved.</p></center>
  </div>
</footer>

<style> 
  .sosmed-link {
  text-decoration: none;
  color: gray;
  /* color: #f7941d */
  }
</style>
  