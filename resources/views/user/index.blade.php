@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show border-left-danger" role="alert">
          Gagal untuk menambah user baru, harap cek setiap kolom!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>           
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
        <div class="alert alert-warning alert-dismissible fade show border-left-warning" role="alert">
            {{ session('message2') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#addModal">
      <i class="fa-solid fa-plus mr-2"></i>
      Tambah User
    </button>

    <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users->skip(1) as $user)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning mr-2"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this?')"><i class="fa-solid fa-trash-can mr-2"></i>Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

    <!-- End of Main Content -->

    <!-- Script goes here -->

    <style>
      input:required:invalid {
        color: #5A6268;
      }
    </style>

    <!-- End script -->

    <!-- Modal -->
    <div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form action="{{ route('user.store') }}" method="post">
              @csrf

              <div class="row mb-3">
                <div class="col-md-4 mt-1">
                  <label class="form-control-label">Nama Depan</label>
                </div>
                <div class="col-md-8 ms-auto">
                  <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="{{ __('Nama Depan') }}" autocomplete="off">
                  @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4 mt-1">
                  <label class="form-control-label">Nama Belakang</label>
                </div>
                <div class="col-md-8 ms-auto">
                  <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="{{ __('Nama Belakang') }}" autocomplete="off">
                  @error('last_name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-md-4 mt-1">
                  <label class="form-control-label">Email</label>
                </div>
                <div class="col-md-8 ms-auto">
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ __('Email') }}" autocomplete="off">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4 mt-1">
                  <label class="form-control-label">Password</label>
                </div>
                <div class="col-md-9 ms-auto">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('Password') }}" autocomplete="off">
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa-solid fa-xmark mr-2"></i>Tutup</button>
                <button type="submit" class="btn btn-warning"><i class="fa-solid fa-floppy-disk mr-2"></i>Simpan</button>
              </div>

            </form>
          </div>          
        </div>
      </div>
    </div>
    <!-- End Modal -->

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
