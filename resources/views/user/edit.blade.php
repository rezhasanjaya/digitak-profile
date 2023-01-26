@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')

                <div class="row mb-3">
                  <div class="col-md-2 mt-1">
                    <label class="form-control-label">Nama Depan</label>
                  </div>
                  <div class="col-md-5 ms-auto">
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="{{ __('First Name') }}" autocomplete="off" value="{{ old('first_name') ?? $user->first_name }}">
                    @error('first_name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-2 mt-1">
                    <label class="form-control-label">Nama Belakang</label>
                  </div>
                  <div class="col-md-5 ms-auto">
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="{{ __('Last Name') }}" autocomplete="off" value="{{ old('last_name') ?? $user->last_name }}">
                    @error('last_name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-2 mt-1">
                    <label class="form-control-label">Email</label>
                  </div>
                  <div class="col-md-5 ms-auto">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ __('Email') }}" autocomplete="off" value="{{ old('email') ?? $user->email }}">
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-2 mt-1">
                    <label class="form-control-label">Password</label>
                  </div>
                  <div class="col-md-5 ms-auto">
                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('Password') }}" autocomplete="off">
                    @error('password')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-warning"><i class="fa-solid fa-save mr-2"></i>Simpan Perubahan</button>                
                <a href="{{ route('user.index') }}" class="btn btn-default">Batal</a>

            </form>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection

@push('notif')
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endpush
