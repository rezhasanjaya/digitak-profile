@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-4 mb-3">
    <h3 style="color:white;"><b>PORTOFOLIO</b></h3>
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">
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
      </div>
  </div>
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