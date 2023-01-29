@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-4 mb-3">
    <h3 style="color:white;"><b>PORTOFOLIO</b></h3>
  </div>
</div>

<div class="container marketing">
  <br class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-1">
    </div>
      <div class="col-md-10">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($portofolio as $pt)
          <div class="col">
            <div class="card ">
              <img src="/images/{{ $pt->image }}" class="img-fluid">
              <div class="card-body shadow">
                <h4 style="color:#292b2c"><b>{{ $pt->nama_aplikasi }}</b></h4>
                <p style="color:#f7941d" class="card-text">{{ $pt->kategori }} - {{ $pt->tahun_pembuatan }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                  <a href="{{ route('portfolio.show', $pt->id_portofolio) }}" class="btn btn-sm btn-success mr-2"><i class="fa-solid fa-pen-to-square mr-2"></i>Detail</a>
                 <a href="{{ route('portfolio') }}"class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-circle-info"></i> Selengkapnya</button></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
  </div>
  <br>
  <br>
  <br>
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