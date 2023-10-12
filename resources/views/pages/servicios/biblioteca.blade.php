@extends('layout.app')

@section('title', 'Biblioteca IESPP-JFSC-Huamachuco')

@section('content')
    <x-hero image="{{asset('images/slider/slider4.jpg') }}" text="Biblioteca" />
    <section>
        <article>
            <div class="py-16">
                <div class="sm:border-y border-y-[#d9d9d9]  w-full">
                    <div>
                        <div>
                            <div class="render w-full">
                                <ul class="w-full grid grid-cols-2 sm:flex justify-center">
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Sobre el servicio</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Cat&aacute;logo</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Horarios</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Preguntas Frecuentes</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <x-services>
                    <x-slot name='servicio'>Biblioteca</x-slot>
                    <x-slot name='frase'>La lectura es el viaje más corto a mundos infinitos.</x-slot>
                    <x-slot name='img'>{{ asset('images/carreras/CarreraComunicacion.png') }}</x-slot>
                    <x-slot name='altImg'>Servicio de Biblioteca</x-slot>
                    <x-slot name='parrafo'>
                        <p class="grid sm:px-6 lg:px-22 xl:px-32">
                            <span>La lectura es un viaje donde las palabras son destinos. En cada página, se despliegan mundos desconocidos y se abren puertas a la imaginación. La magia de un buen libro es la capacidad de transportarnos más allá de las palabras impresas, hacia horizontes infinitos de descubrimiento.</span> <br>
                            <span>En la lectura, encuentro refugio entre las páginas que conforman un universo propio. Las letras se convierten en arquitectos de emociones, construyendo castillos de historias que residen en la mente mucho después de cerrar el libro. Cada palabra es un paso más profundo hacia la comprensión y la conexión con el mundo que se revela ante mis ojos. </span>
                        </p>
                    </x-slot>
                </x-services>
            </div>
            <div class="bg-[#3477db]">
                <div class="render">
                    <div class="grid gap-5 py-32 lg:gap-10 xl:gap-20">
                        <div class="text-white text-center">
                            <h3 class="subtitle">Cat&aacute;logo de libros por programa de Estudios</h3>
                            <span>(Biblioteca Fisica)</span>
                        </div>
                        <div class="grid grid-colum-1 sm:flex justify-center gap-5">
                            <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border">
                                <div class="my-4 text-white sm:h-[150px]">
                                    <i class='bx bx-child text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                                    <span>Educaci&oacute;n Inicial</span><br>
                                </div>
                                <x-button type="primary" ruta="#">Ver Cat&aacute;logo</x-button>
                            </div>
                            <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border">
                                <div class="my-4 text-white sm:h-[150px]">
                                    <i class='bx bx-hive text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                                    <span>Idiomas, Especilidad: Ingles</span><br>
                                </div>
                                <x-button type="primary" ruta="#">Ver Cat&aacute;logo</x-button>
                            </div>
                            <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border">
                                <div class="my-4 text-white sm:h-[150px]">
                                    <i class='bx bx-user-voice text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                                    <span>Educaci&oacute;n Secundaria Especilidad: Comunicaci&oacute;n</span><br>
                                </div>
                                <x-button type="primary" ruta="#">Ver Cat&aacute;logo</x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="render py-16">
                <div>
                    <div class="grid gap-10">
                        <div>
                            <h4 class="subtitle">Horario de atenci&oacute;n</h4>
                        </div>
                        <div class="grid gap-4">
                            <span>Dias de atenci&oacute;n</span>
                            <div class="grid gap-5 sm:flex items-center sm:py-5">
                                <ul>
                                    <li><i class='bx bxs-calendar text-[#3477db]'></i><span>Lunes</span></li>
                                    <li><i class='bx bxs-calendar text-[#3477db]'></i><span>Martes</span></li>
                                    <li><i class='bx bxs-calendar text-[#3477db]'></i><span>Miercoles</span></li>
                                    <li><i class='bx bxs-calendar text-[#3477db]'></i><span>Jueves</span></li>
                                    <li><i class='bx bxs-calendar text-[#3477db]'></i><span>Viernes</span></li>
                                </ul>
                                <div class="sm:border-l-[2rem] sm:h-full sm:flex items-center sm:px-5"><span>La atenci&oacute;n es de 7:15 a 1:00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <x-card-servicios>
                        <x-slot name="img">{{asset('images/carreras/CarreraComunicacion.png')}}</x-slot>
                        <x-slot name="altImg">Lcda. Ana</x-slot>
                        <x-slot name="nombre">Lcda. Ana Roely Vasquez Cruzado</x-slot>
                        <x-slot name="title">Informacion de Contacto</x-slot>
                        <x-slot name="departamento">Departameto de Psicopedagogia</x-slot>
                        <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
                        <x-slot name="telefono">949 949 494</x-slot>
                        <x-slot name="email">psicopedagogia@jfsc.edu.pe</x-slot>
                        <x-slot name="titleRedes">Sigenos en</x-slot>
                    </x-card-servicios>
                </div>
            </div>
            <div class="render py-16">
                <div class="grid gap-6">
                    <div>
                        <h5 class="subtitle">Preguntas frecuentes sobre el Servicio de Biblioteca</h5>
                    </div>
                    <div class="desplegable_servicios">
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿CÓMO PUEDO OBTENER EL SERVICO?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿QUÉ MATERIALES PUEDO TOMAR PRESTADOS?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿HAY UN LÍMITE EN LA CANTIDAD DE MATERIALES QUE PUEDO TOMAR PRESTADOS?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿QUÉ HACER SI PIERDO UN LIBRO O MATERIAL PRESTADO?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿HAY ESPACIOS DE ESTUDIO GRUPAL DISPONIBLES EN LA BIBLIOTECA?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿CÓMO PUEDO SUGERIR LA ADQUISICIÓN DE NUEVOS LIBROS O MATERIALES?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                        <div class="desplegable-item">
                            <div class="icon-container desplegable-item-list">
                                <i class='bx bx-plus'></i>
                            </div>
                            <div>
                                <div class="desplegable-item-list"><span>¿PUEDO ACCEDER A SERVICIOS DE PSICOLOGÍA SI NO SOY ESTUDIANTE?</span></div>
                                <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

@endsection
