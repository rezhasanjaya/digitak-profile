<style>
    /* .p{
        text-align: justify;;
        word-wrap: break-word;
    }

    .fill-color{
      background-color: #212529;
    }

    h5,p,b,a:link,a:visited{
      color: white;
    } */
    @media (min-width: 992px){
    .page-footer{
        position:absolute;
        right: 0;
        bottom: 0;
        left: 0;
    }
}
</style>
<hr style="height:20px" >
<br>
<div class="container-fluid fill-color">
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
          <hr>
          <ul class="list-unstyled d-flex">
            <li class="ms-4"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-4"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-4"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
          <h5 style="color: black">Sitemap</h5>
        <hr>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Beranda</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Tentang Kami</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Portofolio</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Kontak Kami</a></li>
         
        </ul>
      </div>

      <div class="col-4">
        <h5 style="color: black">Tentang Kami</h5>
        <hr>
        <h6><b>DIGITAL DATA STUDIO (DIGITAK)</b></h6>
            <p style="text-align: justify; color:">adalah sebuah team pengembang perangkat lunak yang fokus pada pengembangan Teknologi Informasi untuk menunjang aktifitas instansi atau perusahaan anda sejak 2014. Kami menciptakan solusi (aplikasi, web design & development dan digital marketing) yang lebih futuris dan pastinya kompatibel dengan kebutuhan perusahaan Anda.</p>
      </div>

      
    </div>

    <hr>
      <center><p>&copy; @php echo date("Y") @endphp Digitak Team, Inc. All rights reserved.</p> </center>   
  </div>
</div>
  </footer>