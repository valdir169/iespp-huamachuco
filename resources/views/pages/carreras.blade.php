@extends('layout.app')

@section('title','Carreras Profecionales')

@section('content')
    <section class="sm:mt-14 lg:mt-0">
        <div class="render bg-[#3477db] w-full py-10 xl:py-18">
            <div class="flex justify-center flex-col text-center gap-3">
                <h1 class="text-sm font-black text-white sm:text-lg md:text-xl xl:text-3xl 2xl:text-5xl">Contamos con tres Carreras Profesionales</h1>
                <p class="text-xs text-white sm:text-base md:text-lg xl:text-xl">Nosotros formamos profesionales de calidad, ven estudia con nosotros y recibe tu Título Profesional a Nombre de la Nación</p>
            </div>
        </div>
    </section>
    <main class="render py-10 xl:py-18">
        <div class="grid gap-3">
            <article class="p-2 border-2 sm:flex sm:gap-3 lg:gap-8 xl:border-0 xl:border-b-2 xl:border-black xl:py-10">
                <div class="sm:w-1/3 lg:w-2/5 xl:w-2/3">
                    <img src="https://www.itmplatform.com/wp-content/uploads/altaeducacion.png" alt="">
                </div>
                <div class="grid gap-2 2xl:py-28">
                    <div class="flex justify-center md:justify-start"><small class="text-sm font-black text-center md:text-lg 2xl:text-3xl 2xl:text-left">Educación Inicial</small></div>
                    <div class="flex">
                        <img class="w-10 h-8" src="{{asset('images/icon/postular.png')}}" alt="">
                        <p class="text-xs md:text-base">10 Semestres Académicos (5 años)</p>
                    </div>
                    <div class="flex">
                        <img class="w-10 h-8" src="{{asset('images/icon/postular.png')}}" alt="">
                        <div>
                            <p class="text-xs md:text-base">Profesional Pedagógico en Educación Inicial, para optar obtener el titulo debe cumplir los siguientes requisitos:</p>
                            <ul class="grid gap-2 py-3 px-4 list-disc">
                                <li class="text-xs md:text-base">Haber culminado satisfactoriamente los 10 semestres académicos (220 créditos Aprobados).</li>
                                <li class="text-xs md:text-base">Aprobar las cuatro pruebas de suficiencia académica (Ingles, TIC´S, Matemática y Comunicación)</li>
                                <li class="text-xs md:text-base">Aprobar el examen de sustentación de tesis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center sm:px-10 xl:h-10 max-h-full">
                        <a href="#" class="text-xs w-full py-2 text-center bg-[#3477db] text-white rounded-lg md:text-base">Obtener Más Información</a>
                    </div>
                </div>
            </article>
            <article class="p-2 border-2 sm:flex sm:gap-3 lg:gap-8 xl:border-0 xl:border-b-2 xl:border-black xl:py-10">
                <div class="sm:w-1/3 lg:w-2/5 xl:w-2/3">
                    <img src="https://www.itmplatform.com/wp-content/uploads/altaeducacion.png" alt="">
                </div>
                <div class="grid gap-2 2xl:py-28">
                    <div class="flex justify-center md:justify-start"><small class="text-sm font-black text-center md:text-lg 2xl:text-3xl 2xl:text-left">Idiomas, Especialidad: Ingles</small></div>
                    <div class="flex">
                        <img class="w-10 h-8" src="{{asset('images/icon/postular.png')}}" alt="">
                        <p class="text-xs md:text-base">10 Semestres Académicos (5 años)</p>
                    </div>
                    <div class="flex">
                        <img class="w-10 h-8" src="{{asset('images/icon/postular.png')}}" alt="">
                        <div>
                            <p class="text-xs md:text-base">Profesional Pedagógico en Educación Inicial, para optar obtener el titulo debe cumplir los siguientes requisitos:</p>
                            <ul class="grid gap-2 py-3 px-4 list-disc">
                                <li class="text-xs md:text-base">Haber culminado satisfactoriamente los 10 semestres académicos (220 créditos Aprobados).</li>
                                <li class="text-xs md:text-base">Aprobar las cuatro pruebas de suficiencia académica (Ingles, TIC´S, Matemática y Comunicación)</li>
                                <li class="text-xs md:text-base">Aprobar el examen de sustentación de tesis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center sm:px-10 xl:h-10 max-h-full">
                        <a href="#" class="text-xs w-full py-2 text-center bg-[#3477db] text-white rounded-lg md:text-base">Obtener Más Información</a>
                    </div>
                </div>
            </article>
            <article class="p-2 border-2 sm:flex sm:gap-3 lg:gap-8 xl:border-0 xl:py-10">
                <div class="sm:w-1/3 lg:w-2/5 xl:w-2/3">
                    <img src="https://www.itmplatform.com/wp-content/uploads/altaeducacion.png" alt="">
                </div>
                <div class="grid gap-2 2xl:py-28">
                    <div class="flex justify-center md:justify-start"><small class="text-sm font-black text-center md:text-lg 2xl:text-3xl 2xl:text-left">Educación Secundaria, Especialidad: Comunicación </small></div>
                    <div class="flex">
                        <img class="w-10 h-8" src="{{asset('images/icon/postular.png')}}" alt="">
                        <p class="text-xs md:text-base">10 Semestres Académicos (5 años)</p>
                    </div>
                    <div class="flex">
                        <img class="w-10 h-8" src="{{asset('images/icon/postular.png')}}" alt="">
                        <div>
                            <p class="text-xs md:text-base">Profesional Pedagógico en Educación Inicial, para optar obtener el titulo debe cumplir los siguientes requisitos:</p>
                            <ul class="grid gap-2 py-3 px-4 list-disc">
                                <li class="text-xs md:text-base">Haber culminado satisfactoriamente los 10 semestres académicos (220 créditos Aprobados).</li>
                                <li class="text-xs md:text-base">Aprobar las cuatro pruebas de suficiencia académica (Ingles, TIC´S, Matemática y Comunicación)</li>
                                <li class="text-xs md:text-base">Aprobar el examen de sustentación de tesis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center sm:px-10 xl:h-10 max-h-full">
                        <a href="#" class="text-xs w-full py-2 text-center bg-[#3477db] text-white rounded-lg md:text-base">Obtener Más Información</a>
                    </div>
                </div>
            </article>
        </div>
    </main>
@endsection