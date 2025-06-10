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
                <form action="{{ route('postLogin') }}" method="POST" class="form-group">
                    @csrf
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control">

                    @if (Session::has('notifikasi'))
                    <p style="color: red">{{ Session::get('notifikasi') }}</p>
                    @endif
                    <button class="btn btn-success mt-3">Login</button>
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
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <img src="{{ asset('img/cantik.jpg') }}" alt="Background" class="background-img" style="width: 100%; height: 100%; object-fit: cover;">
    @include('template.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                {{-- <img src="{{ asset('img/login.png') }}" alt="Gambar Login" class="card-img-top" style="max-width: 100%;"> --}}
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/cantik.jpg') }}" alt="Gambar Login" class="card-img-top">
                        <div class="col mt-3"></div>
                        <h5 class="card-title" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Selamat Datang!</h5>
                        <p class="card-text">Silakan masukkan username dan password Anda untuk login.</p>
                        <form action="{{ route('postLogin') }}" method="POST" class="form-group">
                            @csrf
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">

                            @if (Session::has('notifikasi'))
                            <p style="color: red">{{ Session::get('notifikasi') }}</p>
                            @endif
                            <button class="btn btn-success mt-3">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
