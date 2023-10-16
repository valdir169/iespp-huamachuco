@extends('layout.app')

@section('title', 'IESPP José Faustino Sánchez Carrión')

@section('content')
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img class="h-full w-full" src="{{ asset('images/slider/slider2.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="h-full w-full" src="{{ asset('images/slider/slider1.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="h-full w-full" src="{{ asset('images/slider/slider3.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="h-full w-full" src="{{ asset('images/slider/slider4.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <section class="render py-24">
        <article class="flex flex-col justify-center text-center pb-12 gap-3">
            <h2 class="title">¡Contamos con las siguientes <span class="text-[#3477db]">programas de
                    estudio!</span></h2>
            <span class="text-xl">Al culminar recibe tu T&iacute;tulo a Nombre de la Naci&oacute;n</span>
        </article>

        <article class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 md:gap-10 lg:gap-12 2xl:gap-20">
            <x-card>
                <x-slot name="image">{{ asset('images/carreras/carrera_inicial.png') }}</x-slot>
                <x-slot name="altText">Educación Inicial</x-slot>
                <x-slot name="title">Educación Inicial</x-slot>
                <x-slot name="content">
                    Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                    niñas...
                </x-slot>
                <x-button type="secondary" ruta="{{ route('educacioninicial') }}">Ver Detalles</x-button>
            </x-card>

            <x-card>
                <x-slot name="image">{{ asset('images/carreras/carrera_ingles.png') }}</x-slot>
                <x-slot name="altText">Idiomas, especialidad: Ingles</x-slot>
                <x-slot name="title">Idiomas: Especialidad Inglés</x-slot>
                <x-slot name="content">
                    Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                    niñas...
                </x-slot>
                <x-button type="secondary" ruta="#">Ver Detalles</x-button>

            </x-card>

            <x-card>
                <x-slot name="image">{{ asset('images/carreras/carrera_comunicacion.png') }}</x-slot>
                <x-slot name="altText">Educación Secundaria, Especialidad: Comunicación</x-slot>
                <x-slot name="title">Educación Secundaria: Especialidad Comunicación</x-slot>
                <x-slot name="content">
                    Formar docentes de Comunicación con conocimeintos pedagógicos y especializados, que
                    trabajen de forma colaborativa...
                </x-slot>
                <x-button type="secondary" ruta="#">Ver Detalles</x-button>

            </x-card>
        </article>
    </section>

    <article
        class="bg-[#3477DB] px-4 sm:px-8 md:px-12 lg:px-16 xl:px-24 grid md:grid-cols-3 gap-10 md:gap-4 lg:gap-8 2xl:gap-20 py-20 text-white place-items-center w-full">
        <p>Conoce nuestro campus</p>
    </article>



    <section class="render my-24 grid justify-center md:grid-cols-2 place-items-center gap-4 md:gap-8">
        <div class="h-full w-full xl:h-[420px] rounded-lg">
            <img class="h-full w-full rounded-lg" src="{{ asset('images/directora.png') }}" alt="Directora del IESPP JFSC">
        </div>

        <div class="flex flex-col gap-6 h-auto items-center md:items-start ">
            <h2 class="title">Bienvenida de la Directora</h2>
            <p>
                Hay que resaltar que la educación es formar al ser humano para el cambio permanente y aún para la
                eventual crisis producto de la transición.<br>
                Nuevamente estamos en la etapa académica más importante de la Escuela Indoamérica, desde la Dirección de
                la Escuela queremos hacerles llegar nuestra cordial bienvenida y expresarles que haremos lo posible para
                que vuestra estadía en esta unidad académica no sólo les dé un título pedagógico sino que además les
                deje un grato recuerdo y un sentimiento de pertenencia.
                Las necesidades educativas del país, requieren de profesionales altamente comprometidos, nuestra misión
                y responsabilidad es que Uds. lo sean.
            </p>
            <x-button type="secondary" ruta="{{ route('presentacion') }}">Ver más</x-button>
        </div>
    </section>



    <article
        class="bg-[#3477DB] px-4 sm:px-8 md:px-12 lg:px-16 xl:px-24 grid md:grid-cols-3 gap-10 md:gap-4 lg:gap-8 2xl:gap-20 py-20 text-white place-items-center w-full">
        <div
            class="carreras-count flex flex-col gap-2  justify-center items-center shadow-md shadow-[#D9D9D9] p-4 rounded-lg
            shadow-md border-gray-700 hover:scale-105 hover:bg-[#ebebeb] hover:border-gray-500  transition hover:text-[#3477DB]">
            <i class='bx bxs-graduation text-8xl'></i>
            <span class="text-6xl font-['Roboto-Bold'] " data-valor="4">0</span>
            <small class="text-2xl md:text-xl lg:text-2xl font-bold">CARRERAS</small>
        </div>

        <div
            class="carreras-count flex flex-col justify-center gap-2 items-center shadow-md shadow-[#D9D9D9] p-4 rounded-lg
        shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]"">
            <i class='bx bxs-graduation text-8xl'></i>
            <span class="text-6xl font-['Roboto-Bold']" data-valor="8">0</span>
            <small class="text-2xl md:text-xl lg:text-2xl font-bold">ESPECIALIZACIONES</small>
        </div>

        <div
            class="carreras-count flex flex-col gap-2 justify-center items-center shadow-md shadow-[#D9D9D9] p-4 rounded-lg
        shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]"">
            <i class='bx bx-edit text-8xl'></i>
            <span class="text-6xl font-['Roboto-Bold']" data-valor="10">0</span>
            <small class="text-2xl md:text-xl lg:text-2xl font-bold">CONVENIOS</small>
        </div>
    </article>

    <section class="render py-28 bg-[#ebebeb]">
        <div class="flex flex-col text-center py-4 justify-center z-50 ">
            <h2 class="text-4xl font-bold">Experiencias <span class="text-[#3477DB]">Exitosas</span></h2>
            <span class="text-xl mt-4">¡Mira lo que dicen de nosotros!</span>
        </div>

        <article class="swiper-exp-cont">
            <div class="experience myExperience">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <section class="flex gap-12 items-start w-[65%] md:w-[70%] flex-col md:flex-row h-auto">
                            <div class="w-full md:w-6/12">
                                <img class="w-full h-auto" src="{{ asset('images/experiences/experience.png') }}"
                                    alt="">
                            </div>

                            <div class="flex flex-col w-full md:w-6/12">
                                <div class="flex flex-col gap-2 md:mt-8">
                                    <h2 class="text-2xl font-bold">Gladis Medina </h2>
                                    <span class="text-xl font-['Roboto-Thin'] font-bold text-[#3477db]">Idioma
                                        Ingles</span>
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
                                <img class="w-full h-auto" src="" alt="Elonk Musk">
                            </div>

                            <div class="flex flex-col w-full md:w-6/12">
                                <div class="flex flex-col gap-2 md:mt-8">
                                    <h2 class="text-2xl font-bold">Elon Musk </h2>
                                    <span class="text-xl font-['Roboto-Thin'] font-bold text-[#3477db]">Star Link, Tesla,
                                        X</span>
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
                                <img class="w-full h-auto" src="" alt="Mark Zuckerber">
                            </div>

                            <div class="flex flex-col w-full md:w-6/12">
                                <div class="flex flex-col gap-2 md:mt-8">
                                    <h2 class="text-2xl font-bold">Mark Zuckerber </h2>
                                    <span class="text-xl font-['Roboto-Thin'] font-bold text-[#3477db]">Facebook,
                                        WhatsApp</span>
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


    <section class="render py-24">
        <h4 class="title">Actividades importantes</h4>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="mx-auto">
                <img class="w-full h-full object-fill" src="{{ asset('images/activity2.png') }}" alt="">
            </div>

            <div class="mx-auto">
                <img class="w-full h-full" src="{{ asset('images/activity2.png') }}" alt="">
            </div>

            <div class="mx-auto">
                <img class="w-full h-full object-fill" src="{{ asset('images/activity3.png') }}" alt="">
            </div>
        </div>
    </section>

    <div class="render py-16">
        <span class="title">Nuestros Aliados</span>
        <div class="grid gap-4 place-items-center md:grid-cols-4 md:h-[150px] w-full flex lg:gap-10 xl:gap-20 mt-6">

            <a href="https://enlinea.sunedu.gob.pe/" target="_blank"
                class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full" src="{{ asset('images/enlaces/sunedu.png') }}" alt="">
            </a>


            <a href="https://www.gob.pe/minedu" target="_blank"
                class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full" src="{{ asset('images/enlaces/educacion.png') }}" alt="">
            </a>

            <a href="https://www.unesco.org/es" target="_blank"
                class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full" src="{{ asset('images/enlaces/unesco.png') }}" alt="">
            </a>

            <a href="https://www.gob.pe/busquedas?institucion%5B%5D=sineace&reason=sheet&sheet=1&term=coneaces"
                target="_blank"
                class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#ebebeb] transition z-50">
                <img class="w-full h-full -z-10" src="{{ asset('images/enlaces/coneaces.png') }}" alt="">
            </a>
        </div>
    </div>



@endsection
