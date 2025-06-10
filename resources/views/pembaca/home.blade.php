{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    @include('template.navbar')
    <div class="container mt-5">
        <div class="row">
            @foreach ($komik as $item)
            <div class="col-3">
                <div class="card">
                    <img src="{{ $item->cover_komik }}" alt="" class="card-img-top" style="height: 350px">
                    <h2 class="card-title">{{ $item->judul_komik }}</h2>
                    <h5 class="card-text">{{ $item->author }}</h5>
                    {{-- <div class="card-body">
                        <a href="{{ route('detailPembaca', $item->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <title>Home</title>
    <style>
        /* CSS */
        .background-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: linear-gradient(135deg, #ff9900, #ff6f61);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
        }

        .image-hover {
            transition: transform 0.3s ease;
        }

        .image-container:hover .image-hover {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            width: 100%;
            height: 100%;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-container:hover .image-overlay {
            opacity: 1;
        }

        
    </style>
</head>
<body>
    <img src="{{ asset('img/cantik.jpg') }}" alt="Background" class="background-img">
    @include('template.navbar')
    <div class="container mt-5">
        <h1 class="text-center mb-5" style="font-family: 'Times New Roman', Times, serif;">Wadaa Comic Collection</h1>

        {{-- slide --}}
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/toon.jpg') }}" class="d-block mx-auto" style="height: 350px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/waduh.jpg') }}" class="d-block mx-auto" style="height: 350px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/cantik.jpg') }}" class="d-block mx-auto" style="height: 350px" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        {{-- card --}}
        <div class="row mt-5">
            @foreach ($komik as $item)
            <div class="col-3">
                <div class="card">
                    <div class="image-container">
                        <img src="{{ $item->cover_komik }}" alt="" class="card-img-top image-hover" style="height: 350px">
                        <div class="image-overlay">
                            <h3 class="image-title">{{ $item->judul_komik }}</h3>
                            <p class="image-author"><i class="fas fa-user" style="margin-right: 10px"></i>{{ $item->author }}</p>
                            <p class="image-sinopsis">{{ $item->sinopsis }}</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{ $item->judul_komik }}</h2> 
                        <!-- Konten lainnya -->
                        <a href="{{ route('detailPembaca', $item->id) }}" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <footer>
            <div class="footer-icons">
                <p>© Webtoon Wardaa Semoga nilai nya 100 AAMMIINNN. All Rights Reserved.</p>
                <!-- Tautan ke akun Instagram -->
                <a href="https://www.instagram.com/wardafolklore?igsh=cXU5bzkybWpsZzRw" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.instagram.com/wardafolklore?igsh=cXU5bzkybWpsZzRw" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </footer>
    </div>
   
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>

