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
            <div class="col-3">
                <div class="card">
            <img src="{{ asset($komik->cover_komik) }}" alt="" class="card-img-top">
        </div>
    </div>
    <div class="col-9">
        <div class="card border-0" style="text-align: justify">
            <h2 class="card-title">{{ $komik->judul_komik }}</h2>
            <h5 class="card-title">{{ $komik->author }}</h5>
            <p class="card-text">{{ $komik->sinopsis }}</p>
        </div>
    </div>
 </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Judul Chapter</th>
                    <th>Chapter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chapter as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{  $item->nomor_chapter}}</td>
                    <td>{{  $item->judul_chapter }}</td>
                    <td><a href="{{ route('baca',  $item->id) }}" class="btn btn-primary">Baca</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
 </div>
</div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
 --}}


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baca.css') }}"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <img src="" alt="Background" class="background-img" style="background-color: rgb(92, 167, 120)">
    @include('template.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $komik->judul_komik }}</h5>
                        <p class="card-text"><i class="fas fa-user" style="margin-right: 10px"></i>{{ $komik->author }}</p>
                        <p class="card-text">{{ $komik->sinopsis }}</p>
                    </div>
                    <img src="{{ asset($komik->cover_komik) }}" alt="" class="card-img-top">
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa-solid fa-eye"></i></h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><i class="fas fa-list-ol"></i> Nomor</th>
                                        <th><i class="fa-solid fa-paperclip"></i> Judul Chapter</th>
                                        <th><i class="fas fa-book"></i> Chapter</th>
                                        <th><i class="fas fa-cogs"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chapter as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nomor_chapter }}</td>
                                            <td>{{ $item->judul_chapter }}</td>
                                            <td><a href="{{ route('baca', $item->id) }}" class="btn btn-success"><i class="fas fa-book-open"></i> Baca</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
