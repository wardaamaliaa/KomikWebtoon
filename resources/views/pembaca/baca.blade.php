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
            <div class="col-12">
                <div class="card">
                    @foreach ($gambar as $item)
                    <img src="{{ asset($item->gambar_chapter) }}" alt="" class="card-img-top">
    
                    @endforeach
                </div>
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
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('template.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @foreach ($gambar as $item)
                    <img src="{{ asset($item->gambar_chapter) }}" alt="" class="card-img-top"  >
                    <div class="caption">{{ $item->judul_gambar }}</div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <button id="prevBtn" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Sebelumnya</button>
                    <button id="nextBtn" class="btn btn-primary">Selanjutnya <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
