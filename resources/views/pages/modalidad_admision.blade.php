@extends('layout.app')

@section('title','Modalidad de Admisión')
@section('content')
    <section>
        <div class="render h-[300px] py-4 sm:h-[400px] lg:h-[500px] xl:h-[600px]">
            <div class="">
                <div>
                    <a class="text-[#D9D9D9] text-xs lg:sm" href="">Inicio</a><span class="px-3">/</span>
                    <a class="text-[#D9D9D9] text-xs lg:sm" href="{{route('admision')}}">admisi&oacute;n</a><span class="px-3">/</span>
                    <a class=" text-xs lg:sm" href="">Modalidad de Admisi&oacute;n</a>
                </div>
                <div class="text-xs pt-[100px] sm:pt-[200px] md:pl-[3rem] lg:pt-[300px] lg:w-[700px] lg:pl-[6rem] xl:pt-[400px]">
                    <span class="text-base font-black md:text-xl lg:text-3xl 2xl:text-4xl">Modalidad de Admisión</span>
                    <p class="lg:text-sm">Nosotros ofrecemos diferentes tipos de modalidades para  los que van ha postular y formar parte de nuestra familia estudiantil.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="preparate-tabs py-10">
        <section class="tabs preparation grid gap-5 lg:gap-10 2xl:gap-30">
            <!-- Nav tabs -->
            <div class="tabs-container flex justify-center items-center sm:border-y">
                <div class="container render">
                    <div class="row">
                        <ul class="nav nav-tabs grid grid-cols-2 min-[400px]:grid-cols-3">
                            <li class="h-[120px] active lg:h-[150px]">
                                <a class="h-full" href="#tab1">
                                    <p class="flex justify-center items-center flex-col"><i class='bx bx-child text-[2rem] lg:text-[3rem]'></i><span class="text-xs text-center lg:text-sm">Educaci&oacute;n Inicial</span></p>
                                </a>
                            </li>
                            <li class="h-[120px] lg:h-[150px]">
                                <a class="h-full" href="#tab2">
                                    <p class="flex justify-center items-center flex-col"><i class='bx bx-hive text-[2rem] lg:text-[3rem]'></i><span class="text-xs text-center lg:text-sm">Idiomas, Especialidad: Ingles</span></p>
                                </a>
                            </li>
                            <li class="h-[120px] lg:h-[150px]">
                                <a class="h-full" href="#tab3">
                                    <p class="flex justify-center items-center flex-col"><i class='bx bx-user-voice text-[2rem] lg:text-[3rem]'></i><span class="text-xs text-center lg:text-sm">Educación Secundaria, Especialidad: Comunicación</span></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tabs-info render">
                <div class="container">
                    <div class="tab-content active" id="tab1">
                        <div class="grid gap-4 lg:gap-8 2xl:gap-16">
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad por Exoneración</span>
                                <p class="text-xs lg:text-sm">Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Primeros y segundos puestos de las instituciones educativas de Educación básica (4 vacantes ).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Egresados del COAR (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Deportistas Calificados “Representación nacional” (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Estudiantes Con discapacidad (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Soldados del ejercito peruano que se encuentran en servicio (1 vacante).</span></li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">8</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad Academia de Preparación</span>
                                <p class="text-xs lg:text-sm">Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Primero y segundo puesto de los exámenes sumatorios que se realizar en la academia de preparación.</span></li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">2</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad Examen de Ordinario</span>
                                <p class="text-xs lg:text-sm">Esta dirigido a todos los las personas que culminaron la secundaria y los que se prepararon en la academia que brindo la institución.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li><span>Examen ordinario (Presencial en aulas de IESPP-Huamchuco):</span>
                                            <ul class="pl-8 mt-2">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Evaluación de competencias fundamentales (Ingreso Ordinario).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">50</span><span class="text-x sm:text-sm lg:text-bases">Vacantes</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="py-10 h-[240px] sm:flex">
                            <div class="h-[70px] flex justify-center items-center bg-[#d9d9d9] sm:h-full sm:w-1/2"><span class="text-sm text-center lg:text-base">Total de vacantes en <span class="font-black">Educaci&oacute;n Inicial</span></span></div>
                            <div class="h-[70px] flex justify-center items-center bg-[#2277db] sm:h-full sm:w-1/2"><p class="font-black text-2xl text-white flex items-center gap-5 sm:text-3xl lg:text-4xl"><i class='bx bxs-user'></i><span>60</span></p></div>
                        </div>
                    </div>
                    <div class="tab-content" id="tab2">
                        <div class="grid gap-4 lg:gap-8 2xl:gap-16">
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad por Exoneración</span>
                                <p class="text-xs lg:text-sm">Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Primeros y segundos puestos de las instituciones educativas de Educación básica (2 vacantes ).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Egresados del COAR (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Deportistas Calificados “Representación nacional” (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Estudiantes Con discapacidad (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Soldados del ejercito peruano que se encuentran en servicio (1 vacante).</span></li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">6</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad Academia de Preparación</span>
                                <p class="text-xs lg:text-sm">Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Primer puesto de los exámenes sumatorios que se realizar en la academia de preparación.</span></li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">1</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad Examen de Ordinario</span>
                                <p class="text-xs lg:text-sm">Esta dirigido a todos los las personas que culminaron la secundaria y los que se prepararon en la academia que brindo la institución.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li><span>Examen ordinario (Presencial en aulas de IESPP-Huamchuco):</span>
                                            <ul class="pl-8 mt-2">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Evaluación de competencias fundamentales (Ingreso Ordinario).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">23</span><span class="text-x sm:text-sm lg:text-bases">Vacantes</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="py-10 h-[240px] sm:flex">
                            <div class="h-[70px] flex justify-center items-center bg-[#d9d9d9] sm:h-full sm:w-1/2"><span class="text-sm text-center lg:text-base">Total de vacantes en <span class="font-black">Idiomas, Especialidad: Ingles</span></span></div>
                            <div class="h-[70px] flex justify-center items-center bg-[#2277db] sm:h-full sm:w-1/2"><p class="font-black text-2xl text-white flex items-center gap-5 sm:text-3xl lg:text-4xl"><i class='bx bxs-user'></i><span>30</span></p></div>
                        </div>
                    </div>
                    <div class="tab-content" id="tab3">
                        <div class="grid gap-4 lg:gap-8 2xl:gap-16">
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad por Exoneración</span>
                                <p class="text-xs lg:text-sm">Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Primeros y segundos puestos de las instituciones educativas de Educación básica (2 vacantes ).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Egresados del COAR (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Deportistas Calificados “Representación nacional” (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Estudiantes Con discapacidad (1 vacante).</span></li>
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Soldados del ejercito peruano que se encuentran en servicio (1 vacante).</span></li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">6</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad Academia de Preparación</span>
                                <p class="text-xs lg:text-sm">Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Para esta carrera porfecional no se cuenta con beneficio de examen ordinario.</span></li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">0</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Modalidad Examen de Ordinario</span>
                                <p class="text-xs lg:text-sm">Esta dirigido a todos los las personas que culminaron la secundaria y los que se prepararon en la academia que brindo la institución.</p>
                                <div class="grid gap-2 sm:flex items-center sm:h-[180px] sm:mt-5 lg:mt-10 lg:h-[200px]">
                                    <ul class="text-xs pl-5 lg:text-sm lg:pl-10 2xl:pl-24 lg:w-2/3">
                                        <li><span>Examen ordinario (Presencial en aulas de IESPP-Huamchuco):</span>
                                            <ul class="pl-8 mt-2">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Evaluación de competencias fundamentales (Ingreso Ordinario).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 sm:text-lg 2xl:text-xl'></i><span>Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-full"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">24</span><span class="text-x sm:text-sm lg:text-bases">Vacantes</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="py-10 h-[240px] sm:flex">
                            <div class="h-[70px] flex justify-center items-center bg-[#d9d9d9] sm:h-full sm:w-1/2"><span class="text-sm text-center lg:text-base">Total de vacantes en <span class="font-black">Educaci&oacute;n Secundaria, Especialidad: Comunicaci&oacute;n </span></span></div>
                            <div class="h-[70px] flex justify-center items-center bg-[#2277db] sm:h-full sm:w-1/2"><p class="font-black text-2xl text-white flex items-center gap-5 sm:text-3xl lg:text-4xl"><i class='bx bxs-user'></i><span>30</span></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <article class="render mb-5 md:mb-10">
            <div class="border-2 border-[#d9d9d9] p-3 grid gap-4 sm:flex justify-center items-center sm:gap-5 lg:gap-10 2xl:gap-30">
                <span class="min-w-[55px] min-h-[55px] flex items-center justify-center bg-[#d9d9d9] rounded-full font-black text-2xl lg:text-3xl 2xl:text-5xl 2xl:min-w-[80px] 2xl:min-h-[80px] ">!</span>
                <p class="text-xs sm:text-sm lg:text-base">Los postulantes que no ingresan al IESPP-JFSC Humachuco,  a traves de cada modalidad que ofrecemos, tienen una semana para recoger sus documentos,  atte. Dirección.</p>
            </div>
        </article>
    </section>
    <section>
        <article class="border-t border-[#d9d9d9">
            <div class="render mb-8 pt-6">
                <span class="text-sm font-black sm:text-base lg:text-xl 2xl:text-2xl">Te puede interesar...</span>
                <ul class="text-xs mt-2 sm:text-sm">
                    <li><a class="hover:text-[#3277db]" href="{{route('carreras')}}">Conoce Nuestras Carreras</a></li>
                    <li><a class="hover:text-[#3277db]" href="#">Requisitos de matricula</a></li>
                    <li><a class="hover:text-[#3277db]" href="#">Academia Institucional</a></li>
                    <li><a class="hover:text-[#3277db]" href="#">Campus Institucional</a></li>
                </ul>
            </div>
        </article>
    </section>
@endsection