<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit File Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    h2{
        text-align: center;
    }
</style>
<body>
    
    <div class="container mt-3">
        <h2>Edit Data Gallery Foto</h2>
        <hr>
        <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Gambar yang Akan Diubah</label><br>
                <img src="{{Storage::url('public/gallerys/').$gallery->foto_gallery}}" alt="foto_produk" style="width: 150px"><br>
                <label for="foto_gallery">Pilihan Gambar</label><br>
                <input type="file" id="foto_gallery" name="foto_gallery" value="{{ $gallery->foto_gallery }}">
                @error('foto_gallery')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan Gambar</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $gallery->keterangan }}">
                @error('keterangan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA MENGUBAH ?')">Upload</button>
        </form>
        <a href="{{route('gallery.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>