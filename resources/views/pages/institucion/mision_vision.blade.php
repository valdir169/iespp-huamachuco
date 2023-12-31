@extends('layout.app')

@section('title', 'Misión, Visión y Valores - Iespp José Faustino Sánchez Carrión Huamachuco')
@section('content')
    {{-- background hero --}}
    <x-hero image="{{ asset('images/institucion/hero_institucion.webp') }}" text="Misión, Visión y Valores" />

    <section class="render grid md:grid-cols-2 gap-4 lg:gap-8 xl:gap-28 2xl:gap-44 py-24">
        <div class="h-full flex flex-col md:pt-8">
            <span class="title">¿Qué hacemos? </span>
            <p class="mt-8">
                Proporcionamos una educación pedagógica de alta calidad, y estamos comprometidos en formar a futuros
                docentes y
                profesionales preparados para liderar en el ámbito educativo y comunicativo, proporcionando las herramientas
                necesarias para el éxito académico y profesional. Nuestra sólida base se sustenta en
                prácticas de buen Gobierno Corporativo, un Código de Ética y un Canal de Gestión Ética. Estos pilares son
                fundamentales para nuestro desarrollo institucional, asegurando la transparencia, integridad y ética en
                nuestra operación.
            </p>
        </div>

        <div class=" flex flex-col gap-2  text-center rounded-lg lg:h-[330px]">
            <img class="h-full rounded-lg" src="{{ asset('images/home/directora.png') }}" alt="Directora del IESPP JFSC">
        </div>
    </section>

    {{-- mision abd vision --}}
    <article class="bg-[#ebebeb] py-24">
        <section class="render h-auto  grid md:grid-cols-2 gap-12 lg:gap-32">
            <div class="bg-white rounded-lg p-4 xl:p-12 text-center">
                <span class="title text-[#3477db]">Misión</span>
                <p class="mt-6">
                    Somos una Institución Educativa de Formación Inicial Docente, que brindamos servicios educativos de
                    calidad a estudiantes en los programas de estudio de Educación Inicial,
                    Idiomas:Inglés y Educación Secundaria: Comunicación, a partir de experiencias que permiten el desarrollo
                    de su identidad docente en el marco de una cultura democrática, inclusiva e intercultural, centrada en
                    aprendizajes
                    significativos, la práctica de habilidades sociales e investigación.
                    Formamos profesionales proactivos, disciplinados, en conciencia ambiental para el desarrollo sostenible
                    de la sociedad.
                </p>
            </div>

            <div class="bg-white rounded-lg p-4 xl:p-12 text-center">
                <span class="title text-[#3477db]">Visión </span>
                <p class="mt-6">Al año 2025, el Instituto de Educación Superior Pedagógico Público “José Faustino Sánchez
                    Carrión” es una institución educativa licenciada y acreditada, reconocida a nivel nacional como un
                    centro activo de
                    investigación e innovaciones pedagógicas, que forma profesionales competentes en la educación, a partir
                    de un currículo socio crítico
                    reflexivo, que promueve una sólida identidad docente, en el marco de una cultura educativa democrática,
                    inclusiva e
                    intercultural centrada en habilidades sociales; para que contribuyan proactivamente en el cuidado del
                    ambiente y el
                    desarrollo sostenible de la sociedad.
                </p>
            </div>
        </section>
    </article>

    {{-- valores institucionales --}}
    <div class="render  py-24  box-border ">
        <h4 class="title py-4">Valores institucionales</h4>

        <div class="flex flex-wrap gap-8 py-4 justify-center">
            <div
                class="border border-[#3477DB] rounded-lg  p-2 flex hover:bg-[#3477db] hover:text-[#ffffff] transition cursor-pointer w-[350px] mx-auto lg:mx-0">
                <div class="w-6/12 p-4">
                    <img class="h-full w-full" src="{{ asset('images/institucion/respeto.png') }}" alt="Respeto">
                </div>
                <div class="flex flex-col w-9/12">
                    <span class="uppercase font-bold mt-2">Respeto</span>
                    <p>Es la actitud de reconocer y valorar a otros con consideración y cortesía, sin imponer ni
                        menospreciar.</p>
                </div>
            </div>

            <div
                class="border border-[#3477DB] rounded-lg  p-2 flex  hover:bg-[#3477db] hover:text-[#ffffff] transition cursor-pointer w-[350px] mx-auto lg:mx-0">
                <div class="w-6/12 p-4">
                    <img class=" w-full h-full"" src="{{ asset('images/institucion/asertividad.png') }}" alt="Asertividad">

                </div>
                <div class="flex flex-col w-9/12">
                    <span class="uppercase font-bold mt-2">Asertividad</span>
                    <p>Es expresar tus pensamientos, sentimientos, necesidades directa y respetuosamente evitando
                        agresividad en la comunicación.</p>
                </div>
            </div>

            <div
                class="border border-[#3477DB] rounded-lg  p-2 flex  hover:bg-[#3477db] hover:text-[#ffffff] transition cursor-pointer gap-4 w-[350px] mx-auto lg:mx-0">
                <div class="w-6/12 p-4">
                    <img class="w-full h-full" src="{{ asset('images/institucion/empatia.png') }}" alt="Empatía">
                </div>
                <div class="flex flex-col w-9/12">
                    <span class="uppercase font-bold mt-2">Empatía</span>
                    <p>Es la capacidad de comprender y compartir los sentimientos y de los demás, mostrando comprensión y
                        apoyo.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
