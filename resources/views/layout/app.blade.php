<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Formamos profesionales proactivos, disciplinados, con conciencia ambiental y responsabilidad social." />
    <title> @yield('title') </title>
    <meta name="author" content="IESPP JFSC Huamachuco">
    <meta http-equiv="Content-Language" content="es-pe" />
    <meta name="keywords"
        content="Instituto de Educación Superior Pedagógico Público José Faustino Sánchez Carrión, iespp jfsc huamachuco, pedagógico huamachuco">
    <link rel="canonical" href="http://isppjfschco.edu.pe/" />
    <meta property="og:locale" content="es_PE" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Instituto de Educación Superior Pedagógico Público José Faustino Sánchez Carrión - Huamachuco">
    <meta property="og:description"
        content="Formamos profesionales proactivos, disciplinados, con conciencia ambiental y responsabilidad social.">
    <meta property="og:image" content="http://isppjfschco.edu.pe/others/logo.png">
    <meta property="og:url" content="http://isppjfschco.edu.pe/">
    <meta property="og:site_name" content="Iespp Jsfc - Huamachuco" />
    <link rel="shortcut icon" href="{{ asset('images/others/logo.png') }}" type="image/png">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
 
</head>

<body>
    {{-- header --}}
    @include('partials.header')

    {{-- main --}}
    <main>
        @yield('content')
    </main>

    {{-- floating icons Scroll Top and WhatsApp --}}
    <a href="https://api.whatsapp.com/send?phone=51975544835&text=Hola,%20necesito%20información%20sobre%20las%20carreras%20que%20ofrece%20el%20Iespp%20JFSC%20de%20Huamachuco."
        target="_blank"
        class="fixed text-white flex justify-center items-center font-bold bottom-[2vh] right-[20px] rounded-full bg-[#25d366] text-[42px] p-1 hover:opacity-75"
        style="z-index:1000 ">
        <i class='bx bxl-whatsapp'></i>
    </a>
    <span class="btn-scroll-top">
        <i class='bx bx-chevron-up'></i>
    </span>

    {{-- footer --}}
    @include('partials.footer')

    <script type="module" src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
</body>

</html>