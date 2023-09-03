@extends('layout.app')

@section('title', 'IESPP José Faustino Sánchez Carrión')

@section('content')
    <section class="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://scontent.ftru5-1.fna.fbcdn.net/v/t39.30808-6/351161792_578806571036698_6885073654059501028_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeFmuhlivcWI1YPI0zbxBhXHLRfVwYtxt_ItF9XBi3G38nZz-ufw_FQlTLtFWMGm3fULZn2ztcgnO6E0HdkFxiY_&_nc_ohc=RzvAncqVlaEAX9fmPGx&_nc_zt=23&_nc_ht=scontent.ftru5-1.fna&oh=00_AfCFVmIl9QgwzLo8vuZJijmDt6jRZ3NtDCwrcuGY8wp5YA&oe=64F8A63F"
                        alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://scontent.ftru5-1.fna.fbcdn.net/v/t39.30808-6/344374381_916401222960547_5889990213191338314_n.jpg?stp=dst-jpg_p600x600&_nc_cat=104&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeHhtEAYV4v-qNwd5y-KJBh7VkN0_SqEWJNWQ3T9KoRYk0m6TmIni1QacnqJsr1m6nJAAT9VFiTHd-ELryTz16ix&_nc_ohc=gnEda73TYkAAX-jrseZ&_nc_zt=23&_nc_ht=scontent.ftru5-1.fna&oh=00_AfAm0hw7foPFL_5Ubshx-qq0hPwDsEzX5c1HSi7VBB8n1g&oe=64F7473D"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <main class="render">
        <article class="flex flex-col justify-center text-center py-4">
            <h1 class="text-2xl  font-bold">CONTAMOS CON LAS SIGUIENTES CARRERAS PROFESIONALES</h1>
            <span class="text-xl">Al culminar recibe tu T&iacute;tulo a Nombre de la Naci&oacute;n</span>
        </article>

        <article class="grid gap-10 w-full sm:grid-cols-2 lg:grid-cols-3 2xl:gap-20">
            <x-card>
                <x-slot name="imageSrc">{{ asset('images/carreras/carrera_inicial.png') }}</x-slot>
                <x-slot name="altText">Educación Inicial</x-slot>
                <x-slot name="title">Educaci&oacute;n Inicial</x-slot>
                Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                niñas...
                <x-slot name="button">
                    <x-button>Ver Detalles</x-button>
                </x-slot>
            </x-card>

            <x-card>
                <x-slot name="imageSrc">{{ asset('images/carreras/carrera_ingles.png') }}</x-slot>
                <x-slot name="altText">Idiomas, especialidad: Ingles</x-slot>
                <x-slot name="title">Idiomas, Especialidad:Ingl&eacute;s</x-slot>
                Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollen los niños y
                niñas...
                <x-slot name="button">
                    <x-button>Ver Detalles</x-button>
                </x-slot>
            </x-card>

            <x-card>
                <x-slot name="imageSrc">{{ asset('images/carreras/carrera_comunicacion.png') }}</x-slot>
                <x-slot name="altText">Educación Secundaria, Especialidad: Comunicación</x-slot>
                <x-slot name="title">Educaci&oacute;n Secundaria, Especialidad: Comunicaci&oacute;n</x-slot>
                Formar docentes de Comunicaci&oacute;n con conocimeintos pedag&oacute;gicos y especializados, que
                trabajen de forma colaborativa...
                <x-slot name="button">
                    <x-button>Ver Detalles</x-button>
                </x-slot>
            </x-card>
        </article>

        <section class="my-10 grid md:grid-cols-2 gap-5 w-full md:h-[40vh] bg-red-300 md:gap-10 ">
            
            <div class="w-full h-[40vh]">
                <img class="w-full h-[100%] object-cover" src="{{ asset('images/directora.png') }}" alt="Directora del IESPP JFSC">
            </div>

            <div class="flex flex-col gap-5 h-full p-4">
                <h3 class="text-2xl font-bold">BIENVENIDA DE LA DIRECTORA</h3>
                <p>
                    Hay que resaltar que la educación es formar al ser humano para el cambio permanente y aún para la
                    eventual crisis producto de la transición.
                    Nuevamente estamos en la etapa académica más importante de la Escuela Indoamérica, desde la Dirección de
                    la Escuela queremos hacerles llegar nuestra cordial bienvenida y expresarles que haremos lo posible para
                    que vuestra estadía en esta unidad académica no sólo les dé un título pedagógico sino que además les
                    deje un grato recuerdo y un sentimiento de pertenencia.
                    Las necesidades educativas del país, requieren de profesionales altamente comprometidos, nuestra misión
                    y responsabilidad es que Uds. lo sean.
                </p>
                <x-button background="bg-[#3477DB] px-8 text-[#ffffff] hover:bg-[#ffffff] hover:text-black ms-auto">
                    Ver más
                </x-button>
            </div>
        </section>
    </main>

@endsection
