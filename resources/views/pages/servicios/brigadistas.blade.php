@extends('layout.app')

@section('title', 'Capacitacion de prevencion de riesgos ambientales')

@section('content')
    <x-hero image="{{ asset('images/servicios/brigadas.jpg') }}" text="Capacitacion de Brigadistas" />
    <section>
        <article>
            <div class="render py-16 grid gap-8 sm:gap-16 lg:py-28">
                <div class="text-center border-b border-b-[#ebebeb] pb-20">
                    <span class="title">Bienvenido al servicio de Brigadas de Educación Ambiental y de Gestión del riesgo de desastres</span>
                </div>
                <div class="flex flex-col gap-8 sm:flex-row md:gap-20 lg:gap-36">
                    <div class="flex flex-col items-center justify-center gap-8 sm:w-1/2">
                        <div><span class="font-[Roboto-thin] text-xl font-semibold">Desarrolla Habilidades en:</span></div>
                        <div class="grid gap-4 lg:grid-cols-2">
                            <div class="p-2 grid gap-2 bg-[#3477db] text-white rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div><span>Asistencia</span></div>
                                    <div><i class='bx bx-handicap text-[40px]'></i></div>
                                </div>
                                <div><p class="font-[Roboto-thin]">Brindar Asistencia Inmediata en Situaciones de Emergencia.</p></div>
                            </div>
                            
                            <div class="p-3 grid gap-2 bg-[#3477db] text-white rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div><span>Prevención</span></div>
                                    <div><i class='bx bxs-landscape text-[40px]' ></i></div>
                                </div>
                                <div><p class="font-[Roboto-thin]">Impulsar Iniciativas de Prevención Ambiental y de Riesgos.</p></div>
                            </div>
    
                            <div class="p-3 grid gap-2 bg-[#3477db] text-white rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div><span>Seguridad</span></div>
                                    <div><i class='bx bx-shield-quarter text-[40px]'></i></div>
                                </div>
                                <div><p class="font-[Roboto-thin]">Garantizar la Seguridad a través de Brigadas Especializadas.</p></div>
                            </div>
    
                            <div class="p-3 grid gap-2 bg-[#3477db] text-white rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div><span>Bienestar</span></div>
                                    <div><i class='bx bx-male-female text-[40px]'></i></div>
                                </div>
                                <div><p class="font-[Roboto-thin]">Cultivar un Entorno Educativo que Promueva el Bienestar Integral.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center flex-col gap-8 sm:w-1/2">
                        <div class="flex w-[300px]"><img src="{{asset('images/carreras/CarreraComunicacion.png')}}" alt=""></div>
                        <div>
                            <div><span class="font-[Roboto-thin] text-xl font-semibold">Brigadas de Educación Ambiental y de Gestión del riesgo de desastres</span></div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span>En nuestra institución, no solo formamos profesionales de la educación, sino también ciudadanos comprometidos y preparados para enfrentar cualquier eventualidad que pueda afectar nuestra comunidad.</span>
                            <span>A través de las Brigadas, nos enfocamos en cultivar habilidades cruciales, desde responder eficazmente en emergencias hasta fomentar una profunda conciencia ambiental. Esto implica la capacidad de administrar primeros auxilios, participar en evacuaciones y desarrollar destrezas de rescate.</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="bg-[#ebebeb] py-16 lg:py-28">
                <div class="render flex flex-col gap-8 lg:gap-16">
                    <div class="text-center">
                        <span class="subtitle">Capac&iacute;tate en las siguientes brigadas</span>
                    </div>
                    <div class="relative">
                        <div class="brigadas myBrigadas grid gap-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brig_content">
                                        <div class="card_brig" id="primeros-auxilios">
                                            <div class="title_brig">
                                                <i class='bx bxs-first-aid text-[70px] text-[#3477db]' ></i>
                                                <h2 class="font-bold text-black">Brigada de Primeros Auxilios</h2>
                                            </div>
                                            <div class="info_desc-Brig flex flex-col gap-3">
                                                <p class="text-center"><strong>Responsabilidades:</strong></p>
                                                <ul class="text-start flex flex-col gap-2">
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Proporcionar atención médica inicial.</span></li>
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Evaluar y responder a situaciones de emergencia médica.</span></li>
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Mantener botiquines de primeros auxilios.</span></li>
                                                </ul>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
            
                                <div class="swiper-slide">
                                    <div class="brig_content">
                                        <div class="card_brig" id="primeros-auxilios">
                                            <div class="title_brig">
                                                <i class='bx bxs-hot text-[70px] text-[#3477db]' ></i>
                                                <h2 class="font-bold text-black">Brigada contraincendios</h2>
                                            </div>
                                            <div class="info_desc-Brig flex flex-col gap-3">
                                                <p class="text-center"><strong>Responsabilidades:</strong></p>
                                                <ul class="text-start flex flex-col gap-2">
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Prevenir, controlar y extinguir incendios.</span></li>
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Capacitar en el uso de extintores y equipos de seguridad contra incendios.</span></li>
                                                </ul>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
            
                                <div class="swiper-slide">
                                    <div class="brig_content">
                                        <div class="card_brig" id="primeros-auxilios">
                                            <div class="title_brig">
                                                <i class='bx bxs-leaf text-[70px] text-[#3477db]'></i>
                                                <h2 class="font-bold text-black">Brigada Ambiental</h2>
                                            </div>
                                            <div class="info_desc-Brig flex flex-col gap-3">
                                                <p class="text-center"><strong>Responsabilidades:</strong></p>
                                                <ul class="text-start flex flex-col gap-2">
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Promover prácticas sostenibles.</span></li>
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span> Participar en actividades de conservación y limpieza ambiental.</span></li>
                                                </ul>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
            
                                <div class="swiper-slide">
                                    <div class="brig_content">
                                        <div class="card_brig" id="primeros-auxilios">
                                            <div class="title_brig">
                                                <i class='bx bxs-ambulance text-[70px] text-[#3477db]'></i>
                                                <h2 class="font-bold text-black">Brigada de Evacuación y Rescate</h2>
                                            </div>
                                            <div class="info_desc-Brig flex flex-col gap-3">
                                                <p class="text-center"><strong>Responsabilidades:</strong></p>
                                                <ul class="text-start flex flex-col gap-2">
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Organizar y ejecutar evacuaciones de emergencia.</span></li>
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Realizar operaciones de rescate en situaciones críticas.</span></li>
                                                </ul>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brig_content">
                                        <div class="card_brig" id="primeros-auxilios">
                                            <div class="title_brig">
                                                <i class='bx bxs-happy text-[70px] text-[#3477db]' ></i>
                                                <h2 class="font-bold text-black">Brigada de Soporte Socio-Emocional</h2>
                                            </div>
                                            <div class="info_desc-Brig flex flex-col gap-3">
                                                <p class="text-center"><strong>Responsabilidades:</strong></p>
                                                <ul class="text-start flex flex-col gap-2">
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Brindar apoyo emocional en situaciones de crisis.</span></li>
                                                    <li class="flex items-center gap-3"><i class='bx bx-slider-alt text-[30px]'></i><span>Facilitar recursos y asistencia para el bienestar socioemocional.</span></li>
                                                </ul>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="text-center"><span>¡Formamos profesionales de la educación con una cultura ambiental y capaces de prevenir y enfrentar circunstancias adversas como las emergencias y desastres!</span></div>
                </div>
            </div>
        </article>
        <article>
            <div class="py-16">
                <div class="render">
                    <div class="flex flex-col gap-8 lg:gap-16 2xl:gap-36">
                        <div><span class="title">Contamos con el apoyo de:</span></div>
                        <div class="flex flex-col gap-16 sm:flex-row 2xl:gap-32">
                            <div class="flex flex-col items-center gap-8 border border-[#ebebeb] p-3 sm:w-1/2 lg:flex-row lg:gap-4">
                                <div class="flex flex-col gap-4 text-center">
                                    <span class="font-bold">Serenazgo Huamachuco</span>
                                    <span>Capacitan a los estudiantes en medidas de seguridad ambiental, procedimientos de evacuación y soporte emocional en situaciones de crisis.</span>
                                </div>
                                <div class="flex items-center justify-center"><img class="max-w-[250px] max-h-[200px]" src="{{ asset('images/servicios/Serenazgo.png') }}" alt="Serenazgo"></div>
                            </div>
                            <div class="flex flex-col items-center gap-8 border border-[#ebebeb] p-3 sm:w-1/2 lg:flex-row lg:gap-4">
                                <div class="flex flex-col gap-4 text-center">
                                    <span class="font-bold">Ejército Del Perú</span>
                                    <span>Batallón de Infantería Motorizado (BIM) 323 "Oscar de la Barrera", realiza simulacros y ejercicios prácticos para enseñar a los estudiantes técnicas efectivas en situaciones de emergencia. </span>  
                                </div>
                                <div class="flex items-center justify-center"><img class="max-w-[250px] max-h-[200px]" src="{{ asset('images/servicios/Ejercito_Perú.png') }}" alt="Ejercito_Perú"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
