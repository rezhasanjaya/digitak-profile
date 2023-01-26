@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile Perusahaan') }}</h1>

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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar avatar font-weight-bold" style="font-size: 60px; height: 180px; width: 180px; background-color: #E2A814" data-initial="{{ Auth::user()->first_name[0] }}"></figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <input class="form-control @error('logo') is-invalid @enderror" type="file" accept=".jpg,.jpeg,.png" id="logo" name="logo" value="{{ old('logo',$perusahaan->logo) }} onchange="previewLogo()">
                            <div>*file type .jpg .jpeg .png | max size 2 mb</div> --}}
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

                    <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <h6 class="heading-small text-muted mb-4">Detail Perusahaan</h6>
                        <input type="hidden" id="id" class="form-control" name="id" value="{{ old('id',$perusahaan->id) }}">
                        <input type="hidden" id="tahun_berdiri" class="form-control" name="tahun_berdiri" value="{{ old('tahun_berdiri',$perusahaan->tahun_berdiri) }}">
                        <input type="hidden" id="logo" class="form-control" name="logo" value="{{ old('logo',$perusahaan->logo) }}">
                        <input type="hidden" id="edited_by" class="form-control" name="edited_by" value="{{ old('edited_by',$perusahaan->edited_by) }}">

                        <div class="pl-lg-4">
  
                            <input type="hidden" id="id" class="form-control" name="id" placeholder="ID" value="{{ old('id',$perusahaan->id) }}">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nama_workshop">Nama Workshop</label>
                                        <input type="text" id="nama_workshop" class="form-control" name="nama_workshop" placeholder="Nama Workshop" value="{{ old('nama_workshop',$perusahaan->nama_workshop) }}">
                                    </div>
                                </div>
                            </div>
                     
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="alamat">Alamat<span class="small text-danger"></span></label>
                                        <input type="text" id="alamat" class="form-control" name="alamat" placeholder="E-Mail" value="{{ old('alamat',$perusahaan->alamat) }}">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="tahun_berdiri" class="form-control" name="tahun_berdiri" value="{{ old('tahun_berdiri',$perusahaan->tahun_berdiri) }}">

                            <input type="hidden" id="logo" class="form-control" name="logo" value="{{ old('logo',$perusahaan->logo) }}">

                            <input type="hidden" id="edited_by" class="form-control" name="edited_by" value="{{ Auth::user()->id }}">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">E-mail<span class="small text-danger"></span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email',$perusahaan->email) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="phone">Phone<span class="small text-danger"></span></label>
                                        <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone" value="{{ old('phone',$perusahaan->phone) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="whatsapp">WhatsApp</label>
                                        <input type="text" id="whatsapp" class="form-control" name="whatsapp" placeholder="WhatsApp" value="{{ old('whatsapp',$perusahaan->whatsapp) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="facebook">Facebook</label>
                                        <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook" value="{{ old('facebook',$perusahaan->facebook) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="instagram">Instagram</label>
                                        <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Instagram" value="{{ old('instagram',$perusahaan->instagram) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="twitter">Twitter</label>
                                        <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Twitter" value="{{ old('twitter',$perusahaan->twitter) }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="latitude">Latitude<span class="small text-danger"></span></label>
                                        <input type="text" id="latitude" class="form-control" name="latitude" placeholder="Latitude" value="{{ old('latitude',$perusahaan->latitude) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="longitude">Longitude</label>
                                        <input type="text" id="longitude" class="form-control" name="longitude" placeholder="Longitude" value="{{ old('longitude',$perusahaan->longitude) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
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
@endsection
