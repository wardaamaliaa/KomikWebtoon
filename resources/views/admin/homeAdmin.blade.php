{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable.js') }}"></script>
    <script src="{{ asset('js/datatable-bootstrap5.js') }}"></script>
    <title>Document</title>
</head>
<body>
    @include('template.navbar')
    <div class="container mt-5">
        <a href="{{ route('tambahKomik') }}" class="btn btn-success">Tambah</a>
        <div class="row">
            @if (Session::has('notifikasi'))
                    <p>{{ Session::get('notifikasi') }}</p>
                    @endif
                            <div class="container mt-5">
                                <table class="table table-striped" id="example">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>judul_komik</th>
                                            <th>Author</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($komik as $item)
                                            <tr>
                                                <td><img src="{{ asset($item->cover_komik) }}" alt="" class="card-img-top" style="width: 100px"></td>
                                                <td>{{ $item->judul_komik }}</td>
                                                <td>{{ $item->author }}</td>
                                                <td>{{ $item->tahun }}</td>
                                                <td>
                                                    <a href="{{ route('editKomik', $item->id) }}" class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('hapusKomik', $item->id) }}" class="btn btn-warning" onclick="return confirm('Are U Sure ????')">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        
    <script>new DataTable('#example');</script>
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
    <link rel="stylesheet" href="{{ asset('css/dasboor.css') }}"> 
    <!-- Load library Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable.js') }}"></script>
    <script src="{{ asset('js/datatable-bootstrap5.js') }}"></script>
    <title>Dashboard</title>
    <style>
        .table-header {
            background-color: #f8f9fa; /* Warna latar belakang header tabel */
            color: #333; /* Warna teks */
        }
        .aksi-buttons .btn {
            color: #fff; /* Warna teks tombol aksi */
        }
    </style>
</head>
<body>
    <img src="{{ asset('img/cantik.jpg') }}" alt="Background" class="background-img" style="width: 100%; height: 100%; object-fit: cover;">

    @include('template.navbar')

    <div class="container mt-5">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-5" style="font-family: 'Times New Roman', Times, serif;" ><i class="fa-solid fa-book-open-reader"></i> Wadaa Comic Collection</h2>
                        @if (Session::has('notifikasi'))
                            <p class="notifikasi text-center">{{ Session::get('notifikasi') }}</p>  
                        @endif
                        <a href="{{ route('tambahKomik') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah</a>
                        
                        <div class="table-responsive">
                            <table class="table table-striped" id="example">
                                <thead class="table-header">
                                    <tr>
                                        <th><i class="fas fa-image"></i> Gambar</th>
                                        <th><i class="fas fa-heading"></i> Judul Komik</th>
                                        <th><i class="fas fa-user"></i> Author</th>
                                        <th><i class="fas fa-calendar"></i> Tahun</th>
                                        <th><i class="fas fa-tasks"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($komik as $item)
                                        <tr>
                                            <td><img src="{{ asset($item->cover_komik) }}" alt="Gambar Komik" class="gambar-komik" style="width: 100px"></td>
                                            <td>{{ $item->judul_komik }}</td>
                                            <td>{{ $item->author }}</td>
                                            <td>{{ $item->tahun }}</td>
                                            <td class="aksi-buttons">
                                                <a href="{{ route('editKomik', $item->id) }}" class="btn btn-secondary" style="background-color: #006A4E" ><i class="fas fa-edit" ></i> Edit</a> 
                                                <a href="{{ route('hapusKomik', $item->id) }}" class="btn btn-secondary" style="background-color: #2E8B57" onclick="return confirm('Are U Sure ????')"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
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

    <script>
        new DataTable('#example');
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
