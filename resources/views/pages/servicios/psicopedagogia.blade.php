@extends('layout.app')

@section('title', 'Psicopedagogia IESPP-JFSC-Huamachuco')

@section('content')
<x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Psicopedagogia" />
<section class="grid gap-16">
    <article>
        <div class="py-16">
            <div class="sm:border-y border-y-[#d9d9d9]  w-full">
                <div>
                    <div>
                        <div class="render w-full">
                            <ul class="w-full grid grid-cols-2 sm:flex justify-center">
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#servicio" class="flex flex-col text-center gap-3"><i class='bx bx-brain text-[25px]'></i><span>Sobre el Servicio</span></a></li>
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#horario" class="flex flex-col text-center gap-3"><i class='bx bx-time-five text-[25px]' ></i><span>Horarios</span></a></li>
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#responsable" class="flex flex-col text-center gap-3"><i class='bx bx-user text-[25px]' ></i><span>Responsable</span></a></li>
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#preguntas" class="flex flex-col text-center gap-3"><i class='bx bx-question-mark text-[25px]' ></i><span>Preguntas Frecuentes</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="servicio">
            <x-services>
                <x-slot name='servicio'>Psicopedagogia</x-slot>
                <x-slot name='frase'>El secreto de la existencia humana no sólo está en vivir, sino también en saber para qué se vive.</x-slot>
                <x-slot name='img'>{{ asset('images/carreras/CarreraComunicacion.png') }}</x-slot>
                <x-slot name='altImg'>Servicio de Psicopedagogia</x-slot>
                <x-slot name='parrafo'>
                    <p class="grid sm:px-6 lg:px-22 xl:px-32">
                        <span>La lectura es un viaje donde las palabras son destinos. En cada página, se despliegan mundos desconocidos y se abren puertas a la imaginación. La magia de un buen libro es la capacidad de transportarnos más allá de las palabras impresas, hacia horizontes infinitos de descubrimiento.</span> <br>
                        <span>En la lectura, encuentro refugio entre las páginas que conforman un universo propio. Las letras se convierten en arquitectos de emociones, construyendo castillos de historias que residen en la mente mucho después de cerrar el libro. Cada palabra es un paso más profundo hacia la comprensión y la conexión con el mundo que se revela ante mis ojos. </span>
                    </p>
                </x-slot>
            </x-services>
            <div class="bg-[#ebebeb]">
                <div class="render py-12 grid gap-8 sm:gap-14">
                    <div><span class="subtitle">Ofrecemos</span></div>
                    <div class="grid gap-4 sm:flex items-center justify-center">
                        <div class="flex items-center gap-5 sm:flex items-center justify-center sm:flex-col sm:w-[200px] sm:h-[250px] border border-[#3477db] lg:w-[300px] card-animation">
                            <i class='bx bxs-user-check text-[50px] text-[#3477db]'></i>
                            <span>Asesoramiento Individual</span>
                        </div>
                        <div class="flex items-center gap-5 sm:flex items-center justify-center sm:flex-col sm:w-[200px] sm:h-[250px] border border-[#3477db] lg:w-[300px] card-animation">
                            <i class='bx bx-male-female text-[50px] text-[#3477db]'></i>
                            <span>Terapia Grupal</span>
                        </div>
                        <div class="flex items-center gap-5 sm:flex items-center justify-center sm:flex-col sm:w-[200px] sm:h-[250px] border border-[#3477db] lg:w-[300px] card-animation">
                            <i class='bx bxs-book-reader text-[50px] text-[#3477db]'></i>
                            <span>Talleres</span>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class='bx bx-lock text-[60px]'></i>
                        <span>Confidencialidad y ética en los servicios de Psicopedagía.</span>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="render py-16" id="horario">
            <div>
                <div class="grid gap-10">
                    <div>
                        <h4 class="subtitle">Horario de atenci&oacute;n</h4>
                    </div>
                    <div class="grid gap-4">
                        <span class="font-bold">Dias de atenci&oacute;n</span>
                        <div class="grid gap-5 sm:flex items-center sm:py-5">
                            <ul class="grid gap-2">
                                <li class="flex gap-3"><i class='bx bxs-calendar text-[25px] text-[#3477db]'></i><span>Lunes</span></li>
                                <li class="flex gap-3"><i class='bx bxs-calendar text-[25px] text-[#3477db]'></i><span>Martes</span></li>
                                <li class="flex gap-3"><i class='bx bxs-calendar text-[25px] text-[#3477db]'></i><span>Miercoles</span></li>
                                <li class="flex gap-3"><i class='bx bxs-calendar text-[25px] text-[#3477db]'></i><span>Jueves</span></li>
                                <li class="flex gap-3"><i class='bx bxs-calendar text-[25px] text-[#3477db]'></i><span>Viernes</span></li>
                            </ul>
                            <div class="sm:border-l border-l-[#3477db] sm:h-full sm:flex items-center sm:px-5"><span class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">La atenci&oacute;n es de 7:15am a 1:00am</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div id="responsable">
            <x-card-servicios>
                <x-slot name="img">{{asset('images/carreras/CarreraComunicacion.png')}}</x-slot>
                <x-slot name="altImg">Lcda. Ana</x-slot>
                <x-slot name="nombre">Lcda. Ana Roely Vasquez Cruzado</x-slot>
                <x-slot name="title">Informacion de Contacto</x-slot>
                <x-slot name="departamento">Departameto de Psicopedagogia</x-slot>
                <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
                <x-slot name="telefono">949 949 494</x-slot>
                <x-slot name="email">psicopedagogia@jfsc.edu.pe</x-slot>
                <x-slot name="titleRedes">S&iacute;genos en</x-slot>
            </x-card-servicios>
        </div>
    </article>
    <article>
        <div class="render py-16" id="preguntas">
            <div class="grid gap-6 lg:gap-12">
                <div>
                    <span class="subtitle">Preguntas frecuentes sobre el Servicio de Biblioteca</span>
                </div>
                <div class="desplegable_servicios grid gap-4">
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿CÓMO PUEDO PROGRAMAR UNA CITA CON UN PSICÓLOGO?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿CUÁLES SON LOS COSTOS ASOCIADOS CON LOS SERVICIOS DE PSICOLOGÍA?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿CUÁNTAS SESIONES DE ASESORAMIENTO PUEDO TENER Y CON QUÉ FRECUENCIA?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿MIS SESIONES DE ASESORAMIENTO SERÁN CONFIDENCIALES?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿PUEDO ACCEDER A SERVICIOS DE PSICOLOGÍA SI NO SOY ESTUDIANTE?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿PUEDO INVOLUCRAR A FAMILIARES O AMIGOS EN MI PROCESO DE ASESORAMIENTO?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="desplegable-item__content">
                            <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div class="desplegable-item-list"><span>¿QUÉ DEBO HACER SI NECESITO CANCELAR O REPROGRAMAR UNA CITA?</span></div>
                        </div>
                        <div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection
