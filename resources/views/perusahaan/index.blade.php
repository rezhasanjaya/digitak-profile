@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->
    {{-- <a href="{{ route('perusahaan.create') }}">  <button type="button" class="btn btn-warning mb-3"><i class="fa-solid fa-pen-to-square mr-2"></i> Edit Data</button></a> --}}
   
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
  
    <table class="table table-bordered table-stripped">
        <thead>
            <tr>  
                <th>Waktu Diubah</th>
                <th>Workshop</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>WhatsApp</th>
                <th>Telepon</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>File Image</th>
                <th>Diubah Oleh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perusahaan as $pt)
            <div class="d-flex mb-3">
                <a href="{{ route('perusahaan.edit', $pt->id_prshn) }}" class="btn btn-warning mr-2"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit Data</a>
            </div>
            @break
            @endforeach
            
            @foreach ($data as $pt)
                <tr>
                    <td>{{ $pt->waktu_update }}</td>
                    <td>{{ $pt->nama_workshop }}</td>
                    <td>{{ $pt->alamat }}</td>
                    <td>{{ $pt->email_workshop }}</td>
                    <td>{{ $pt->whatsapp }}</td>
                    <td>{{ $pt->phone }}</td>
                    <td>{{ $pt->facebook }}</td>
                    <td>{{ $pt->twitter }}</td>
                    <td>{{ $pt->image }}</td>
                    <td>{{ $pt->first_name }} {{ $pt->last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $perusahaan->links() }}

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
