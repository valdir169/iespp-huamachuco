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
        <div class="bg-[#ebebeb] py-16">
            <div class="render grid gap-4  lg:gap-8">
                <div>
                    <h2 class="subtitle">Ofrecemos hacistencia en:</h2>
                </div>
                <div class="card-container-topico">
                    <x-card-topico>
                        <x-slot name="icon"><i class='bx bx-plus-medical'></i></x-slot>
                        <x-slot name="title">Emergencias Médicas</x-slot>
                        <x-slot name="description">Atención inmediata y coordinación con servicios médicos de emergencia en casos de enfermedades súbitas, problemas respiratorios graves, reacciones alérgicas graves, etc.</x-slot>
                    </x-card-topico>

                    <x-card-topico>
                        <x-slot name="icon"><i class='bx bx-swim' ></i></x-slot>
                        <x-slot name="title">Lesiones Deportivas</x-slot>
                        <x-slot name="description">Asistencia para lesiones deportivas leves, como torceduras, esguinces, contusiones, y manejo inicial antes de referir a un profesional médico.</x-slot>
                    </x-card-topico>

                    <x-card-topico>
                        <x-slot name="icon"><i class='bx bxs-clinic' ></i></x-slot>
                        <x-slot name="title">Heridas y Cortaduras</x-slot>
                        <x-slot name="description">Atención a heridas y cortaduras menores, incluido el lavado y desinfección de la herida y la aplicación de vendajes.</x-slot>
                    </x-card-topico>

                    <x-card-topico>
                        <x-slot name="icon"><i class='bx bxs-meteor' ></i></x-slot>
                        <x-slot name="title">Quemaduras Leves</x-slot>
                        <x-slot name="description">Tratamiento inicial para quemaduras leves, incluido el enfriamiento de la zona afectada y la aplicación de apósitos o geles.</x-slot>
                    </x-card-topico>

                    <x-card-topico>
                        <x-slot name="icon"><i class='bx bxs-virus' ></i></x-slot>
                        <x-slot name="title">Reacciones Alérgicas Menores</x-slot>
                        <x-slot name="description">Asistencia para reacciones alérgicas leves, como picaduras de insectos o contacto con alérgenos conocidos.</x-slot>
                    </x-card-topico>

                    <x-card-topico>
                        <x-slot name="icon"><i class='bx bx-male-female' ></i></x-slot>
                        <x-slot name="title">Educación en Salud</x-slot>
                        <x-slot name="description">Proporcionar información educativa sobre temas de salud relevantes para los estudiantes.</x-slot>
                    </x-card-topico>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="render py-16">
            <div>
                <div class="grid gap-10">
                    <div>
                        <h3  class="subtitle">Horario de atenci&oacute;n</h3>
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
    </article>
    <article>
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
    </article>
    <article>
        <div class="render py-16">
            <div class="grid gap-6">
                <div>
                    <h4 class="subtitle">Preguntas frecuentes sobre el Servicio de Biblioteca</h4>
                </div>
                <div class="desplegable_servicios">
                    <div class="desplegable-item">
                        <div class="icon-container desplegable-item-list">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div>
                            <div class="desplegable-item-list"><span>¿QUÉ ES EL SERVICIO DE TÓPICO?</span></div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
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
                            <div class="desplegable-item-list"><span>¿EN QUÉ SITUACIONES PUEDO BUSCAR AYUDA DEL SERVICIO DE TÓPICO?</span></div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="icon-container desplegable-item-list">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div>
                            <div class="desplegable-item-list"><span>¿ES NECESARIO AGENDAR UNA CITA PARA RECIBIR ATENCIÓN DEL SERVICIO DE TÓPICO?</span></div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="icon-container desplegable-item-list">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div>
                            <div class="desplegable-item-list"><span>¿QUIÉNES SON LOS PROFESIONALES ENCARGADOS DE BRINDAR ATENCIÓN EN EL SERVICIO DE TÓPICO?</span></div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="icon-container desplegable-item-list">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div>
                            <div class="desplegable-item-list"><span>¿EL SERVICIO DE TÓPICO TIENE ALGUN COSTO?</span></div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="icon-container desplegable-item-list">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div>
                            <div class="desplegable-item-list"><span>¿EL SERVICIO DE TÓPICO OFRECE ATENCIÓN FUERA DEL HORARIO REGULAR DE LA UNIVERSIDAD?</span></div>
                            <div class="desplegable-item-content">Profesional en la salud, que cumple la labor de orientar a los estudiantes cuando presentan alguna dificultad mental, emocional, académica y/o social.</div>
                        </div>
                    </div>
                    <div class="desplegable-item">
                        <div class="icon-container desplegable-item-list">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div>
                            <div class="desplegable-item-list"><span>¿QUÉ DEBO HACER EN CASO DE UNA LESIÓN MÁS GRAVE QUE REQUIERA ATENCIÓN MÉDICA ESPECIALIZADA?</span></div>
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
