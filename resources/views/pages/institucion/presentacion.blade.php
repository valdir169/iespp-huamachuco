@extends('layout.app')

@section('title', 'Presentación')
@section('content')
    <x-hero image="{{ asset('images/carreras/carrera_ingles.png') }}" text="Presentación" />

    <article class="render py-12">
        <h3 class="text-xl font-bold py-4">BIENVENIDA DE LA DIRECTORA</h3>

        <section class="grid md:grid-cols-2 gap-4 lg:gap-8 xl:gap-12" >
            <div class=" flex flex-col gap-2  text-center ">
                <img class="h-full w-full xl:h-[60vh] 2xl:h-[50vh]" src="{{ asset('images/directora.png') }}" alt="Directora del IESPP JFSC">
                <strong>Dra. Gladis Martha Alvares Medina</strong>
            </div>
            
            <div class="h-full">
                <p>
                    Hay que resaltar que la educación es formar al ser humano para el cambio permanente y aún para la
                    eventual crisis producto de la transición.<br>
                    Nuevamente estamos en la etapa académica más importante de la Escuela Indoamérica, desde la Dirección de
                    la Escuela queremos hacerles llegar nuestra cordial bienvenida y expresarles que haremos lo posible para
                    que vuestra estadía en esta unidad académica no sólo les dé un título pedagógico sino que además les
                    deje un grato recuerdo y un sentimiento de pertenencia.
                    Las necesidades educativas del país, requieren de profesionales altamente comprometidos, nuestra misión
                    y responsabilidad es que Uds. lo sean. <br><br>
                    Sus egresados, demuestran en los distintos campos en que se desempeñan como docentes,
                    personal directivo o especialistas, la calidad de la formación recibida y el compromiso con
                    una filosofía educativa que busca hacer de la educación una vocación de servicio, una tarea
                    de humanización y un proceso en continuo cambio.
                </p>
            </div>
        </section>
    </article>
@endsection