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

                    <form action="{{ route('perusahaan.update', $perusahaan->id_prshn) }}" method="post">
                        @csrf
                        @method('PUT')

                        <h6 class="heading-small text-muted mb-4">Detail Perusahaan</h6>
                        <input type="hidden" id="id_prshn" class="form-control" name="id_prshn" value="{{ old('id_prshn',$perusahaan->id_prshn) }}">

                        <input type="hidden" id="tahun_berdiri" class="form-control" name="tahun_berdiri" value="{{ old('tahun_berdiri',$perusahaan->tahun_berdiri) }}">

                        <input type="hidden" id="image" class="form-control" name="image" value="{{ old('image',$perusahaan->image) }}">
                        <input type="hidden" id="edited_by" class="form-control" name="edited_by" value="{{ Auth::user()->id }}">

                        <div class="pl-lg-4">
  
                        {{-- <input type="hidden" id="id_prshn" class="form-control" name="id_prshn" placeholder="id_prshn" value="{{ old('id_prshn',$perusahaan->id_prshn) }}"> --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nama_workshop">Nama Workshop</label>
                                        <input type="text" id="nama_workshop" class="form-control @error('nama_workshop') is-invalid @enderror" name="nama_workshop" placeholder="Nama Workshop" value="{{ old('nama_workshop',$perusahaan->nama_workshop) }}">
                                    </div>
                                </div>
                            </div>
                     
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="alamat">Alamat<span class="small text-danger"></span></label>
                                        <textarea type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat"> {{ old('alamat',$perusahaan->alamat) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="tahun_berdiri" class="form-control @error('tahun_berdiri') is-invalid @enderror" name="tahun_berdiri" value="{{ old('tahun_berdiri',$perusahaan->tahun_berdiri) }}">

                            <input type="hidden" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image',$perusahaan->image) }}">

                            <input type="hidden" id="edited_by" class="form-control" name="edited_by" value="{{ Auth::user()->id }}">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email_workshop">E-mail<span class="small text-danger"></span></label>
                                        <input type="email_workshop" id="email_workshop" class="form-control @error('email_workshop') is-invalid @enderror" name="email_workshop" placeholder="E-Mail" value="{{ old('email_workshop',$perusahaan->email_workshop) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="phone">Telepone<span class="small text-danger"></span></label>
                                        <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Telepone" value="{{ old('phone',$perusahaan->phone) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="whatsapp">WhatsApp</label>
                                        <input type="text" id="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" placeholder="WhatsApp" value="{{ old('whatsapp',$perusahaan->whatsapp) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="facebook">Facebook</label>
                                        <input type="text" id="facebook" class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="Facebook" value="{{ old('facebook',$perusahaan->facebook) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="instagram">Instagram</label>
                                        <input type="text" id="instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="Instagram" value="{{ old('instagram',$perusahaan->instagram) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="twitter">Twitter</label>
                                        <input type="text" id="twitter" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="Twitter" value="{{ old('twitter',$perusahaan->twitter) }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="latitude">Latitude<span class="small text-danger"></span></label>
                                        <input type="text" id="latitude" class="form-control @error('latitude') is-invalid @enderror" name="latitude" placeholder="Latitude" value="{{ old('latitude',$perusahaan->latitude) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="longitude">Longitude</label>
                                        <input type="text" id="longitude" class="form-control @error('longitude') is-invalid @enderror" name="longitude" placeholder="Longitude" value="{{ old('longitude',$perusahaan->longitude) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-save mr-2"></i>Simpan Perubahan</button>
                                    <a href="{{ route('perusahaan.index') }}" class="btn btn-default">Batal</a>
                                </div>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
