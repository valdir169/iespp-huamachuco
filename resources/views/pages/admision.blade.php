@extends('layout.app')

@section('title', 'Admisión IESPP-Humachuco')

@section('content')
    <section class="bg-gray-400 sm:mt-14 lg:mt-0">
        <div class="render py-10">
            <div class="grid gap-5 sm:max-w-[55%] md:h-[32rem] md:gap-0">
                <div class="pt-20 md:pt-72">
                    <h1 class="text-sm font-black md:text-xl md:text-2xl xl:text-3xl  2xl:text-4xl">Admisión 2024</h1>
                    <h1 class="text-sm font-black border-b pb-2 md:text-xl md:text-2xl xl:text-3xl  2xl:text-4xl">INSCRIPCIONES ABIERTAS!!!</h1>
                </div>
                <div class="md:pb-20">
                    <span class="text-xs pr-4 font-semibold md:text-base xl:text-xl xl:pr-10">Cierre de Inscripciones:</span><span class="text-xs md:text-base xl:text-xl">20 de Enero.</span><br>
                    <span class="text-xs pr-4 font-semibold md:text-base xl:text-xl xl:pr-10">Inicio de Inscripciones:</span><span class="text-xs md:text-base xl:text-xl">20 de Enero.</span><br>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class="py-10 bg-[#3477db] lg:bg-white lg:flex justify-center items-center">
            <div class="lg:bg-[#d9d9d9] lg:w-[62rem] lg:h-[10rem] lg:flex justify-center items-center lg:-mt-32">
                <div class="grid gap-4">
                    <div class="flex justify-center items-center">
                        <small class="text-center font-black text-sm md:text-xl xl:text-2xl">Admisión IESPP - HUMACHUCO</small>
                    </div>
                    <div class="grid gap-2 text-center sm:grid-cols-2 md:flex justify-center items-center">
                        <div class=""><a href="#" class="text-xs md:border-r-2 px-3 py-2 lg:text-base xl:text-lg lg:text-[#3477db] lg:border-[#000000]">Carreras Profecionales</a></div>
                        <div class=""><a href="#" class="text-xs md:border-r-2 px-3 py-2 lg:text-base xl:text-lg lg:text-[#3477db] lg:border-[#000000]">Modalidad de Admisión</a></div>
                        <div class=""><a href="#" class="text-xs md:border-r-2 px-3 py-2 lg:text-base xl:text-lg lg:text-[#3477db] lg:border-[#000000]">Requisitos de Matricula</a></div>
                        <div class=""><a href="#" class="text-xs sm:px-3 py-2 lg:text-base xl:text-lg lg:text-[#3477db]">Campus Institucional</a></div>
                    </div>        
                </div>
            </div>
        </div>
        <div class="render py-10 grid gap-8">
            <div class="">
                <small class="text-sm font-black text-[#3477db] pb-4 sm:text-lg md:text-xl xl:text-3xl">Modalidad admisión</small>
                <p class="text-xs sm:text-sm md:text-base xl:text-xl">Te ofrecemos distintas opciones al momento que postulas a una de nuestras carreras profecionales.</p>
            </div>
            <div class="grid gap-4 xl:gap-8">
                <div class="sm:flex justify-center items-center gap-5 sm:flex-row-reverse xl:gap-20">
                    <div class="">
                        <small class="text-sm font-black sm:text-lg md:text-xl xl:text-3xl">Excelencia Académica</small>
                        <p class="text-xs py-3 sm:text-sm md:text-base xl:text-xl 2xl:py-6">Para poder obtener este beneficio se requiere haber alcanzado en nivel secundario el primer o segundo puesto, premio de excelencia de su institución educativa.</p>
                        <div class="w-full flex justify-center 2xl:mt-8"><a href="#" class="w-full text-center bg-[#3477db] text-white py-2 px-8 rounded-lg text-xs sm:text-sm md:text-base xl:text-xl 2xl:py-3">Más Información</a></div>
                    </div>
                    <div>
                        <img class="pt-4" src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg" alt="">
                    </div>
                </div>
                <div class="sm:flex justify-center items-center gap-5 xl:gap-20">
                    <div class="">
                        <small class="text-sm font-black sm:text-lg md:text-xl xl:text-3xl">Prueba de Aptitud</small>
                        <p class="text-xs py-3 sm:text-sm md:text-base xl:text-xl 2xl:py-6">El principal objetivo de esta modalidad es seleccionar a los ingresantes que tienen las capacidades y competencias básicas para desarrollar y acceder a su carrera profesional</p>
                        <div class="w-full flex justify-center 2xl:mt-8"><a href="#" class="w-full text-center bg-[#3477db] text-white py-2 px-8 rounded-lg text-xs sm:text-sm md:text-base xl:text-xl 2xl:py-3">Más Información</a></div>
                    </div>
                    <div>
                        <img class="pt-4" src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="render py-10">
            <div class="display text-center">
                <small class="text-sm font-black text-[#2477db] sm:text-lg md:text-xl xl:text-3xl">Proceso de Admisión</small>
                <p class="text-xs pt-2 pb-8 sm:text-sm md:text-base xl:text-xl">Para ingresar al IESPP-Huamachuco debe seguir los siguientes pasos.</p>
            </div>
            <div class="grid gap-5">
                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="w-full h-[35vh] bg-[#d9d9d9] rounded-3xl 2xl:h-[44vh] 2xl:py-6">
                        <div class="w-full h-15 p-3 bg-[#2477db] flex justify-center items-center rounded-t-3xl sm:bg-[#d9d9d9]">
                            <div class="pr-4 sm:h-12 sm:w-12 sm:flex justify-center items-center sm:pr-0 sm:bg-[#2477db] rounded-full sm:mr-4 xl:w-16 xl:h-16">
                                <small class="text-xl font-black text-white text-center md:text-2xl xl:text-3xl">1</small>
                            </div>
                            <p class="text-sm font-black text-white sm:text-lg sm:text-black md:text-xl xl:text-2xl">Postula</p>
                        </div>
                        <div class="grid gap-4 p-3 lg:flex lg:px-10">
                            <div><p class="text-xs sm:text-sm 2xl:text-lg ">Realiza tu inscripción en la secretaría de nuestra institución</p></div>
                            <div class="w-full h-32 flex justify-center items-center sm:h-20"><img class="h-full" src="{{asset('images/icon/postular.png')}}" alt="icono-list"></div>
                        </div>
                    </div>
                    <div class="w-full h-[35vh] bg-[#d9d9d9] rounded-3xl 2xl:h-[44vh] 2xl:py-6">
                        <div class="w-full h-15 p-3 bg-[#2477db] flex justify-center items-center rounded-t-3xl sm:bg-[#d9d9d9]">
                            <div class="pr-4 sm:h-12 sm:w-12 sm:flex justify-center items-center sm:pr-0 sm:bg-[#2477db] rounded-full sm:mr-4 xl:w-16 xl:h-16">
                                <small class="text-xl font-black text-white text-center md:text-2xl xl:text-3xl">2</small>
                            </div>
                            <p class="text-sm font-black text-white sm:text-lg sm:text-black md:text-xl xl:text-2xl">Realiza los examenes</p>
                        </div>
                        <div class="grid gap-4 p-3 lg:flex lg:px-10">
                            <div>
                              <p class="text-xs sm:text-sm 2xl:text-lg ">1.- Evaluación de competencias fundamentales (Ingreso Ordinario).</p>
                                <p class="text-xs sm:text-sm 2xl:text-lg ">2.- Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</p>
                            </div>
                            <div class="w-full h-32 flex justify-center items-center sm:h-20"><img class="h-full" src="{{asset('images/icon/examen.png')}}" alt="icono-list"></div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="w-full h-[35vh] bg-[#d9d9d9] rounded-3xl 2xl:h-[44vh] 2xl:py-6">
                        <div class="w-full h-15 p-3 bg-[#2477db] flex justify-center items-center rounded-t-3xl sm:bg-[#d9d9d9]">
                            <div class="pr-4 sm:h-12 sm:w-12 sm:flex justify-center items-center sm:pr-0 sm:bg-[#2477db] rounded-full sm:mr-4 xl:w-16 xl:h-16">
                                <small class="text-xl font-black text-white text-center md:text-2xl xl:text-3xl">3</small>
                            </div>
                            <p class="text-sm font-black text-white sm:text-lg sm:text-black md:text-xl xl:text-2xl">Revisa tu resultado</p>
                        </div>
                        <div class="grid gap-4 p-3 lg:flex lg:px-10">
                            <div><p class="text-xs sm:text-sm 2xl:text-lg ">Los resultados son publicados en las redes sociales y también en la institución.</p></div>
                            <div class="w-full h-32 flex justify-center items-center sm:h-20"><img class="h-full" src="{{asset('images/icon/resultados.png')}}" alt="icono-list"></div>
                        </div>
                    </div>
                    <div class="w-full h-[35vh] bg-[#d9d9d9] rounded-3xl 2xl:h-[44vh] 2xl:py-6">
                        <div class="w-full h-15 p-3 bg-[#2477db] flex justify-center items-center rounded-t-3xl sm:bg-[#d9d9d9]">
                            <div class="pr-4 sm:h-12 sm:w-12 sm:flex justify-center items-center sm:pr-0 sm:bg-[#2477db] rounded-full sm:mr-4 xl:w-16 xl:h-16">
                                <small class="text-xl font-black text-white text-center md:text-2xl xl:text-3xl">4</small>
                            </div>
                            <p class="text-sm font-black text-white sm:text-lg sm:text-black md:text-xl xl:text-2xl">Proceso de Matrícula</p>
                        </div>
                        <div class="grid gap-4 p-3 lg:flex lg:px-10">
                            <div><p class="text-xs sm:text-sm 2xl:text-lg ">Si, lograste realizar los pasos anteriores satisfactoriamente, acércate a la oficinas para realizar los tramites de matrícula.</p></div>
                            <div class="w-full h-32 flex justify-center items-center sm:h-20"><img class="h-full" src="{{asset('images/icon/matricula.png')}}" alt="icono-list"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection