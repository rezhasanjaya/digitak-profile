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

      <div class="col-lg-6 order-lg-2">

          <div class="card shadow mb-4">
              <div class="card-body"> 
                <h5 class="heading-small text-muted mb-4">Gambar Project</h5>
                <form action="{{ route('portofolio.update', $portofolio->id_portofolio) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="text-center">
                              <h5 class="font-weight-bold"></h5>
                              {{-- <img src="/images/{{ $portofolio->image }}" class="img-fluid"> --}}
                              <img src="/images/{{ $portofolio->image }}" class="img-preview img-fluid mb-3">
                              <input class="form-control @error('image') is-invalid @enderror" type="file" accept=".jpg,.jpeg,.png" id="image" name="image" onchange="previewImage()" value=""> 
                              <br>
                              <div>*file type .jpg .jpeg .png | max size 2 mb</div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </div>

      <div class="col-lg-6 order-lg-1">

          <div class="card shadow mb-4">

              <div class="card-body">
                 
                <h5 class="heading-small text-muted mb-4">Tambah Data</h5>
                <div class="pl-lg-4">
                   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="nama_aplikasi">Nama Aplikasi</label>
                                <input type="text" id="nama_aplikasi" class="form-control @error('nama_aplikasi') is-invalid @enderror" name="nama_aplikasi" placeholder="Nama Aplikasi" value="{{ $portofolio->nama_aplikasi }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                    <label class="form-control-label" for="tahun_pembuatan">Tahun Pembuatan<span class="small text-danger"></span></label>
                                    <input type="text" id="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror" name="tahun_pembuatan" placeholder="Tahun Pembuatan" value="{{ $portofolio->tahun_pembuatan }}">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="created_by" class="form-control" name="created_by" value="{{ Auth::user()->id }}">

                    <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="kategori">Kategori<span class="small text-danger"></span></label>
                                <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                                <option value="" selected disabled>Pilih Kategori</option> 
                                <option value="Application" {{ $portofolio->kategori == 'Application'? 'selected': ''}} >Application</option>
                                <option value="Website" {{ $portofolio->kategori == 'Website'? 'selected': ''}} >Website</option>
                                </select>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="klien">Klien<span class="small text-danger"></span></label>
                            <input type="text" id="klien" class="form-control @error('klien') is-invalid @enderror" name="klien" placeholder="Klien" value="{{ $portofolio->klien }}">
                          </div>
                      </div>
                  </div>

                    <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group">
                              <label class="form-control-label" for="link_demo">Link Demo<span class="small text-danger"></span></label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">{{ __('https://www.') }}</div>
                                </div>
                                <input type="text" class="form-control @error('link_demo') is-invalid @enderror" name="link_demo" id="link_demo" placeholder="Link Demo" value="{{ $portofolio->link_demo }}">
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group focused">
                          <label class="form-control-label" for="keterangan">Keterangan<span class="small text-danger"></span></label>   
                          <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan') }}">
                          <trix-editor input="keterangan"></trix-editor>
                        </div>
                    </div>
                </div>
                    <hr>

                <!-- Button -->
                <div class="pl-lg-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col">
                          <button type="submit" class="btn btn-warning"><i class="fa-solid fa-save mr-2"></i>Simpan</button>
                        </div>
                    </div>
                </div>             
            </form>

              </div>

          </div>

      </div>

  </div>

  <style>
    input:required:invalid {
      color: #9F80A4;
    }
    select:required:invalid {
      color: #9F80A4;
    }
    option[value=""][disabled] {
      display: none;
    }
    option {
      color: #000000;
    }
  </style>

  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });

    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(OFREvent) {
      imgPreview.src = OFREvent.target.result;
    }
  }
  </script>

@endsection
