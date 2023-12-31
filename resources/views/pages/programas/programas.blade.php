@extends('layout.app')

@section('title','Carreras Profesionales - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <section>
        <x-hero image="{{ asset('images/admision/bg_admision.jpg') }}" text="Programas de Estudios" />
    </section>
    <section class="bg-[#3477db] w-full py-20 xl:py-18">
        <div class="render">
            <div class="flex justify-center flex-col text-center gap-3">
                <h1 class="text-sm font-black text-white sm:text-lg md:text-xl xl:text-3xl">Contamos con tres Programas de Estudios Profesionales</h1>
                <p class="text-xs text-white sm:text-ms xl:text-lg">Nosotros formamos profesionales de calidad, ven estudia con nosotros y recibe tu Título Profesional a Nombre de la Nación</p>
            </div>
        </div>
    </section>
    <main class="render py-10 xl:py-18">
        <div class="grid gap-3">
            <div class="p-2 border-2 sm:flex items-center sm:gap-3 lg:gap-8 xl:border-0 xl:border-b xl:border-[#3477db] xl:py-10">
                <div class="w-full md:w-[45%] lg:w-full">
                    <img src="{{asset('images/programas/Prog-Ingles.jpg')}}" alt="">
                </div>
                <div class="grid gap-2 2xl:py-28">
                    <div class="flex justify-center md:justify-start"><small class="text-sm font-black text-center lg:text-xl 2xl:text-3xl lg:text-left">Idiomas, Especialidad: Ingles</small></div>
                    <div class="flex">
                        <i class='bx bx-time pr-2 text-[1rem] lg:text-[1.5rem] 2xl:text-[2rem]'></i>
                        <p class="text-xs lg:text-sm 2xl:text-base">10 Semestres Académicos (5 años)</p>
                    </div>
                    <div class="flex">
                        <i class='bx bx-file-blank pr-2 text-[1rem] lg:text-[1.5rem] 2xl:text-[2rem]'></i>
                        <div>
                            <p class="text-xs lg:text-sm 2xl:text-base">Profesional Pedagógico en Educación Inicial, para obtener el titulo debe cumplir los siguientes requisitos:</p>
                            <ul class="grid gap-2 py-3 px-4 list-disc">
                                <li class="text-xs lg:text-sm 2xl:text-base">Haber culminado satisfactoriamente los 10 semestres académicos (220 créditos Aprobados).</li>
                                <li class="text-xs lg:text-sm 2xl:text-base">Aprobar las cuatro pruebas de suficiencia académica (Ingles, TIC´S, Matemática y Comunicación)</li>
                                <li class="text-xs lg:text-sm 2xl:text-base">Aprobar el examen de sustentación de tesis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center sm:px-10 xl:h-10">
                        <a href="{{route('ingles')}}" class="text-xs w-full py-2 text-center bg-[#3477db] h-8 text-white rounded-lg lg:text-sm xl:h-10 2xl:text-base">Obtener Más Información</a>
                    </div>
                </div>
            </div>
            <div class="p-2 border-2 sm:flex items-center sm:gap-3 lg:gap-8 xl:border-0 xl:border-b xl:border-[#3477db] xl:py-10">
                <div class="w-full md:w-[45%] lg:w-full">
                    <img src="{{asset('images/programas/Prog-Inicial.jpg')}}" alt="">
                </div>
                <div class="grid gap-2 2xl:py-28">
                    <div class="flex justify-center md:justify-start"><small class="text-sm font-black text-center lg:text-xl 2xl:text-3xl lg:text-left">Educación Inicial</small></div>
                    <div class="flex">
                        <i class='bx bx-time pr-2 text-[1rem] lg:text-[1.5rem] 2xl:text-[2rem]'></i>
                        <p class="text-xs lg:text-sm 2xl:text-base">10 Semestres Académicos (5 años)</p>
                    </div>
                    <div class="flex">
                        <i class='bx bx-file-blank pr-2 text-[1rem] lg:text-[1.5rem] 2xl:text-[2rem]'></i>
                        <div>
                            <p class="text-xs lg:text-sm 2xl:text-base">Profesional Pedagógico en Educación Inicial, para obtener el titulo debe cumplir los siguientes requisitos:</p>
                            <ul class="grid gap-2 py-3 px-4 list-disc">
                                <li class="text-xs lg:text-sm 2xl:text-base">Haber culminado satisfactoriamente los 10 semestres académicos (220 créditos Aprobados).</li>
                                <li class="text-xs lg:text-sm 2xl:text-base">Aprobar las cuatro pruebas de suficiencia académica (Ingles, TIC´S, Matemática y Comunicación)</li>
                                <li class="text-xs lg:text-sm 2xl:text-base">Aprobar el examen de sustentación de tesis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center sm:px-10 xl:h-10">
                        <a href="{{route('inicial')}}" class="text-xs w-full py-2 text-center bg-[#3477db] h-8 text-white rounded-lg lg:text-sm xl:h-10 2xl:text-base">Obtener Más Información</a>
                    </div>
                </div>
            </div>
            <div class="p-2 border-2 sm:flex items-center sm:gap-3 lg:gap-8 xl:border-0 xl:py-10">
                <div class="w-full md:w-[45%] lg:w-full">
                    <img src="{{asset('images/programas/Prog-comunicacion.jpg')}}" alt="">
                </div>
                <div class="grid gap-2 2xl:py-28">
                    <div class="flex justify-center md:justify-start"><small class="text-sm font-black text-center lg:text-xl 2xl:text-3xl lg:text-left">Educación Secundaria, Especialidad: Comunicación </small></div>
                    <div class="flex">
                        <i class='bx bx-time pr-2 text-[1rem] lg:text-[1.5rem] 2xl:text-[2rem]'></i>
                        <p class="text-xs lg:text-sm 2xl:text-base">10 Semestres Académicos (5 años)</p>
                    </div>
                    <div class="flex">
                        <i class='bx bx-file-blank pr-2 text-[1rem] lg:text-[1.5rem] 2xl:text-[2rem]'></i>
                        <div>
                            <p class="text-xs lg:text-sm 2xl:text-base">Profesional Pedagógico en Educación Inicial, para obtener el titulo debe cumplir los siguientes requisitos:</p>
                            <ul class="grid gap-2 py-3 px-4 list-disc">
                                <li class="text-xs lg:text-sm 2xl:text-base">Haber culminado satisfactoriamente los 10 semestres académicos (220 créditos Aprobados).</li>
                                <li class="text-xs lg:text-sm 2xl:text-base">Aprobar las cuatro pruebas de suficiencia académica (Ingles, TIC´S, Matemática y Comunicación)</li>
                                <li class="text-xs lg:text-sm 2xl:text-base">Aprobar el examen de sustentación de tesis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center sm:px-10 xl:h-10">
                        <a href="{{route('comunicacion')}}" class="text-xs w-full py-2 text-center bg-[#3477db] h-8 text-white rounded-lg lg:text-sm xl:h-10 2xl:text-base">Obtener Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection