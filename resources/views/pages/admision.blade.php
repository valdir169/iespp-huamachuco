@extends('layout.app')

@section('title', 'Admisión IESPP-Humachuco')

@section('content')
    <section>
        <x-admision img="{{ asset('images/bg-admision.jpg') }}" titulo="Admisión 2024" descripcion="INSCRIPCIONES ABIERTAS!!!"
            subtitulo1="Inicio de Inscripciones:" subtitulo2="Cierre de Inscripciones:" subtitulo3="15 de marzo."
            subtitulo4="7 de abril." />
    </section>
    <section>
        <div class="py-10 bg-[#3477db] lg:bg-transparent lg:flex justify-center items-center lg:-mt-32 2xl:-mt-36">
            <div
                class="lg:bg-[#ebebeb] lg:w-[900px] lg:h-[12rem] lg:flex justify-center items-center xl:w-[1200px] 2xl:h-[14rem]">
                <div class="grid gap-4 lg:gap-8">
                    <div class="flex justify-center items-center">
                        <h2 class="text-center subtitle text-white lg:text-black">Admisión IESPP - HUAMACHUCO</small>
                    </div>
                    <div class="grid gap-2 text-center sm:grid-cols-2 md:flex justify-center items-center">
                        <div class="">
                            <a href="{{ route('programas') }}"
                                class="text-white md:border-r px-3 py-2 lg:text-[#3477db] lg:border-[#3477db]">Programas de
                                Estudios</a>
                        </div>
                        <div class="">
                            <a
                                href="{{ route('modalidad_admision') }}"class="text-white md:border-r px-3 py-2 lg:text-[#3477db] lg:border-[#3477db]">Modalidad
                                de Admisión</a>
                        </div>
                        <div class="">
                            <a href="{{route('matricula')}}"class="text-white md:border-r px-3 py-2 lg:text-[#3477db] lg:border-[#3477db]">Requisitos
                                de Matricula</a>
                        </div>
                        <div class="">
                            <a href="#" class="text-white sm:px-3 py-2 lg:text-[#3477db]">Academia IESPP-JFSC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="render py-10 grid gap-8">
            <div class="">
                <small class="title font-black text-[#3477db] pb-4">Modalidad admisión</small>
                <p>Te ofrecemos distintas opciones al momento que postulas a una de
                    nuestras carreras profecionales.</p>
            </div>
            <div class="grid gap-16 lg:gap-36">
                <div class="sm:flex justify-center items-center gap-5 sm:flex-row-reverse xl:gap-20">
                    <div class=" flex flex-col text-center md:text-start">
                        <small class="font-black subtitle">Excelencia Académica</small>
                        <p class="py-3 2xl:py-6">Para poder obtener este beneficio se requiere haber alcanzado en nivel
                            secundario el primer o segundo puesto, premio de excelencia de su institución educativa.</p>
                        <x-button type="secondary" ruta="{{ route('modalidad_admision') }}">Más Información</x-button>
                    </div>
                    <div>
                        <img class="pt-4"src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg"
                            alt="">
                    </div>
                </div>
                <div class="sm:flex justify-center items-center gap-5 xl:gap-20">
                    <div class="flex flex-col text-center md:text-start">
                        <small class="font-black subtitle">Prueba de Aptitud</small>
                        <p class="py-3 2xl:py-6">El principal objetivo de esta modalidad es seleccionar a los ingresantes
                            que tienen las capacidades y competencias básicas para desarrollar y acceder a su carrera
                            profesional</p>
                        <x-button type="secondary" ruta="{{ route('modalidad_admision') }}">Más Información</x-button>
                    </div>
                    <div>
                        <img class="pt-4"src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <article>
            <div class="render py-12">
                <div class="display text-center">
                    <span class="font-black text-[#3477db] title">Proceso de Admisión</span>
                    <p class="pt-2 pb-8">Para ingresar al IESPP-Huamachuco debe seguir los siguientes pasos.</p>
                </div>
            </div>
        </article>
        <article class="card__admision render py-20">
            <div class="timeline-container__ad">
                <div class="timeline_admision"></div>

                <div class="card-ad h-[490px]">
                    <div class="card-number"><span>1</span></div>
                    <div class="card-title subtitle">Postula</div>
                    <div class="card-description">
                        <p>Realiza tu inscripción en la secretaría de nuestra institución</p>
                        <div class="card-image"><img src="{{ asset('images/icon/postular.png') }}" alt="imgPostular"></div>
                    </div>
                </div>

                <div class="timeline_admision"></div>

                <div class="card-ad h-[600px]">
                    <div class="card-number"><span>2</span></div>
                    <div class="card-title subtitle">Realiza los exámenes</div>
                    <div class="card-description grid gap-5">
                        <p>1.- Evaluación de competencias fundamentales (Ingreso Ordinario).</p>
                        <p>2.- Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</p>
                        <div class="card-image"><img src="{{ asset('images/icon/examen.png') }}" alt="imgExamen"></div>
                    </div>
                </div>

                <div class="timeline_admision"></div>

                <div class="card-ad h-[600px]">
                    <div class="card-number"><span>3</span></div>
                    <div class="card-title subtitle">Revisa tu resultado</div>
                    <div class="card-description">
                        <p>Los resultados son publicados en las redes sociales y también en la institución.</p>
                        <div class="card-image"><img src="{{ asset('images/icon/resultados.png') }}" alt="imgResultados"></div>
                    </div>
                </div>

                <div class="timeline_admision"></div>

                <div class="card-ad h-[490px]">
                    <div class="card-number"><span>4</span></div>
                    <div class="card-title subtitle">Proceso de Matrícula</div>
                    <div class="card-description">
                        <p>Si lograste realizar los pasos anteriores satisfactoriamente, acércate a la oficina para realizar los trámites de matrícula.</p>
                        <div class="card-image"><img src="{{ asset('images/icon/matricula.png') }}" alt="imgMatricula"></div>
                    </div>
                </div>
            </div>
        </article>

    </section>
@endsection
