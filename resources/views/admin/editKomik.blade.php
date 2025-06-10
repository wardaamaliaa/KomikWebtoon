{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    @include('template.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <h2 class="text-center mt-3">Edit Komik</h2>
                <form action="{{ route('postEditKomik', $komik->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="judul_komik">Judul Komik</label>
                    <input type="text" required value="{{ $komik->judul_komik }}" name="judul_komik" class="form-control">
                    <label for="cover_komik">Cover Komik</label>
                    <input type="file" accept="image/*" required name="cover_komik" class="form-control">
                    <label for="sinopsis">Sinopsis</label>
                    <input type="text" required value="{{ $komik->sinopsis }}" name="sinopsis" class="form-control">
                    <label for="author">Author</label>
                    <input type="text" required value="{{ $komik->author }}" name="author" class="form-control">
                    <label for="tahun">Tahun</label>
                    <input type="date" required value="{{ $komik->tahun }}" name="tahun" class="form-control">
                    <label for="genre">Genre</label>
                    <input type="text" required value="{{ $komik->genre }}" name="genre" class="form-control">
                    
                    <button class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <!-- Load Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Edit Komik</title>
</head>
<body>
    <img src="{{ asset('img/cantik.jpg') }}" alt="Background" class="background-img" style="width: 100%; height: 100%; object-fit: cover;">

    @include('template.navbar')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="text-center mt-3"><i class="fas fa-user-pen"></i>Edit Komik</h2>
                    <form action="{{ route('postEditKomik', $komik->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        <label for="judul_komik" class="form-label"><i class="fas fa-pen-nib"></i> Judul Komik</label>
                        <input type="text" required value="{{ $komik->judul_komik }}" name="judul_komik" class="form-control">
                    </div>
                        <div class="mb-3">
                        <label for="cover_komik" class="form-label"><i class="fas fa-image"></i> Cover Komik</label>
                        <input type="file" accept="image/*" required name="cover_komik" class="form-control">
                    </div>
                        <div class="mb-3">
                        <label for="sinopsis" class="form-label"><i class="fas fa-align-left"></i> Sinopsis</label>
                        <input type="text" required value="{{ $komik->sinopsis }}" name="sinopsis" class="form-control">
                    </div>
                        <div class="mb-3">
                        <label for="author" class="form-label"><i class="fas fa-user"></i> Author</label>
                        <input type="text" required value="{{ $komik->author }}" name="author" class="form-control">
                    </div>
                        <div class="mb-3">
                        <label for="tahun" class="form-label"><i class="fas fa-calendar-alt"></i> Tahun</label>
                        <input type="date" required value="{{ $komik->tahun }}" name="tahun" class="form-control">
                    </div>
                        <div class="mb-3">
                        <label for="genre" class="form-label"><i class="fas fa-bookmark"></i> Genre</label>
                        <input type="text" required value="{{ $komik->genre }}" name="genre" class="form-control">
                    </div>            
                        <button class="btn btn-success mt-3"><i class="fas fa-check"></i> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
