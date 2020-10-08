@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Table Metode Transaksi')

{{-- @section('admin','active') --}}

@section('HelmetCustom.content.Admin')
<body>
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>
<div class="content-wrapper">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Data Metode Transaksi</h2>
                </div>
                <a href="{{route('metodetransaksi.create')}}"><button class="btn btn-success">Tambah Metode Transaksi</button></a>
                @if (session()->has('validasi'))
                        <div class="alert alert-success">
                            {{ session()->get('validasi') }}
                        </div>
                @endif
                @if (Session::has('sukses'))
                        <div class="alert alert-success">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                @endif
                <table class="table table-striped" id="table_id">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>Metode Transaksi</th>
                          <th>Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @forelse ($method_transaksi as $mt)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $mt->id }}</td>
                                <td>{{ $mt->metode_transaksi }}</td>
                                <td>
                                    <a href="{{route('metodetransaksi.edit', $mt->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('metodetransaksi.destroy', $mt->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table>
                  <a href="{{url('/AdminHelmetCustom/DashboardAdmin')}}"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
            </div>
        </div>
    </div>
</div>
@endsection