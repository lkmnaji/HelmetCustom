<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<style>
    h2{
        text-align: center;
    }
</style>
<body>
    
    <div class="container mt-3">
        <h2>Isi Data Produk</h2>
        <hr>
        <form action="{{ route('warna.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" >
                @error('nama_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="harga_produk">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga_produk" >
                @error('harga_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="warna">Pilih Warna</label>
                <select class="js-example-placeholder-multiple js-states form-control" name="warna[]" multiple="multiple">
                    @foreach ($daftar_warna as $warna)
                        <option value="{{$warna->id}}">{{$warna->warna}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="stok_produk">Nama Produk</label>
                <input type="text" class="form-control" id="stok_produk" name="stok_produk" >
                @error('stok_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="deskripsi_produk">Deskripsi Produk</label>
                <input type="textarea" class="form-control" id="deskripsi_produk" name="deskripsi_produk" >
                @error('deskripsi_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_produk_id">Status Produk</label>
                <select name="status_produk_id" id="status_produk_id" class="custom-select">
                    <option value="">
                        Choose Status
                    </option>
                    @foreach ($status_produk as $sp)
                        <option value="{{$sp->id}}" >
                            {{$sp->status_produk}}
                        </option>
                    @endforeach
                </select>
                @error('status_produk_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_produk_id">Status Produk</label>
                <select name="status_produk_id" id="status_produk_id" class="custom-select">
                    <option value="">
                        Choose Status
                    </option>
                    @foreach ($status_produk as $sp)
                        <option value="{{$sp->id}}" >
                            {{$sp->status_produk}}
                        </option>
                    @endforeach
                </select>
                @error('status_produk_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gallery_produk_id">Status Produk</label>
                <select name="gallery_produk_id" id="gallery_produk_id" class="custom-select">
                    <option value="">
                        Choose Status
                    </option>
                    @foreach ($gallery_produk as $sp)
                        <option value="{{$sp->id}}" >
                            {{$sp->$gallery_produk}}
                        </option>
                    @endforeach
                </select>
                @error('gallery_produk_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA SUDAH DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('warna.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(".js-example-placeholder-multiple").select2({
        placeholder: "Select a state"});
    </script>
</body>
</html>