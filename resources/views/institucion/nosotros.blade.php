@extends('layout.app')

@section('title', 'Nosotros')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Nosotros" />

    <section class="render grid md:grid-cols-2 gap-4 lg:gap-8 xl:gap-12 py-12">
        <div class="h-full flex flex-col justify-center">
            <span class="font-bold text-xl uppercase py-4">¿Qué hacemos? </span>
            <p>Brindamos una educación técnica profesional de calidad, diseñada con los más altos
                estándares en el mundo de la educación moderna.La implementación del Buen Gobierno
                Corporativo, el Código de Conducta y el canal de Gestión Ética son parte de nuestro proceso
                de desarrollo institucional y nos ayudan a funcionar de manera transparente, ética e íntegra. <br><br>
                SU USO FORTALECE NUESTRA CULTURA DE CONFIANZA Y MEJORA LA
                EFICIENCIA DE NUESTRA GESTIÓN.</p>
        </div>

        <div class=" flex flex-col gap-2  text-center rounded-lg ">
            <img class="h-full w-full xl:h-[60vh] 2xl:h-[50vh] rounded-lg" src="{{ asset('images/directora.png') }}"
                alt="Directora del IESPP JFSC">
        </div>
    </section>

    <article class="bg-[#D9D9D9] h-auto render py-12 grid md:grid-cols-2 gap-4 lg:gap-12">
        <div class="bg-white rounded-lg p-4 text-center">
            <span class="font-bold text-xl uppercase">Misión </span>
            <p class="mt-2">
                Somos uan Institución Educativa de Formación Inicial Docente, que brindamos servicios educativos de calidad
                a estudiantes en los que los programas de estudio de Educación Inicial,
                Idiomas:Inglés y Educación Secundaria: Comunicación, a partit de experiencias que permiten el desarrollo de
                su identidad docente
                en el marco de una cultura democrática, inclusiva e intercultural, centrada en aprendizajes significativos,
                la práctica de habilidades sociales e investigación.
                Formamos profesionales proactivos, disciplinados, en conciencia ambiental para el desarrollo sostenible de
                la sociedad.
            </p>
        </div>

        <div class="bg-white rounded-lg p-4 text-center">
            <span class="font-bold text-xl uppercase">Visión </span>
            <p class="mt-2">Al año 2025, el Instituto de Educación Superior Pedagógico Público “José Faustino Sánchez
                Carrión” es una
                institución educativa licenciada y acreditada, reconocida a nivel nacional como un centro activo de
                investigación e innovaciones
                pedagógicas, que forma profesionales competentes en la educación, a partir de un currículo socio crítico
                reflexivo, que
                promueve una sólida identidad docente, en el marco de una cultura educativa democrática, inclusiva e
                intercultural centrada
                en habilidades sociales; para que contribuyan proactivamente en el cuidado del ambiente y el
                desarrollo sostenible de la sociedad.</p>
        </div>
    </article>

    <div class="render flex  justify-between py-12 flex-wrap gap-8 ">
        <span class="py-8 px-16 border rounded-lg">Respeto</span>
        <span class="py-8 px-16 border rounded-lg">Asertividad</span>
        <span class="py-8 px-16 border rounded-lg">Empatía</span>
    </div>
@endsection
