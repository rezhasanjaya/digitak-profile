@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-2 mb-5">
    <h3 style="color:white;"><b><i class="fas fa-info-circle"></i> TENTANG KAMI</b></h3>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <img src="/img/logo/about-digitak.jpg" class="img-fluid" alt="logo">
    </div>
    <div class="col-lg-8">
      <div><strong>{{strtoupper($beranda->nama_workshop) }} STUDIO</strong></div><div><strong><em>The Innovation House Of Information Technology<br></em></strong><br></div><div>Perkembangan Teknologi Informasi (TI) yang semakin pesat memberikan dampak yang sangat luar biasa terhadap perubahan pola kerja manusia, tidak terkecuali dalam dunia usaha atau bisnis. Informasi kini menjadi salah satu faktor penting untuk menunjang aktifitas bisnis bagi kemajuan organisasi. Hadirnya teknologi digital menyebabkan kebutuhan akan informasi semakin meningkat, didorong dengan bermunculannya teknologi-teknologi baru yang bertujuan meningkatkan efektifitas dan efisiensi aktifitas kerja manusia.</div><div>Seiring kemajuan teknologi informasi pula internet berkembang sangat pesat. Teknologi web sebagai media pertukaran infromasi di internet menjadi media yang sangat efektif dalam pengembangan bisnis. Selain itu bermunculannya <em>gedget-gedget</em> baru yang dapat terhubung ke internet mendorong pengguna internet semakin hari semakin tinggi. Sebuah organisasi bisnis tentunya harus dapat mengambil peran dalam perkembangan kemajuan teknologi tersebut agar dapat menjadi nilai tambah serta dapat meningkatkan kinerja perusahaan.<br><br></div><div><strong>DIGITAL DATA STUDIO ({{strtoupper($beranda->nama_workshop) }}) </strong>merupakan sebuah team pengembang perangkat lunak yang fokus dalam pengembangan teknologi informasi untuk menunjang aktifitas bisnis anda. Kami fokus pada solusi yang bisa kami berikan untuk memberikan nilai tambah dan meningkatkan profit perusahaan.<br><br></div><div>Saat ini kami fokus bergerak dalam usaha jasa:<br><br></div><ul><li><strong>Web Design &amp; Development</strong></li><li><strong>Customized Application</strong></li><li><strong>Management Information System</strong></li><li><strong>IT-Support / Maintenance</strong></li></ul>
    </div>
  </div>
</div>
<br>
@endsection