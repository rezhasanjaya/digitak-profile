@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->
    <a href="{{ route('portofolio.create') }}">  <button type="button" class="btn btn-dark mb-3"><i class="fa-solid fa-pen-to-square mr-2"></i> Add Portofolio</button></a>
   
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show border-left-danger" role="alert">
          Failed to add new user, please check the field!
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
            <tr>  
                <th>Application Name</th>
                <th>Dibuat</th>
                <th>Category</th>
                <th>Year created</th>
                <th>Client</th>
                <th>Demo Link</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portofolio as $pt)
                <tr>
                    <td>{{ $pt->nama_aplikasi }}</td>
                    <td>{{ $pt->created_by }}</td>
                    <td>{{ $pt->kategori }}</td>
                    <td>{{ $pt->tahun_pembuatan }}</td>
                    <td>{{ $pt->klien }}</td>
                    <td><a href="{{url($pt->link_demo)}}" target="_blank">{{ $pt->link_demo}}</a></td>
                    <td>{{ date('H:i:s d-m-Y', strtotime($pt->created_at)); }}</td>
                    <td> 
                        <div class="d-flex">
                            <a href="{{ route('portofolio.show', $pt->id_portofolio) }}" class="btn btn-sm btn-success mr-2"><i class="fa-solid fa-pen-to-square mr-2"></i>Detail</a>
                            <a href="{{ route('portofolio.edit', $pt->id_portofolio) }}" class="btn btn-sm btn-warning mr-2"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit</a>
                            <form action="{{ route('portofolio.destroy', $pt->id_portofolio) }}" method="post">
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

    {{-- {{ $perusahaan->links() }} --}}

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
