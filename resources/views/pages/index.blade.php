@extends('layout.app')

@section('title', 'IESPP José Faustino Sánchez Carrión')

@section('content')
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="h-full w-full" src="{{ asset('images/slider/slider1.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full" src="{{ asset('images/slider/slider2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                    <img class="h-full w-full" src="{{ asset('images/slider/slider3.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                    <img class="h-full w-full" src="{{ asset('images/slider/slider4.jpg') }}" alt="">
                </div>
            </div>
        </div>

    <section class="render">
        <section class="my-4">
            <article class="flex flex-col justify-center text-center py-4">
                <h1 class="text-xl font-bold">CONTAMOS CON LAS SIGUIENTES CARRERAS PROFESIONALES</h1>
                <span class="text-xl">Al culminar recibe tu T&iacute;tulo a Nombre de la Naci&oacute;n</span>
            </article>

            <article class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <x-card>
                    <x-slot name="image">{{ asset('images/carreras/carrera_inicial.png') }}</x-slot>
                    <x-slot name="altText">Educación Inicial</x-slot>
                    <x-slot name="title">Educaci&oacute;n Inicial</x-slot>
                    <x-slot name="content">
                        Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                        niñas...
                    </x-slot>
                    <x-button type="primary" ruta="{{ route('educacioninicial') }}">Ver Detalles</x-button>
                </x-card>

                <x-card>
                    <x-slot name="image">{{ asset('images/carreras/carrera_ingles.png') }}</x-slot>
                    <x-slot name="altText">Idiomas, especialidad: Ingles</x-slot>
                    <x-slot name="title">Idiomas, Especialidad: Ingl&eacute;s</x-slot>
                    <x-slot name="content">
                        Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                        niñas...
                    </x-slot>
                    <x-button type="primary" ruta="#">Ver Detalles</x-button>

                </x-card>

                <x-card>
                    <x-slot name="image">{{ asset('images/carreras/carrera_comunicacion.png') }}</x-slot>
                    <x-slot name="altText">Educación Secundaria, Especialidad: Comunicación</x-slot>
                    <x-slot name="title">Educaci&oacute;n Secundaria, Especialidad: Comunicaci&oacute;n</x-slot>
                    <x-slot name="content">
                        Formar docentes de Comunicaci&oacute;n con conocimeintos pedag&oacute;gicos y especializados, que
                        trabajen de forma colaborativa...
                    </x-slot>
                    <x-button type="primary" ruta="#">Ver Detalles</x-button>

                </x-card>
            </article>
        </section>

        <section class="my-16 grid justify-center md:grid-cols-2 place-items-center gap-4">
            <div class="h-full w-full xl:h-[420px]">
                <img class="h-full w-full" src="{{ asset('images/directora.png') }}" alt="Directora del IESPP JFSC">
            </div>

            <div class="flex flex-col gap-5 h-auto  ">
                <h3 class="text-xl font-bold">BIENVENIDA DE LA DIRECTORA</h3>
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
    </section>

    <article
        class="bg-[#3477DB] px-4 sm:px-8 md:px-12 lg:px-16 xl:px-24 grid md:grid-cols-3 gap-10 md:gap-4 lg:gap-8 py-12 text-white place-items-center w-full">
        <div
            class="carreras-count flex flex-col justify-center items-center shadow-md shadow-[#D9D9D9] p-4 rounded-lg
            shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]">
            <i class='bx bxs-graduation text-8xl'></i>
            <span class="text-6xl" data-valor="4">0</span>
            <small class="text-2xl md:text-base font-bold">CARRERAS</small>
        </div>

        <div
            class="carreras-count flex flex-col justify-center items-center shadow-md shadow-[#D9D9D9] p-4 rounded-lg
        shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]"">
            <i class='bx bxs-graduation text-8xl'></i>
            <span class="text-6xl" data-valor="8">0</span>
            <small class="text-2xl sm:text-base font-bold">ESPECIALIZACIONES</small>
        </div>

        <div
            class="carreras-count flex flex-col justify-center items-center shadow-md shadow-[#D9D9D9] p-4 rounded-lg
        shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition hover:text-[#3477DB]"">
            <i class='bx bx-edit text-8xl'></i>
            <span class="text-6xl" data-valor="10">0</span>
            <small class="text-2xl sm:text-base font-bold">CONVENIOS</small>
        </div>
    </article>


    <section class="render">
        <article class="py-8">
            <div class="flex flex-col text-center py-4 justify-center ">
                <small class="text-2xl font-bold uppercase">Experiencias Exitosas</small>
                <span class="text-md">Nuestros estudiantes y egresados piensan de nosotros</span>
            </div>
            <section class="grid justify-center md:grid-cols-2 place-items-center">
                <div>
                    <img src="{{ asset('images/experiences.png') }}" alt="">
                </div>

                <div class="flex flex-col">
                    <h2 class="text-2xl font-bold">Gladis Medina <span class="text-lg font-thin">(Estudiante)</span></h2>

                    <span class="text-xl mt-2">Idioma Ingles</span>
                    <p class="mt-6">
                        Estoy fascinada estudiando inglés con los profesores de esta academia, porque he visto mi avance en
                        poco tiempo. Inicié con un conocimiento nulo y hoy me sorprendo yo misma al ver que ya puedo
                        entender palabras e incluso puedo entablar conversaciones básicas. Su enseñanza es personalizada y
                        se nos hace una réplica diaria de lo aprendido en clases anteriores, esto reafirma el idioma si se
                        nos quiere olvidar. Además, las clases son divertidas y los profesores dan la confianza para
                        equivocarme sin tener que avergonzarme, por eso, el manejo de la plataforma es fácil y muy
                        comprensible para quienes iniciamos nuestro aprendizaje desde cero.
                    </p>
                </div>
            </section>
        </article>


        <section class="my-10">
            <h4 class="text-2xl font-bold mb-2">ACTIVIDADES IMPORTANTES</h4>
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

        <div class="my-10">
            <span class="text-2xl font-bold ">ENLACES DE INTERES</span>
            <div class="grid gap-4 place-items-center md:grid-cols-4 md:h-[150px] w-full flex lg:gap-10 mt-2">


                <a href="https://enlinea.sunedu.gob.pe/" target="_blank"
                    class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#D9D9D9] transition z-50">
                    <img class="w-full h-full" src="{{ asset('images/enlaces/sunedu.png') }}" alt="">
                </a>


                <a href="https://www.gob.pe/minedu" target="_blank"
                    class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#D9D9D9] transition z-50">
                    <img class="w-full h-full" src="{{ asset('images/enlaces/educacion.png') }}" alt="">
                </a>

                <a href="https://www.unesco.org/es" target="_blank"
                    class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#D9D9D9] transition z-50">
                    <img class="w-full h-full" src="{{ asset('images/enlaces/unesco.png') }}" alt="">
                </a>

                <a href="https://www.gob.pe/busquedas?institucion%5B%5D=sineace&reason=sheet&sheet=1&term=coneaces"
                    target="_blank"
                    class="border rounded-md h-[150px] w-[300px] md:w-full p-4 hover:bg-[#D9D9D9] transition z-50">
                    <img class="w-full h-full -z-10" src="{{ asset('images/enlaces/coneaces.png') }}" alt="">
                </a>
            </div>
        </div>
    </section>


@endsection
