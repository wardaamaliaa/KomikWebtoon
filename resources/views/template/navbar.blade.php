{{-- <nav class="nav nav-bar bg-dark">
    <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
    <a href="{{ route('login') }}" class="nav-link text-white">Login</a>
</nav>
 --}}

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 50px">
        <div class="ml-auto">
            <a href="{{ route('home') }}" class="navbar-brand mr-2">Home</a>
            <a href="{{ route('login') }}" class="navbar-brand">Login</a>
        </div>
    </div>
</nav>
