<hr style="height:20px" >
<br>
<div class="container-fluid">
<div class="container">
  <footer>
    <div class="row text-black">
        <div class="col-4">
            <h5 style="color: black">Kontak Kami</h5>
            <hr>
            <h6><b>DIGITAL DATA STUDIO ({{strtoupper($beranda->nama_workshop) }})</b></h6>
                <b>Workshop</b> : {{$beranda->alamat}}
                <br>
                <br>
                <b>Phone</b>    : {{$beranda->phone}}
                <br>
                <b>WhatsApp</b> :{{$beranda->whatsapp}}</a>
                <br>
                <b>Email</b> : <a class="sosmed-link" href="mailto:{{$beranda->email_workshop}}" target="_blank">{{$beranda->email_workshop}}</a>
          </div>
      <div class="col-4 ">
        <h5 style="color: black">Ikuti Kami</h5>
          <hr class="garis">
          <ul class="list-unstyled d-flex">
            <li><a class="text-black sosmed-link" href="http://twitter.com/{{$beranda->twitter}}" target="_blank"><i class="fab fa-twitter fa-2xl"></i></a></li>
            <li class="ms-2"><a class="text-black sosmed-link" href="http://www.instagram.com/{{$beranda->instagram}}" target="_blank"><i class="fab fa-instagram fa-2xl"></i></a></li>
            <li class="ms-2"><a class="text-black sosmed-link" href="http://www.facebook.com/{{$beranda->facebook}}" target="_blank"><i class="fab fa-facebook fa-2xl"></i></a></li>
          </ul>
          <h5 style="color: black">Sitemap</h5>
        <hr>
        <ul>
          <li><a class="sosmed-link" href="{{ route('beranda') }}">Home</a></li>
          <li><a class="sosmed-link" href="{{ route('about') }}">Tentang Kami</a></li>
          <li><a class="sosmed-link" href="{{ route('portfolio') }}">Portofolio</a></li>
          <li><a class="sosmed-link" href="{{ route('contact') }}">Kontak Kami</a></li>
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
     <center><p>Copyright &copy; @php echo date("Y") @endphp <a class="sosmed-link" href="http://www.digitak.id/">Digitak Studio,</a> All right reserved.</p></center>
  </div>
</footer>

<style>
  .sosmed-link {
    color: orange;
    text-decoration: none;
  }

  .sosmed-link:hover {
    color: orange;
    font-weight: bold;
    text-decoration: none;
  }

  .text-black {
    color: black;
  }
</style>
  