@extends('layout.app')

@section('title', 'Instituto de Educación Superior Pedagógico Público - José Faustino Sánchez Carrión - Huamachuco')

@section('content')
    {{-- main slider --}}
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-no-repeat bg-cover relative"
                style="background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.1), rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(images/slider/Bienvenida.jpg)">
                <div class="render absolute inset-0  flex flex-col items-start gap-8 pb-[32px] h-full justify-end">
                    <div class="flex flex-col backdrop-blur-md bg-[#3477db]/30  rounded-xl py-2 px-4  bottom-0">
                        <span class="text-white text-4xl sm:text-6xl xl:text-7xl font-[Roboto-Bold]  leading-6">
                            Bienvenidos al IESPP
                        </span>
                        <small class="mt-4 text-white text-2xl sm:text-4xl xl:text-5xl font-[Roboto-Thin] ">"Jośe
                            Faustino Sánchez Carrión"</small>

                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-no-repeat bg-cover relative"
                style="background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.1), rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(images/slider/Ingles.jpg)">
                <div class="render absolute inset-0  flex flex-col items-start gap-8 pb-[32px] h-full justify-end ">
                    <span
                        class="backdrop-blur-md bg-[#3477db]/30 text-white text-4xl sm:text-6xl xl:text-7xl font-[Roboto-Black] rounded-xl p-2 hidden lg:block ">
                        Idiomas, Especialidad Inglés
                    </span>

                    <span
                        class="backdrop-blur-md bg-[#3477db]/30 text-white text-4xl sm:text-6xl xl:text-7xl font-[Roboto-Black] rounded-xl p-2 lg:hidden">
                        Especialidad Inglés
                    </span>

                    <a href="{{ route('ingles') }}"
                        class="bg-[#3477DB] text-white cursor-pointer  outline-none font-bold rounded-lg
                     py-2.5 text-center no-underline  px-12  mb-2 transition-all duration-200 ease-in-out hover:opacity-90">Descubre
                        más<s></s></a>
                </div>
            </div>

            <div class="swiper-slide bg-no-repeat bg-cover relative"
                style="background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.1), rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(images/slider/Inicial.jpg)">
                <div class="render absolute inset-0  flex flex-col items-start gap-8 pb-[32px] h-full justify-end">
                    <span
                        class="backdrop-blur-md bg-[#3477db]/30 text-white text-4xl sm:text-6xl xl:text-7xl font-[Roboto-Black] rounded-xl p-2 hidden lg:block ">
                        Educación Inicial
                    </span>

                    <a href="{{ route('educacioninicial') }}"
                        class="bg-[#3477DB] text-white cursor-pointer  outline-none font-bold rounded-lg
                     py-2.5 text-center no-underline  px-12  mb-2 transition-all duration-200 ease-in-out hover:opacity-90">Descubre
                        más<s></s></a>
                </div>
            </div>
            <div class="swiper-slide bg-no-repeat bg-cover relative"
                style="background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.1), rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(images/slider/Comunicacion.jpg)">
                <div class="render absolute inset-0  flex flex-col items-start gap-8 pb-[32px] h-full justify-end">
                    <span
                        class="backdrop-blur-md bg-[#3477db]/30 text-white text-4xl sm:text-6xl xl:text-7xl font-[Roboto-Black] rounded-xl p-2 hidden lg:block ">
                        Educación Secundaria, Especialidad Comunicación
                    </span>

                    <span
                        class="backdrop-blur-md bg-[#3477db]/30 text-white text-4xl sm:text-6xl xl:text-7xl font-[Roboto-Black] rounded-xl p-2 lg:hidden">
                        Especialidad Comunicación
                    </span>

                    <a href="{{ route('comunicacion') }}"
                        class="bg-[#3477DB] text-white cursor-pointer  outline-none font-bold rounded-lg
                     py-2.5 text-center no-underline  px-12  mb-2 transition-all duration-200 ease-in-out hover:opacity-90">Descubre
                        más<s></s></a>
                </div>
            </div>
        </div>
    </div>

    {{-- study programs --}}
    <section class="py-24">
        <article class="flex flex-col justify-center text-center pb-12 gap-3">
            <h2 class="title">¡Contamos con las siguientes <span class="text-[#3477db]">programas de
                    estudio!</span></h2>
            <span class="text-xl">Al culminar recibe tu T&iacute;tulo a Nombre de la Naci&oacute;n</span>
        </article>

        <article class="render grid gap-8 sm:grid-cols-2 lg:grid-cols-3 md:gap-8  2xl:gap-12 ">
            <x-card>
                <x-slot name="image">{{ asset('images/home/carreras/inicial/carrera_inicial.webp') }}</x-slot>
                <x-slot name="altText">Educación Inicial</x-slot>
                <x-slot name="title">Educación Inicial</x-slot>
                <x-slot name="content">
                    Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                    niñas en las primeras etapas de su educación, promoviendo un entorno de cuidado y estimulación adecuado.
                </x-slot>
                <x-button type="secondary" ruta="{{ route('educacioninicial') }}">Ver Detalles</x-button>
            </x-card>

            <x-card>
                <x-slot name="image">{{ asset('images/home/carreras/ingles/carrera_ingles.webp') }}</x-slot>
                <x-slot name="altText">Idiomas, especialidad: Ingles</x-slot>
                <x-slot name="title">Idiomas: Especialidad Inglés</x-slot>
                <x-slot name="content">
                    Formar profesionales en el ámbito del idiomas inglés que contribuyan a mejorar las competencias
                    lingüísticas y la comunicación en inglés en diversos contextos y situaciones.
                </x-slot>
                <x-button type="secondary" ruta="#">Ver Detalles</x-button>

            </x-card>

            <x-card>
                <x-slot name="image">{{ asset('images/home/carreras/comunicacion/carrera_comunicacion.webp') }}</x-slot>
                <x-slot name="altText">Educación Secundaria, Especialidad: Comunicación</x-slot>
                <x-slot name="title">Educación Secundaria: Especialidad Comunicación</x-slot>
                <x-slot name="content">
                    Formar docentes de Comunicación con conocimientos pedagógicos y especializados, que
                    trabajen de forma colaborativa.
                </x-slot>
                <x-button type="secondary" ruta="#">Ver Detalles</x-button>

            </x-card>
        </article>
    </section>

    {{-- why study with us --}}
    <article class="bg-[#3477DB] py-24 text-center">
        <h4 class="title text-white text-center"> ¿Por qué estudiar con
            <span class="bg-white text-[#3477db] py-1 px-3">nosotros?</span>
        </h4>

        <section class="render grid gap-2 md:gap-4 grid-cols-2 lg:grid-cols-4 pt-16 md:w-[80%] lg:w-full 2xl:gap-6 mx-auto">
            <div class="bg-[#ebebeb] p-2 flex flex-col gap-2 text-[#4377db] rounded-lg justify-evenly">
                <span class="text-xl font-bold sm:text-2xl  overflow-hidden">Infraestructura</span>
                <p class="mt-4">Infraestructura de calidad respalda la formación y éxito educativo.</p>
                <i class='bx bx-building text-8xl'></i>
            </div>

            <div class="bg-[#ebebeb] p-2 flex flex-col gap-2 text-[#4377db] rounded-lg justify-evenly">
                <span class="text-xl font-bold sm:text-2xl ">Prestigio</span>
                <p class="mt-4">Con más de 41 años formando profesionales altamente competentes </p>
                <i class='bx bx-medal text-8xl'></i>
            </div>

            <div class="bg-[#ebebeb] p-2 flex flex-col gap-2 text-[#4377db] rounded-lg justify-evenly">
                <span class="text-xl font-bold sm:text-2xl ">Docentes</span>
                <p class="mt-4">Experimentados docentes en pedagogía y materias para una educación de calidad</p>
                <i class='bx bxs-graduation text-8xl'></i>
            </div>

            <div class="bg-[#ebebeb] p-2 flex flex-col gap-2 text-[#4377db] rounded-lg overflow-hidden justify-evenly">
                <span class="text-xl font-bold sm:text-2xl ">Empleabilidad</span>
                <p class="mt-4">Oportunidades de empleo en educación: maestro, instructor, coordinador o otros roles
                    relacionados a la
                    pedagogía.</p>
                <i class='bx bxs-user-plus text-8xl'></i>
            </div>

        </section>
    </article>

    {{-- welcome from the director --}}
    <section class="render my-24 flex flex-col gap-12 lg:flex-row lg:h-[400px]">
        <picture class="w-full lg:w-6/12 h-full ">
            <img class="h-full w-full rounded-lg" src="{{ asset('images/home/directora.png') }}"
                alt="Directora del IESPP JFSC">
        </picture>

        <div class="w-full lg:w-6/12 h-auto flex flex-col gap-4 mx-auto items-center md:items-start">
            <h2 class="title">Bienvenida de la Directora</h2>
            <p>
                Hay que resaltar que la educación es formar al ser humano para el cambio permanente, capacitándolo
                para adaptarse a las nuevas realidades, resolver problemas y generar ideas innovadoras.<br>
                Nuevamente estamos en la etapa académica más importante del pedagógico de Huamachuco, desde la Dirección del
                instituto queremos hacerles llegar nuestra cordial bienvenida y expresarles que haremos lo posible para
                que vuestra estadía en esta unidad académica no sólo les dé un título pedagógico sino que además les
                deje un grato recuerdo y un sentimiento de pertenencia.
                Las necesidades educativas del país, requieren de profesionales altamente comprometidos con la educación,
                nuestra misión
                y responsabilidad es que ustedes lo sean.
            </p>
            <x-button type="secondary" ruta="{{ route('presentacion') }}">Ver más</x-button>
        </div>
    </section>

    {{-- counter study programs and agreements --}}
    <article class="bg-[#3477DB] py-20 text-white ">
        <section class="render flex flex-col gap-10 mx-auto w-full md:flex-row xl:px-56 lg:gap-20">
            <div
                class="carreras-count flex flex-col gap-2  justify-center items-center shadow-[#D9D9D9] p-4 rounded-lg
            shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]">
                <i class='bx bxs-graduation text-8xl'></i>
                <span class="text-6xl font-['Roboto-Bold'] " data-valor="3">0</span>
                <small class="text-2xl md:text-xl lg:text-2xl font-bold">PROGRAMAS DE ESTUDIO</small>
            </div>

            <div
                class="carreras-count flex flex-col gap-2 justify-center items-center shadow-[#D9D9D9] p-4 rounded-lg
        shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]"">
                <i class='bx bx-edit text-8xl'></i>
                <span class="text-6xl font-['Roboto-Bold']" data-valor="30">0</span>
                <small class="text-2xl md:text-xl lg:text-2xl font-bold">CONVENIOS</small>
            </div>
        </section>
    </article>

    {{-- section of hero with video --}}
    <div class="w-full h-auto overflow-hidden relative">
        <video autoplay muted loop>
            <source src="{{ asset('images/home/campus_video.webm') }}" type="video/mp4">
        </video>

        <div class="absolute inset-0" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3));">
            <div class="render absolute inset-0 flex flex-col text-white justify-center items-center text-center h-full ">
                <p class="bottom-0 text-xl sm:text-4xl  lg:text-6xl font-[Roboto-Black] lg:px-[10vw] leading-normal">
                    Nuestro campus es mucho más que un lugar
                    de aprendizaje; </p>
                <span class="font-[Roboto-Thin] font-bold text-md sm:text-2xl lg:text-4xl text-center lg:px-[5vw] mt-8 ">es
                    un espacio donde la inspiración se
                    combina con la innovación para crear oportunidades sin límites.</span>
            </div>
        </div>
    </div>

    {{-- successful expeiences --}}
    <section class="render py-28">
        <div class="flex flex-col text-center py-4 justify-center z-50 ">
            <h2 class="text-4xl font-bold">Experiencias <span class="text-[#3477DB]">Exitosas</span></h2>
            <span class="text-xl mt-4 font-black">¡Mira lo que dicen de nosotros!</span>
        </div>

        <article class="swiper-exp-cont pt-16">
            <div class="experience myExperience">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <section class="flex gap-12 items-start w-[65%] md:w-[70%] flex-col md:flex-row h-auto">
                            <div class="w-full md:w-6/12">
                                <img class="w-full h-auto" src="{{ asset('images/home/experiences/experience1.webp') }}"
                                    alt="Experiencia Uno">
                            </div>

                            <div class="flex flex-col w-full md:w-6/12">
                                <div class="flex flex-col gap-2 md:mt-8">
                                    <h2 class="text-2xl font-bold">Luz Altamirano </h2>
                                    <span class="text-xl font-['Roboto-Thin'] font-bold text-[#3477db]">Idioma
                                        Inglés</span>
                                </div>

                                <p class="mt-6 ppx-4">
                                    Mi experiencia en Educación en Inglés en el Iespp Jfsc de Huamachuco ha sido
                                    enriquecedora. Profesores apasionados y oportunidades de práctica me prepararon para mi
                                    futura carrera de docente.
                                </p>
                            </div>
                        </section>
                    </div>

                    <div class="swiper-slide">
                        <section class="flex gap-12 items-start w-[65%] md:w-[70%] flex-col md:flex-row h-auto">
                            <div class="w-full md:w-6/12">
                                <img class="w-full h-auto" src="{{ asset('images/home/experiences/experience1.webp') }}"
                                    alt="Experiencia Uno">
                            </div>

                            <div class="flex flex-col w-full md:w-6/12">
                                <div class="flex flex-col gap-2 md:mt-8">
                                    <h2 class="text-2xl font-bold">Julia Azucena</h2>
                                    <span class="text-xl font-['Roboto-Thin'] font-bold text-[#3477db]">Especialidad
                                        Comunicación</span>
                                </div>

                                <p class="mt-6 ppx-4">
                                    Mi experiencia en Educación en Inglés en el Iespp Jfsc de Huamachuco ha sido
                                    enriquecedora. Profesores apasionados y oportunidades de práctica me prepararon para mi
                                    futura carrera de docente.
                                </p>
                            </div>
                        </section>
                    </div>


                    <div class="swiper-slide">
                        <section class="flex gap-12 items-start w-[65%] md:w-[70%] flex-col md:flex-row h-auto">
                            <div class="w-full md:w-6/12">
                                <img class="w-full h-auto" src="{{ asset('images/home/experiences/experience1.webp') }}"
                                    alt="Experiencia Uno">
                            </div>

                            <div class="flex flex-col w-full md:w-6/12">
                                <div class="flex flex-col gap-2 md:mt-8">
                                    <h2 class="text-2xl font-bold">Lizbhet Sifuentes</h2>
                                    <span class="text-xl font-['Roboto-Thin'] font-bold text-[#3477db]">Educación
                                        Inicial</span>
                                </div>

                                <p class="mt-6 ppx-4">
                                    Mi experiencia en Educación en Inglés en el Iespp Jfsc de Huamachuco ha sido
                                    enriquecedora. Profesores apasionados y oportunidades de práctica me prepararon para mi
                                    futura carrera de docente.
                                </p>
                            </div>
                        </section>
                    </div>


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </article>
    </section>

    {{-- news and important activities --}}
    <section class="render pb-20">
        <h4 class="title">Noticias y Actividades importantes</h4>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 lg:gap-4 xl:gap-8 py-4 ">

            <div
                class="bg-[#ebebeb] rounded-lg shadow-md border-gray-900  hover:bg-[#ffffff]  transition flex flex-col p-4  jusitify-center  w-[350px]  mx-auto">
                <picture class="flex justify-center h-[300px] w-full">
                    <img class="mb-5 w-full h-full" src="{{ asset('images/home/actividades/activity2.png') }}"
                        alt="" />
                </picture>

                <article class="">
                    <h2 class="my-2 font-bold  subtitle">
                        Simulacro Nacional
                    </h2>
                    <p class="font-black text-[#3477db]">
                        03 de Noviembre
                    </p>
                </article>
            </div>
        </div>
    </section>

    {{-- our allies --}}
    <article class="render pb-16">
        <span class="title">Nuestros Aliados</span>
        <div class="grid gap-4 place-items-center md:grid-cols-6 md:h-[100px] w-full  mt-6">

            <a href="https://www.minedu.gob.pe/superiorpedagogica/" target="_blank"
                class="border rounded-md h-[100px] w-[300px] md:w-full p-2 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full" src="{{ asset('images/home/enlaces/difoid.png') }}" alt="">
            </a>

            <a href="https://www.gob.pe/minedu" target="_blank"
                class="border rounded-md h-[100px] w-[300px] md:w-full p-2 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full" src="{{ asset('images/home/enlaces/educacion.png') }}" alt="">
            </a>

            <a href="http://grell.gob.pe/" target="_blank"
                class="border rounded-md h-[100px] w-[300px] md:w-full p-2 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full" src="{{ asset('images/home/enlaces/grell.png') }}" alt="">
            </a>

            <a href="https://www.munihuamachuco.gob.pe/" target="_blank"
                class="border rounded-md h-[100px] w-[300px] md:w-full px-28 md:px-8 lg:px-12 py-2 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full -z-10" src="{{ asset('images/home/enlaces/logo_m_mpsch.png') }}"
                    alt="">
            </a>

            <a href="https://enlinea.sineace.gob.pe/" target="_blank"
                class="border rounded-md h-[100px] w-[300px] md:w-full p-2 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full -z-10" src="{{ asset('images/home/enlaces/sineace.png') }}" alt="">
            </a>

            <a href="https://risscarrion.gob.pe/" target="_blank"
                class="border rounded-md h-[100px] w-[300px] md:w-full p-2 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full -z-10" src="{{ asset('images/home/enlaces/red-salud.png') }}" alt="">
            </a>
        </div>
    </article>
@endsection
