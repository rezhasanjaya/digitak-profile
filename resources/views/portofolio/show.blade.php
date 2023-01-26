@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Detail Portofolio') }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show border-left-danger" role="alert">
          <div class="row">
            <div class="col-md-12">
              <ul class="pl-4 my-2">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
            <div class="col-md-0">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="line-height: inherit!important; vertical-align: middle;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>            
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show border-left-success" role="alert">
            {{ session('message') }}
            <button typ e="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('message2'))
        <div class="alert alert-danger alert-dismissible fade show border-left-danger" role="alert">
            {{ session('message2') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
                      
    <div class="row">

        <div class="col-lg-6 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-body mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <img src="/images/{{ $portofolio->image }}" width="400px">
                                <h5 class="font-weight-bold"></h5>
                                <br>
                                Nama File : {{ $portofolio->image }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 order-lg-1">

            <div class="card shadow mb-4">

                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning">Profile </h6>
                </div> --}}

                <div class="card-body">
                    
                        <h6 class="heading-small text-muted mb-4">Detail Portofolio</h6>
                        <div class="pl-lg-4">
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nama_workshop">Nama Portofolio</label>
                                        <input type="text" id="nama_workshop" class="form-control" name="nama_workshop" placeholder="Nama Workshop" value="{{ $portofolio->nama_aplikasi }}" disabled>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="tahun_berdiri">Tahun Pembuatan<span class="small text-danger"></span></label>
                                            <input type="text" id="tahun_berdiri" class="form-control" name="tahun_berdiri" placeholder="Tahun Berdiri" value="{{ $portofolio->tahun_pembuatan }}" disabled>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klien">Klien<span class="small text-danger"></span></label>
                                        <input type="text" id="klien" class="form-control" name="klien" placeholder="klien" value="{{ $portofolio->klien }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="created_by">Dipost oleh<span class="small text-danger"></span></label>
                                        <input type="created_by" id="created_by" class="form-control" name="created_by" value="{{ $portofolio->created_by }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="created_at">Dibuat Pada<span class="small text-danger"></span></label>
                                            <input type="text" id="created_at" class="form-control" name="created_at" value="{{ $portofolio->created_at }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="updated_at">Diupdate Pada</label>
                                        <input type="text" id="updated_at" class="form-control" name="updated_at" placeholder="updated_at" value="{{ $portofolio->updated_at }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="keterangan">Keterengan<span class="small text-danger"></span></label>
                                            <textarea id="keterangan" style="height: 200px" class="form-control" name="keterangan" placeholder="Keterangan" disabled>{{ $portofolio->keterangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('portofolio.index') }}" class="btn btn-danger"><i class="fa-solid fa-angle-double-left mr-2"></i>Kembali</a>
                                    <a onclick="location.href='http://www.{{ $portofolio->link_demo }}'" class="btn btn-primary" target="_blank"><i class="fa-solid fa-play mr-2"></i>Demo</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
