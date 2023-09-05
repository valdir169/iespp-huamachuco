@extends('layout.app')

@section('title', 'Admisión IESPP-Humachuco')

@section('content')
    <section class="bg-gray-400 sm:mt-14 lg:mt-0">
        <div class="render">
            <div class="grid gap-5 sm:max-w-[50%] md:h-[32rem] md:gap-0">
                <div class="pt-20 md:pt-64">
                    <h1 class="text-sm font-black md:text-xl md:text-2xl xl:text-3xl  2xl:text-4xl">Admisión 2024</h1>
                    <h1 class="text-sm font-black border-b pb-2 md:text-xl md:text-2xl xl:text-3xl  2xl:text-4xl">INSCRIPCIONES ABIERTAS!!!</h1>
                </div>
                <div class="md:-mt-16">
                    <span class="text-xs pr-4 font-semibold md:text-lg xl:text-xl">Cierre de Inscripciones:</span><span class="text-xs md:text-lg xl:text-xl">20 de Enero.</span><br>
                    <span class="text-xs pr-4 font-semibold md:text-lg xl:text-xl">Inicio de Inscripciones:</span><span class="text-xs md:text-lg xl:text-xl">20 de Enero.</span><br>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class="render bg-zinc-500 lg:bg-white lg:flex justify-center items-center">
            <div class="lg:bg-zinc-300 lg:w-[62rem] lg:h-[10rem] lg:flex justify-center items-center lg:-mt-32">
                <div class="grid gap-4">
                    <div class="flex justify-center items-center">
                        <h1 class="text-center font-black text-sm md:text-xl">Admisión IESPP - HUMACHUCO</h1>
                    </div>
                    <div class="grid gap-2 text-center sm:grid-cols-2 md:flex justify-center items-center">
                        <div class=""><a href="#" class="text-xs md:border-r-2 px-3 py-2 lg:text-base xl:text-lg">Carreras Profecionales</a></div>
                        <div class=""><a href="#" class="text-xs md:border-r-2 px-3 py-2 lg:text-base xl:text-lg">Modalidad de Admisión</a></div>
                        <div class=""><a href="#" class="text-xs md:border-r-2 px-3 py-2 lg:text-base xl:text-lg">Requisitos de Matricula</a></div>
                        <div class=""><a href="#" class="text-xs sm:px-3 py-2 lg:text-base xl:text-lg">Campus Institucional</a></div>
                    </div>        
                </div>
            </div>
        </div>
        <div class="render grid gap-8">
            <div class="">
                <h1 class="text-sm font-black pb-4 sm:text-lg">Modalidad admisión</h1>
                <p class="text-xs sm:text-sm">Te ofrecemos distintas opciones al momento que postulas a una de nuestras carreras profecionales.</p>
            </div>
            <div class="grid gap-4">
                <div class="sm:flex justify-center items-center gap-5 sm:flex-row-reverse">
                    <div class="">
                        <h1 class="text-sm font-black sm:text-lg">Excelencia Académica</h1>
                        <p class="text-xs py-3 sm:text-sm">Para poder obtener este beneficio se requiere haber alcanzado en los tres últimos años del nivel secundario el primer o segundo puesto de su aula de estudios.</p>
                        <a href="#" class="bg-blue-500 py-2 px-8 rounded-lg text-xs sm:text-sm">Más Información</a>
                    </div>
                    <div>
                        <img class="pt-4" src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg" alt="">
                    </div>
                </div>
                <div class="sm:flex justify-center items-center gap-5">
                    <div class="">
                        <h1 class="text-sm font-black sm:text-lg">Prueba de Aptitud</h1>
                        <p class="text-xs py-3 sm:text-sm">Para poder obtener este beneficio se requiere haber alcanzado en los tres últimos años del nivel secundario el primer o segundo puesto de su aula de estudios.</p>
                        <a href="#" class="bg-blue-500 py-2 px-8 rounded-lg text-xs sm:text-sm">Más Información</a>
                    </div>
                    <div>
                        <img class="pt-4" src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="render">
            <div class="display text-center">
                <h1 class="text-sm font-black sm:text-lg">Proceso de Admisión</h1>
                <p class="text-xs pt-2 pb-8 sm:text-sm">Para ingresar al IESPP-Huamachuco debe seguir los siguientes pasos.</p>
            </div>
            <div class="grid gap-5">
                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="w-full h-64 bg-blue-400 rounded-lg">
                        <div class="w-full h-15 p-3 bg-blue-200 flex justify-center items-center rounded-t-lg sm:bg-blue-400">
                            <div class="pr-4 sm:h-12 sm:flex justify-center items-center sm:pr-0 sm:bg-slate-600 rounded-full sm:mr-4">
                                <h1 class="text-xl font-black sm:w-12 text-center">1</h1>
                            </div>
                            <p class="text-sm font-black sm:text-lg">Postula</p>
                        </div>
                        <div class="p-3">
                            <p class="text-xs sm:text-sm">Realiza tu inscripción en la secretaría de nuestra institución</p>
                        </div>
                    </div>
                    <div class="w-full h-64 bg-blue-400 rounded-lg">
                        <div class="w-full h-15 p-3 bg-blue-200 flex justify-center items-center rounded-t-lg sm:bg-blue-400">
                            <div class="pr-4 sm:h-12 sm:flex justify-center items-center sm:pr-0 sm:bg-slate-600 rounded-full sm:mr-4">
                                <h1 class="text-xl font-black sm:w-12 text-center">2</h1>
                            </div>
                            <p class="text-sm font-black sm:text-lg">Realiza el examen</p>
                        </div>
                        <div class="p-3">
                            <p class="text-xs sm:text-sm">1.- Evaluación de competencias fundamentales (Ingreso Ordinario).</p>
                            <p class="text-xs sm:text-sm">2.- Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="w-full h-64 bg-blue-400 rounded-lg">
                        <div class="w-full h-15 p-3 bg-blue-200 flex justify-center items-center rounded-t-lg sm:bg-blue-400">
                            <div class="pr-4 sm:h-12 sm:flex justify-center items-center sm:pr-0 sm:bg-slate-600 rounded-full sm:mr-4">
                                <h1 class="text-xl font-black sm:w-12 text-center">3</h1>
                            </div>
                            <p class="text-sm font-black sm:text-lg">Revisa tu resultado</p>
                        </div>
                        <div class="p-3">
                            <p class="text-xs sm:text-sm">Los resultados son publicados en las redes sociales y también en la institución.</p>
                        </div>
                    </div>
                    <div class="w-full h-64 bg-blue-400 rounded-lg">
                        <div class="w-full h-15 p-3 bg-blue-200 flex justify-center items-center rounded-t-lg sm:bg-blue-400">
                            <div class="pr-4 sm:h-12 sm:flex justify-center items-center sm:pr-0 sm:bg-slate-600 rounded-full sm:mr-4">
                                <h1 class="text-xl font-black sm:w-12 text-center">4</h1>
                            </div>
                            <p class="text-sm font-black sm:text-lg">Proceso de Matrícula</p>
                        </div>
                        <div class="p-3">
                            <p class="text-xs sm:text-sm">Si, lograste realizar los pasos anteriores satisfactoriamente, acércate a la oficinas para realizar los tramites de matrícula.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection