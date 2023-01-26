@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Edit Portofolio') }}</h1>

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

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-body"> 
                    <form action="{{ route('portofolio.update', $portofolio->id_portofolio) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold"></h5>
                                <img src="/images/{{ $portofolio->image }}" width="400px">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" accept=".jpg,.jpeg,.png" id="image" name="image" onchange="previewImage()" value="{{ $portofolio->image }}"> 
                                <br>
                            <div>*file type .jpg .jpeg .png | max size 2 mb</div>
                            <div>*lakukan re-entry gambar apabila melukan edit</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning">Profile </h6>
                </div> --}}

                <div class="card-body">
                   
                    <input type="hidden" id="created_by" class="form-control" name="created_by" value="{{ $portofolio->created_by }}">
                    <input type="hidden" id="id_portofolio" class="form-control" name="id_portofolio" value="{{ $portofolio->id_portofolio }}">


                        <h5 class="heading-small text-muted mb-4">Edit Data</h5>
                        <div class="pl-lg-4">
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nama_aplikasi">Nama Aplikasi</label>
                                        <input type="text" id="nama_aplikasi" class="form-control" name="nama_aplikasi" placeholder="Nama Workshop" value="{{ $portofolio->nama_aplikasi }}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="tahun_pembuatan">Tahun Pembuatan<span class="small text-danger"></span></label>
                                            <input type="text" id="tahun_pembuatan" class="form-control" name="tahun_pembuatan" placeholder="Tahun Pembuatan" value="{{ $portofolio->tahun_pembuatan }}">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klien">Klien<span class="small text-danger"></span></label>
                                        <input type="text" id="klien" class="form-control" name="klien" placeholder="klien" value="{{ $portofolio->klien }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="created_by">Dipost oleh<span class="small text-danger"></span></label>
                                        <input type="text" id="created_by" class="form-control" name="created_by" value="{{ $portofolio->created_by }}" disabled>
                                        <input type="hidden" id="created_by" class="form-control" name="created_by" value="{{ $portofolio->created_by }}">
                                    </div>
                                </div>
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
                                    <div class="form-group">
                                        <label class="form-control-label" for="kategori">Kategori<span class="small text-danger"></span></label>
                                        <select class="form-control" id="kategori" name="kategori">
                                        <option selected>Pilih Kategori</option> 
                                        <option value="Application" {{ $portofolio->kategori == 'Application'? 'selected': ''}} >Application</option>
                                        <option value="Website" {{ $portofolio->kategori == 'Website'? 'selected': ''}} >Website</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                

                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="link_demo">Link Demo</label>
                                        <input type="text" id="link_demo" class="form-control" name="link_demo" placeholder="link_demo" value="{{ $portofolio->link_demo }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="keterangan">Keterengan<span class="small text-danger"></span></label>
                                            <textarea id="keterangan" style="height: 200px" class="form-control" name="keterangan" placeholder="Keterangan">{{ $portofolio->keterangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!-- Button -->
                        <div class="pl-lg-0 mt-3 mb-3">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-save mr-2"></i>Simpan Perubahan</button>
                                        <a href="{{ route('portofolio.index') }}" class="btn btn-default">Batal</a>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        
                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
