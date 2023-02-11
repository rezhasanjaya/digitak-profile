@extends('layouts.main')

@section('container')

<div class="bg-warning">
  <div class="container bg-warning py-2 mb-3">
    <h3 style="color:white;"><b><i class="fas fa-archive"></i> PORTOFOLIO</b></h3>
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">
        @foreach ($portofolio as $pt)
        <div class="col">
          <div class="card ">
            <div class="fall-item fall-effect">
              <img class="center-cropped" src="/img/portfolio/{{ $pt->image }}">
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
  <div class="mb-5">
    @if ($portofolio == null)
      {{ $portofolio->links() }}
    @endif
  </div>
</div>

@endsection