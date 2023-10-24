<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title')
    </title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    @vite('resources/css/app.css')
</head>

<body>

    {{-- https://web2.istene.edu.pe/ --}}

    @include('partials.header')

    @yield('content')

    <a href="https://api.whatsapp.com/send?phone=51916443619&text=Hola,%20¿Qué%20tal%20estás?" target="_blank"
        class="fixed text-white flex justify-center items-center font-bold bottom-[2vh] right-[2vw] rounded-full bg-[#25d366] text-[42px] p-1 hover:opacity-75"
        style="z-index:1000 ">
        <i class='bx bxl-whatsapp'></i>
    </a>
    <span class="btn-scroll-top">
        <i class='bx bx-chevron-up'></i>
    </span>
    @include('partials.footer')

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    {{-- <script src="https://cdn.lordicon.com/libs/2.0/lordicon.min.js"></script> --}}

</body>

</html>
