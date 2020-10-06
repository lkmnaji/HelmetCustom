<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk Admin</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>
</head>
<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Data Produk </h2>
                </div>
                <a href="{{route('produk.create')}}"><button class="btn btn-success">Tambah Data Produk</button></a><br>
                @if (session()->has('validasi'))
                        <div class="alert alert-primary">
                            {{ session()->get('validasi') }}
                        </div>
                @endif
                @if (Session::has('sukses'))
                        <div class="alert alert-primary">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                @endif
                <table class="table table-striped" id="table_id">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>Nama Produk</th>
                          <th>Pilihan Warna</th>
                          <th>Keterangan</th>
                          <th>Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @forelse ($data_produk as $dp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $dp->id }}</td>
                                <td>{{ $dp->nama_produk }}</td>
                                <td>
                                    @foreach ($dp->warna as $item)
                                        {{"$item->warna"}}
                                    @endforeach     
                                </td>
                                <td>{{ $dp->harga_produk }}</td>
                                <td>{{ $dp->stok_produk }}</td>
                                <td>{{ $dp->deskripsi_produk }}</td>
                                <td>Ini status produk</td>
                                <td>{{ $dp->gallery_produk->foto_gallery}}</td>
                                <td>
                                    <a href="{{route('produk.edit', $gp->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('produk.destroy', $gp->id)}}" method="post" class="d-inline">
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
                  <a href="#"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
</body>
</html>