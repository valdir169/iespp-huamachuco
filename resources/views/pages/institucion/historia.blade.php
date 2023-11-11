@extends('layout.app')

@section('title', 'Historia - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/institucion/hero_institucion.webp') }}" text="Historia" />
    <article class="render py-12">
        <h3 class="title py-4">Conoce nuestra historia</h3>
        <div class="flex gap-2 flex-col lg:flex-row lg:gap-8">
            <div class="lg:w-6/12 h-auto">
                <p>El 28 de abril de 1981 mediante la Resolución Ministerial 432 del año 1981 se reapertura Escuela Normal
                    Mixta
                    José
                    Faustino Sánchez Carrión y con el Decreto Supremo
                    019 del año 1985 se adecua a Instituto Superior Pedagógico. Actualmente tiene la denominación: Instituto
                    de
                    Educación Superior Pedagógico Público José Faustino
                    Sáznchez Carrión. <br> Ha formado más de 3000 maestros en diferentes especialidades. Más del 80% de
                    maestros de
                    la
                    región La Libertad son egresados de ésta “Alma Mater”. <br><br>

                    Es una institución ganadora en experiencias exitosas con el proyecto “Centros Pilotos Rurales 2005” que
                    fue
                    validado
                    en la Universidad de Temuco, Chile. Promotora del rescate de diferentes danzas de nuestras comunidades,
                    tales
                    como: La Contradanza, los Huanquillos, los
                    incas, los emplumados, los canasteros, los
                    huananayes, etc.

                </p>
            </div>
            <picture class="lg:w-6/12 h-auto ">
                <img class="h-full rounded-lg" src="{{ asset('images/institucion/historia.webp') }}" alt="">
            </picture>


        </div>

        <p class="pt-8">

            Organizó eventos culturales como elección de la “ñusta huamachuquina. <br>

            Creador y ejecutor del Proyecto Artístico Cultural “Waman Raymi” &#40;Fiesta del Halcón&#41;, que
            conjuga la
            historia,
            el
            mito, la magia y la leyenda de la cultura de los
            Wamachucos.

            Fue responsable de ejecutar el Plan Nacional de Capacitación Docente &#45; PLANCAD 2001 capacitando a
            gran
            cantidad
            de
            docentes de nuestro ámbito.

            Organizó y ejeto el VII Encuentro de Institutos Pedagógicos de la Red Nor &#45; Oriental.

            Fue sub campeón y campeón departamental de fútbol.

            Con el funcionamiento de su Centro de Aplicación obtuvo grandes logros y sus egresados son profesionales
            de
            éxito.

            En el año 2016 obtuvo la Acreditación Institucional como Institución de Nivel superior que brinda una
            educación
            de
            calidad.

            Actualmente vienen formando profesionalmente 486 estudiantes en los Programas de estudios: Educación
            Secundaria
            en
            la especialidad de Comunicación, Idiomas en la
            especialidad de Inglés y Educación Inicial.</p>
    </article>
@endsection
