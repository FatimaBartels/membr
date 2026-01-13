<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body> 
    <header>
            @include('partials.header')
        </header> 

        @yield('hero')

    <main class="container">
        @yield('content')   
    </main>  
    
     <footer>
            @include('partials.footer')
        </footer>
</body>
</html>