@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

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

        {{-- <div class="col-lg-4 order-lg-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <h5 class="heading-small text-muted mb-4">Preview Project</h5>
              <div class="card-profile-image">
                <img src="../img/bruce-mars.jpg" alt="{(( $name }}" class="img-preview img-fluid">
                <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="text-center">
                              <h5 class="font-weight-bold"></h5>
                              <input class="form-control" type="file" accept=".jpg,.jfif,.png" name="image" id="image" onchange="previewImage()">
                          <div>*file type .jpg .jfif .png | max size 2 mb</div>
                          </div>
                      </div>
                  </div>
            </div>
            </div>

        </div>
        </div> --}}

        <div class="col-lg">
          
            <div class="card shadow mb-4">

                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning">Profile </h6>
                </div> --}}

                <div class="card-body">
                        <h5 class="heading-small text-muted mb-4">Tambah Data</h5>
                        <div class="pl-lg-4">
                          <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf   
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nama_aplikasi">Nama Aplikasi</label>
                                        <input type="text" id="nama_aplikasi" class="form-control" name="nama_aplikasi" placeholder="Nama Aplikasi" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="tahun_pembuatan">Tahun Dibuat<span class="small text-danger"></span></label>
                                            <input type="text" id="tahun_pembuatan" class="form-control" name="tahun_pembuatan" placeholder="Tahun Pembuatan" value="">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="created_by" class="form-control" name="created_by" value="1">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kategori">Kategori<span class="small text-danger"></span></label>
                                        <select class="form-control" id="kategori" name="kategori">
                                        <option selected>Pilih Kategori</option> 
                                        <option value="Application">Application</option>
                                        <option value="Website">Website</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klien">Klien<span class="small text-danger"></span></label>
                                        <input type="text" id="klien" class="form-control" name="klien" placeholder="Klien" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="link_demo">Link Demo<span class="small text-danger"></span></label>
                                        <input type="text" id="link_demo" class="form-control" name="link_demo" placeholder="Link Demo" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="link_demo">Preview Project<span class="small text-danger"></span></label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" accept=".jpg,.jpeg,.png" id="image" name="image" onchange="previewImage()">
                                <div>*file type .jpg .jfif .png | max size 2 mb</div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mb-3">
                              <label for="image" class="form-label">Select Image</label>
                              <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image') is-invalid @enderror" type="file" accept=".jpg,.jpeg,.png" id="image" name="image" onchange="previewImage()">
                                <div>*file type .jpg .jfif .png | max size 2 mb</div>
                              @error('image')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div> --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="keterangan">Keterangan<span class="small text-danger"></span></label>
                                            <textarea id="keterangan" style="height: 200px" class="form-control" name="keterangan" placeholder="Keterangan" value=""></textarea>
                                    </div>
                                </div>
                            </div>

                        <!-- Button -->
                        <div class="pl-lg-0 mt-3 mb-3">
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-warning">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>

                </div>

            </div>

        </div>

    </div>

    <script>
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
