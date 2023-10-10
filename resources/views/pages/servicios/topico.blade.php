@extends('layout.app')

@section('title', 'Topico IESPP-JFSC-Huamachuco')

@section('content')
<x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Topico" />
<section>
    <article>
        <div class="py-16">
            <div>
                <div class="render">
                    <div>
                        <div class="grid gap-5 lg:gap-10">
                            <div class="text-center"><span class="text-sm sm:text-base lg:text-xl 2xl:text-3xl">Buenos Habitos</span></div>
                            <ul class="w-auto shadow-2xl  sm:flex justify-center">
                                <li class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]"><a class="min-w-[90%] flex items-center gap-4 text-center sm:flex-col sm:gap-2" href="#"><i class='bx bxs-bowl-rice xl:text-[2.5rem]'></i><span>Buena Alimentaci&oacute;n</span></a></li>
                                <li class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]"><a class="min-w-[90%] flex items-center gap-4 text-center sm:flex-col sm:gap-2" href="#"><i class='bx bx-run xl:text-[2.5rem]' ></i><span>Hacer Ejercicio</span></a></li>
                                <li class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]"><a class="min-w-[90%] flex items-center gap-4 text-center sm:flex-col sm:gap-2" href="#"><i class='bx bx-bed xl:text-[2.5rem]' ></i><span>Dormir lo Suficinete</span></a></li>
                                <li class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]"><a class="min-w-[90%] flex items-center gap-4 text-center sm:flex-col sm:gap-2" href="#"><i class='bx bxs-wine xl:text-[2.5rem]' ></i><span>Hidratarse</span></a></li>
                                <li class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]"><a class="min-w-[90%] flex items-center gap-4 text-center sm:flex-col sm:gap-2" href="#"><i class='bx bxs-donate-blood xl:text-[2.5rem]' ></i><span>Buena Higiene</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <x-services>
                <x-slot name='servicio'>Topico</x-slot>
                <x-slot name='frase'>La salud no lo es todo pero sin ella, todo lo demás es nada.</x-slot>
                <x-slot name='img'>{{ asset('images/carreras/CarreraComunicacion.png') }}</x-slot>
                <x-slot name='altImg'>ServicioTopico</x-slot>
                <x-slot name='parrafo'>
                    <p class="grid sm:px-6 lg:px-22 xl:px-32">
                        <span>La lectura es un viaje donde las palabras son destinos. En cada página, se despliegan mundos desconocidos y se abren puertas a la imaginación. La magia de un buen libro es la capacidad de transportarnos más allá de las palabras impresas, hacia horizontes infinitos de descubrimiento.</span> <br>
                        <span>En la lectura, encuentro refugio entre las páginas que conforman un universo propio. Las letras se convierten en arquitectos de emociones, construyendo castillos de historias que residen en la mente mucho después de cerrar el libro. Cada palabra es un paso más profundo hacia la comprensión y la conexión con el mundo que se revela ante mis ojos. </span>
                    </p>
                </x-slot>
            </x-services>
        </div>
    </article>
</section>
@endsection