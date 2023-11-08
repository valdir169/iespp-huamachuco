@extends('layout.app')

@section('title', 'Biblioteca IESPP-JFSC-Huamachuco')

@section('content')
    <x-hero image="{{asset('images/servicios/Biblioteca.jpg') }}" text="Biblioteca" />
    <section>
        <article>
            <div class="py-16">
                <div class="sm:border-y border-y-[#d9d9d9]  w-full">
                    <div>
                        <div>
                            <div class="render w-full">
                                <ul class="w-full grid grid-cols-2 sm:flex justify-center">
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#servicio" class="flex flex-col text-center gap-2"><i class='bx bx-book-bookmark text-[25px]'></i><span>Sobre el servicio</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#catalago" class="flex flex-col text-center gap-2"><i class='bx bx-list-ol text-[25px]'></i><span>Cat&aacute;logo</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#horario" class="flex flex-col text-center gap-2"><i class='bx bx-time-five text-[25px]' ></i><span>Horarios</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#responsable" class="flex flex-col text-center gap-2"><i class='bx bx-user text-[25px]' ></i><span>Responsable</span></a></li>
                                    <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#preguntas" class="flex flex-col text-center gap-2"><i class='bx bx-question-mark text-[25px]' ></i><span>Preguntas Frecuentes</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="servicio">
                <x-services>
                    <x-slot name='servicio'>Biblioteca</x-slot>
                    <x-slot name='frase'>El que lee mucho y anda mucho, ve mucho y sabe mucho</x-slot>
                    <x-slot name='autor'> _Miguel de Cervantes Saavedra</x-slot>
                    <x-slot name='img'>{{ asset('images/carreras/CarreraComunicacion.png') }}</x-slot>
                    <x-slot name='altImg'>Servicio de Biblioteca</x-slot>
                    <x-slot name='parrafo'>
                        <p class="grid sm:px-6 lg:px-22 xl:px-32">
                            <span>El servicio de Biblioteca tiene como objetivo fomentar el acceso a la información, promover la lectura y contribuir al desarrollo académico y cultural de la comunidad educativa del "IESPP-JFSC Huamachuco". Nuestra misión es proporcionar recursos y servicios que apoyen el aprendizaje, la investigación y el enriquecimiento personal.</span> <br>
                            <span>Además, nos esforzamos por crear un ambiente acogedor y propicio para el estudio individual y colaborativo. La biblioteca no solo es un depósito de libros, sino un centro dinámico que busca apoyar el desarrollo integral de nuestros estudiantes.</span>
                        </p>
                    </x-slot>
                </x-services>
            </div>
            <div class="bg-[#3477db]" id="catalago">
                <div class="render">
                    <div class="grid gap-5 py-32 lg:gap-10 xl:gap-20">
                        <div class="text-white text-center">
                            <h3 class="subtitle">Cat&aacute;logo de libros por programa de Estudios</h3>
                            <span>(Biblioteca Fisica)</span>
                        </div>
                        <div class="grid grid-colum-1 sm:flex justify-center gap-5">
                            <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border card-animation">
                                <div class="my-4 text-white sm:h-[150px]">
                                    <i class='bx bx-child text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                                    <span>Educaci&oacute;n Inicial</span><br>
                                </div>
                                <x-button type="primary" ruta="#">Ver Cat&aacute;logo</x-button>
                            </div>
                            <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border card-animation">
                                <div class="my-4 text-white sm:h-[150px]">
                                    <i class='bx bx-hive text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                                    <span>Idiomas, Especilidad: Ingles</span><br>
                                </div>
                                <x-button type="primary" ruta="#">Ver Cat&aacute;logo</x-button>
                            </div>
                            <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border card-animation">
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
                                <div class="sm:border-l border-l-[#3477db] sm:h-full sm:flex items-center sm:px-5"><span class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">La atenci&oacute;n es de 7:15am a 1:00pm</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="responsable">
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
                        <x-slot name="titleRedes">S&iacute;genos en</x-slot>
                    </x-card-servicios>
                </div>
            </div>
            <div class="render py-16" id="preguntas">
                <div class="grid gap-6">
                    <div>
                        <h5 class="subtitle">Preguntas frecuentes sobre el Servicio de Biblioteca</h5>
                    </div>
                    <div class="desplegable_servicios grid gap-4">
                        <div class="desplegable-item">
                            <div class="desplegable-item__content">
                                <div class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                                    <i class='bx bx-plus'></i>
                                </div>
                                <div class="desplegable-item-list"><span>¿CÓMO PUEDO OBTENER EL SERVICO?</span></div>
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
                                <div class="desplegable-item-list"><span>¿QUÉ MATERIALES PUEDO TOMAR PRESTADOS?</span></div>
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
                                <div class="desplegable-item-list"><span>¿HAY UN LÍMITE EN LA CANTIDAD DE MATERIALES QUE PUEDO TOMAR PRESTADOS?</span></div>
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
                                <div class="desplegable-item-list"><span>¿QUÉ HACER SI PIERDO UN LIBRO O MATERIAL PRESTADO?</span></div>
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
                                <div class="desplegable-item-list"><span>¿HAY ESPACIOS DE ESTUDIO GRUPAL DISPONIBLES EN LA BIBLIOTECA?</span></div>
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
                                <div class="desplegable-item-list"><span>¿CÓMO PUEDO SUGERIR LA ADQUISICIÓN DE NUEVOS LIBROS O MATERIALES?</span></div>
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
                                <div class="desplegable-item-list"><span>¿PUEDO ACCEDER A SERVICIOS DE BIBLIOTECA SI NO SOY ESTUDIANTE?</span></div>
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
