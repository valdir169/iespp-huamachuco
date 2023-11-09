@extends('layout.app')

@section('title','Modalidad de Admisión')
@section('content')
    <section>
        <x-modal
            img="{{ asset('images/admision/bg_iespp-jfsc.jpg') }}"
            link="{{ route('admision') }}"
            linkText="Admisión"
            linkTitle="{{ route('modalidad_admision') }}"
            Title="Modalidad de Admisión"
            Content="Nosotros ofrecemos diferentes tipos de modalidades para  los que van ha postular y formar parte de nuestra familia estudiantil."
        />
    </section>
    <section class="preparate-tabs py-10">
        <section class="tabs preparation flex items-center flex-col gap-5 lg:gap-10 2xl:gap-30">
            <!-- Nav tabs -->
            <div class="tabs-container flex justify-center items-center w-full sm:border-y">
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
            <div class="tabs-info render my-5 lg:my-12">
                <div class="container">
                    <div class="tab-content active" id="tab1">
                        <div class="flex justify-center items-center flex-col">
                            <div class="flex justify-center items-center gap-16 flex-col lg:gap-36">
                                <div class="flex gap-20 w-full flex-col">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad por Exoneración</span>
                                        <p>Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between"">
                                        <div>
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Primeros y segundos puestos de las instituciones educativas de Educación básica (4 vacantes ).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Egresados del COAR (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Deportistas Calificados “Representación nacional” (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Estudiantes Con discapacidad (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Soldados del ejercito peruano que se encuentran en servicio (1 vacante).</span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">8</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-20 w-full flex-col ">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad Academia de Preparación</span>
                                        <p>Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between">
                                        <div class="">
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Primero y segundo puesto de los exámenes sumatorios que se realizan en la academia de preparación del IESPP-JFSC Huamachuco.</span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">2</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-20 w-full flex-col">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad Examen de Ordinario</span>
                                        <p>Esta dirigido a todos los las personas que culminaron la secundaria y los que se prepararon en la academia que brindo la institución.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between">
                                        <div>
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li><span>Examen ordinario (Presencial en aulas de IESPP-Huamchuco):</span>
                                                    <ul class="pl-8 mt-2">
                                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Evaluación de competencias fundamentales (Ingreso Ordinario).</span></li>
                                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="h-auto">
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">50</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-20 w-full">
                                <div class="sm:flex h-[140px]">
                                    <div class="h-[70px] flex justify-center items-center bg-[#d9d9d9] sm:h-full sm:w-1/2 px-2"><span>Total de vacantes en <span class="font-black">Educaci&oacute;n Inicial</span></span></div>
                                    <div class="h-[70px] flex justify-center items-center bg-[#2277db] sm:h-full sm:w-1/2"><p class="font-black text-2xl text-white flex items-center gap-5 sm:text-4xl lg:text-6xl"><i class='bx bxs-user'></i><span>60</span></p></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class=" py-5 lg:py-24">
                                        <x-table>
                                            <tr class="row-col">
                                                <td class="colum-table">Formación General</td>
                                                <td class="colum-table">17</td>
                                                <td class="colum-table">24</td>
                                                <td class="colum-table">24</td>
                                                <td class="colum-table">24</td>
                                                <td class="colum-table">12</td>
                                                <td class="colum-table">48</td>
                                                <td class="colum-table">36</td>
                                            </tr>
                                            <tr class="row-col" >
                                                <td class="colum-table">Formación en la Práctica e Investigación</td>
                                                <td class="colum-table">10</td>
                                                <td class="colum-table">40</td>
                                                <td class="colum-table">40</td>
                                                <td class="colum-table">70</td>
                                                <td class="colum-table">35</td>
                                                <td class="colum-table">110</td>
                                                <td class="colum-table">75</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Formación Específica</td>
                                                <td class="colum-table">22</td>
                                                <td class="colum-table">68</td>
                                                <td class="colum-table">68</td>
                                                <td class="colum-table">58</td>
                                                <td class="colum-table">29</td>
                                                <td class="colum-table">126</td>
                                                <td class="colum-table">97</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Electivos</td>
                                                <td class="colum-table">6</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">4</td>
                                                <td class="colum-table">16</td>
                                                <td class="colum-table">12</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Total general </td>
                                                <td class="colum-table">55
                                                </td>
                                                <td class="colum-table">140</td>
                                                <td class="colum-table">140</td>
                                                <td class="colum-table">160</td>
                                                <td class="colum-table">80</td>
                                                <td class="colum-table">300</td>
                                                <td class="colum-table">220</td>
                                            </tr>
                                        </x-table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tab2">
                        <div class="flex justify-center items-center flex-col">
                            <div class="flex justify-center items-center gap-16 flex-col lg:gap-36">
                                <div class="flex gap-20 w-full flex-col">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad por Exoneración</span>
                                        <p>Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between"">
                                        <div>
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Primeros y segundos puestos de las instituciones educativas de Educación básica (2 vacantes ).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Egresados del COAR (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Deportistas Calificados “Representación nacional” (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Estudiantes Con discapacidad (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Soldados del ejercito peruano que se encuentran en servicio (1 vacante).</span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">6</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-20 sm:w-full flex-col ">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad Academia de Preparación</span>
                                        <p >Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between">
                                        <div class="">
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Primer puesto de los exámenes sumatorios que se realizan en la academia de preparación del IESPP-JFSC Huamachuco.</span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">1</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-20 w-full flex-col">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad Examen de Ordinario</span>
                                        <p>Esta dirigido a todos los las personas que culminaron la secundaria y los que se prepararon en la academia que brindo la institución.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between">
                                        <div class="">
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li><span>Examen ordinario (Presencial en aulas de IESPP-Huamchuco):</span>
                                                    <ul class="pl-8 mt-2">
                                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Evaluación de competencias fundamentales (Ingreso Ordinario).</span></li>
                                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="h-auto">
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">23</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-20 w-full">
                                <div class="sm:flex h-[140px]">
                                    <div class="h-[70px] flex justify-center items-center bg-[#d9d9d9] sm:h-full sm:w-1/2 px-2"><span>Total de vacantes en <span class="font-black">Idiomas, Especilidad: Ingles</span></span></div>
                                    <div class="h-[70px] flex justify-center items-center bg-[#2277db] sm:h-full sm:w-1/2"><p class="font-black text-2xl text-white flex items-center gap-5 sm:text-4xl lg:text-6xl"><i class='bx bxs-user'></i><span>30</span></p></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class=" py-5 lg:py-24">
                                        <x-table>
                                            <tr class="row-col">
                                                <td class="colum-table">Formación General</td>
                                                <td class="colum-table">12</td>
                                                <td class="colum-table">24</td>
                                                <td class="colum-table">24</td>
                                                <td class="colum-table">24</td>
                                                <td class="colum-table">12</td>
                                                <td class="colum-table">48</td>
                                                <td class="colum-table">36</td>
                                            </tr>
                                            <tr class="row-col" >
                                                <td class="colum-table">Formación en la Práctica e Investigación</td>
                                                <td class="colum-table">10</td>
                                                <td class="colum-table">40</td>
                                                <td class="colum-table">40</td>
                                                <td class="colum-table">70</td>
                                                <td class="colum-table">35</td>
                                                <td class="colum-table">110</td>
                                                <td class="colum-table">75</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Formación Específica</td>
                                                <td class="colum-table">25</td>
                                                <td class="colum-table">68</td>
                                                <td class="colum-table">68</td>
                                                <td class="colum-table">58</td>
                                                <td class="colum-table">29</td>
                                                <td class="colum-table">126</td>
                                                <td class="colum-table">97</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Electivos</td>
                                                <td class="colum-table">4</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">4</td>
                                                <td class="colum-table">16</td>
                                                <td class="colum-table">12</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Total general </td>
                                                <td class="colum-table">51</td>
                                                <td class="colum-table">140</td>
                                                <td class="colum-table">140</td>
                                                <td class="colum-table">160</td>
                                                <td class="colum-table">80</td>
                                                <td class="colum-table">300</td>
                                                <td class="colum-table">220</td>
                                            </tr>
                                        </x-table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tab3">
                        <div class="flex justify-center items-center flex-col">
                            <div class="flex justify-center items-center gap-16 flex-col lg:gap-36">
                                <div class="flex gap-20 w-full flex-col">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad por Exoneración</span>
                                        <p>Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between"">
                                        <div class="">
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Primeros y segundos puestos de las instituciones educativas de Educación básica (2 vacantes ).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Egresados del COAR (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Deportistas Calificados “Representación nacional” (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Estudiantes Con discapacidad (1 vacante).</span></li>
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Soldados del ejercito peruano que se encuentran en servicio (1 vacante).</span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">6</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-20 sm:w-full flex-col ">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad Academia de Preparación</span>
                                        <p>Las personas que cumplen con los siguientes requisitos para esta modalidad no rinden en examen ordinario.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between">
                                        <div class="">
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Para este programa de estudios de nivel superior, no se cuenta con beneficio de examen ordinario.</span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">0</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-20 w-full flex-col">
                                    <div class="grid gap-2">
                                        <span class="font-black border-b border-[#3477db] py-1 w-full sm:w-2/5 lg:w-3/5 xl:w-1/2 subtitle">Modalidad Examen de Ordinario</span>
                                        <p>Esta dirigido a todos los las personas que culminaron la secundaria y los que se prepararon en la academia que brindo la institución.</p>
                                    </div>
                                    <div class="grid gap-4 sm:flex items-center justify-between">
                                        <div class="">
                                            <ul class="pl-5 lg:pl-10 2xl:pl-24">
                                                <li><span>Examen ordinario (Presencial en aulas de IESPP-Huamchuco):</span>
                                                    <ul class="pl-8 mt-2">
                                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Evaluación de competencias fundamentales (Ingreso Ordinario).</span></li>
                                                        <li class="flex"><i class='bx bx-check-square pr-2 sm:pr-3 text-[25px]'></i><span>Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="h-auto">
                                            <p class="h-[80px] flex justify-center items-center flex-col bg-[#d9d9d9] py-2 sm:w-[200px] sm:h-[200px]"><span class="text-2xl font-black sm:text-3xl lg:text-4xl">24</span><span class="text-xs sm:text-sm lg:text-base">Vacantes</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-20 w-full">
                                <div class="sm:flex h-[140px]">
                                    <div class="h-[70px] flex justify-center items-center bg-[#d9d9d9] sm:h-full sm:w-1/2 px-2"><span>Total de vacantes en <span class="font-black">Educaci&oacute;n Secundaria, Especilidad: Comunicaci&oacute;n</span></span></div>
                                    <div class="h-[70px] flex justify-center items-center bg-[#2277db] sm:h-full sm:w-1/2"><p class="font-black text-2xl text-white flex items-center gap-5 sm:text-4xl lg:text-6xl"><i class='bx bxs-user'></i><span>30</span></p></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class=" py-5 lg:py-24">
                                        <x-table>
                                            <tr class="row-col">
                                                <td class="colum-table">Formación General</td>
                                                <td class="colum-table">14</td>
                                                <td class="colum-table">30</td>
                                                <td class="colum-table">30</td>
                                                <td class="colum-table">28</td>
                                                <td class="colum-table">14</td>
                                                <td class="colum-table">58</td>
                                                <td class="colum-table">44</td>
                                            </tr>
                                            <tr class="row-col" >
                                                <td class="colum-table">Formación en la Práctica e Investigación</td>
                                                <td class="colum-table">10</td>
                                                <td class="colum-table">40</td>
                                                <td class="colum-table">40</td>
                                                <td class="colum-table">70</td>
                                                <td class="colum-table">35</td>
                                                <td class="colum-table">110</td>
                                                <td class="colum-table">75</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Formación Específica</td>
                                                <td class="colum-table">27</td>
                                                <td class="colum-table">62</td>
                                                <td class="colum-table">62</td>
                                                <td class="colum-table">54</td>
                                                <td class="colum-table">27</td>
                                                <td class="colum-table">116</td>
                                                <td class="colum-table">89</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Electivos</td>
                                                <td class="colum-table">4</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">8</td>
                                                <td class="colum-table">4</td>
                                                <td class="colum-table">16</td>
                                                <td class="colum-table">12</td>
                                            </tr>
                                            <tr class="row-col">
                                                <td class="colum-table">Total general </td>
                                                <td class="colum-table">55</td>
                                                <td class="colum-table">140</td>
                                                <td class="colum-table">140</td>
                                                <td class="colum-table">160</td>
                                                <td class="colum-table">80</td>
                                                <td class="colum-table">300</td>
                                                <td class="colum-table">220</td>
                                            </tr>
                                        </x-table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <article class="render mb-5 md:mb-10">
            <div class="border-2 border-[#d9d9d9] p-3 grid gap-4 sm:flex justify-center items-center sm:gap-5 lg:gap-10 2xl:gap-30 card-animation">
                <span class="min-w-[55px] min-h-[55px] flex items-center justify-center bg-[#d9d9d9] rounded-full font-black text-2xl lg:text-3xl 2xl:text-5xl 2xl:min-w-[80px] 2xl:min-h-[80px] ">!</span>
                <p>Los postulantes que no ingresan al IESPP-JFSC Humachuco,  a traves de cada modalidad que ofrecemos, tienen una semana para recoger sus documentos,  atte. Dirección.</p>
            </div>
        </article>
    </section>
    <section>
        <article class="border-t border-[#d9d9d9">
            <div class="render mb-8 pt-6">
            <x-sublinks
            :title="'Te Puede Interesar...'"
            :links='[
                "Conoce Nuestras Carreras" => route("admision"),
                "Requisitos de Matrícula" => route("ingles"),
                "Academia Institucional" => route("academia"),
                "Contactános" => route("contacto")
            ]'
            />
        </article>
    </section>
@endsection
