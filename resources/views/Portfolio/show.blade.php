@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-4 mb-3">
    <h3 style="color:white;"><b>PORTOFOLIO DETAIL</b></h3>
  </div>
</div>

<div class="container">
  <a href="{{ route('portfolio') }}" class="btn btn-warning"><i class="fa-solid fa-angle-double-left"></i> List Portofolio</a>
  <div class="row mt-3">
    <div class="col-lg-6 mt-4">
      <img src="/img/portfolio/{{ $portfolio->image }}" class="img-fluid" alt="logo">
    </div>
    <div class="col-lg-6 mt-4">
      <h3>{{ $portfolio->nama_aplikasi }}</h3>
      <hr>
      <article>{!! $portfolio->keterangan !!}</article>
      <hr>
      <h5>Detail</h5>
      <table class="table table-hover table-striped table-bordered">
        <tbody>
        <tr>
        <th width:"40%" class="text-secondary"><i class="fa fa-users"></i> Klien</th>
        <td>{{ $portfolio->klien }}</td>
        </tr>
        <tr>
        <th class="text-secondary"><i class="fa fa-tags"></i> Kategori</th>
        <td><span class="badge rounded-pill bg-primary">{{ $portfolio->kategori }}</span></td>
        </tr>
        <tr>
        <th class="text-secondary"><i class="fa fa-calendar"></i> Tahun</th>
        <td>{{ $portfolio->tahun_pembuatan }}</td>
        </tr>
        <tr>
        <th class="text-secondary"><i class="fa fa-link"></i> Link Demo</th>
        <td><a class="type-link" href="http://{{ $portfolio->link_demo }}" target="_blank">http://{{ $portfolio->link_demo }}</a></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  {{-- <br class="featurette-divider">
  <div class="row featurette">
    <h2 class="featurette-heading mt-0 mb-5"><b> <span style="color: #f7941d">//</span> PORTOFOLIO LAINNYA</b></h2>
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="row row-cols-2 row-cols-sm-6 row-cols-md-3 g-4">
        PORTOFOLIO LAINNYA
      </div>
    </div>
  </div> --}}
</div>
<br>

<style>
  .type-link {
    color: orange;
    text-decoration: none;
  }

  .type-link:hover {
    color: orange;
    font-weight: bold;
    text-decoration: none;
  }

  .text-black {
    color: black;
  }
</style>

@endsection