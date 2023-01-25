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
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar avatar font-weight-bold" style="font-size: 60px; height: 180px; width: 180px; background-color: #E2A814" data-initial="{{ Auth::user()->first_name[0] }}"></figure>
                </div>
                <div class="card-body">

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold"></h5>
                                Nama File : {{ $pt->logo }}
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning">Profile </h6>
                </div> --}}

                <div class="card-body">
                    <form action="{{ route('perusahaan.store') }}" method="POST">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Detail Perusahaan</h6>
                        <div class="pl-lg-4">
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nama_workshop">Nama Workshop</label>
                                        <input type="text" id="nama_workshop" class="form-control" name="nama_workshop" placeholder="Nama Workshop" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="tahun_berdiri">Tahun Berdiri<span class="small text-danger"></span></label>
                                            <input type="text" id="tahun_berdiri" class="form-control" name="tahun_berdiri" placeholder="Tahun Berdiri" value="2014">
                                    </div>
                                </div>
                            </div>

                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="alamat">Alamat<span class="small text-danger"></span></label>
                                        <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">E-mail<span class="small text-danger"></span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="E-Mail" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="phone">Phone<span class="small text-danger"></span></label>
                                            <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="whatsapp">WhatsApp</label>
                                        <input type="text" id="whatsapp" class="form-control" name="whatsapp" placeholder="WhatsApp" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="facebook">Facebook</label>
                                        <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="instagram">Instagram</label>
                                        <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Instagram" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="twitter">Twitter</label>
                                        <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Twitter" value="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                            <label class="form-control-label" for="latitude">Latitude<span class="small text-danger"></span></label>
                                            <input type="text" id="latitude" class="form-control" name="latitude" placeholder="Latitude" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="longitude">Longitude</label>
                                        <input type="text" id="longitude" class="form-control" name="longitude" placeholder="Longitude" value="">
                                    </div>
                                </div>
                            </div>

                            <br>
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
