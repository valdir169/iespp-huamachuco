@extends('layout.app')

@section('title', 'SOPORTE PSICOPEDAGÓGICO - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')

<x-hero image="{{ asset('images/servicios/psicopedagogia.jpg') }}" text="SOPORTE PSICOPEDAGÓGICO" />

<section class="grid gap-16">
    <div class="py-16">
        <div class="sm:border-y border-y-[#d9d9d9]  w-full">
            <div class="render w-full">
                <ul class="w-full grid grid-cols-2 sm:flex justify-center">
                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#servicio" class="flex flex-col text-center gap-3">
                            <i class='bx bx-brain text-[25px]'></i>
                            <span>Sobre el Servicio</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#horario" class="flex flex-col text-center gap-3">
                            <i class='bx bx-time-five text-[25px]'></i>
                            <span>Horarios</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#responsable" class="flex flex-col text-center gap-3">
                            <i class='bx bx-user text-[25px]'></i>
                            <span>Responsable</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#preguntas" class="flex flex-col text-center gap-3">
                            <i class='bx bx-question-mark text-[25px]'></i>
                           
                            <span>Preguntas Frecuentes</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#mediosdifusion" class="flex flex-col text-center gap-3">
                        <i class='bx bxs-megaphone'></i>
                            <span>Medios Difusion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="servicio">
            <x-services>
                <x-slot name='servicio'>Soporte Psicopedagógico</x-slot>
                <x-slot name='frase'>El secreto de la existencia humana no sólo está en vivir, sino también en
                    saber
                    para qué se vive.</x-slot>
                <x-slot name='autor'> _Miguel de Cervantes Saavedra</x-slot>
                <x-slot name='img'>{{ asset('images/servicios/User_psicopedagogia.jpg') }}</x-slot>
                <x-slot name='altImg'>Servicio de Psicopedagogia</x-slot>
                <x-slot name='parrafo'>
                    <p class="grid sm:px-6">
                    <h1 class="titulo_info">PRESENTACIÓN</h1>
                    <p class="texto_info">El área de Soporte Psicopedagógico del Instituto de Educación Superior Pedagógico Público
                        “José Faustino Sánchez Carrión” se encarga de brindar atención y apoyo integral a los estudiantes,con el fin
                        de facilitar su desarrollo académico, emocional y social dentro del entorno educativo. A través de una atención
                        personalizada y el uso de estrategias adaptativas, esta área contribuye a crear un ambiente inclusivo y favorable
                        para el aprendizaje, potenciando las capacidades y habilidades de cada estudiante.</p>
                    <span>
                        <br></br>
                        <h1 class="titulo_info">Misión</h1>
                        <p class="texto_info">Promover el desarrollo integral de los estudiantes mediante la implementación de estrategias
                            psicopedagógicas que favorezcan su aprendizaje, bienestar socioemocional y adaptación al entorno escolar, contribuyendo
                            así a su formación personal, académica y social.</p>
                        <br></br>
                        <h1 class="titulo_info">>Objetivo General</h1>
                        <p class="texto_info"> Fomentar el bienestar emocional y académico de los estudiantes, brindándoles soporte en sus necesidades
                            individuales a través de orientación, acompañamiento y recursos adecuados, para mejorar su rendimiento, autoestima, habilidades
                            sociales y su integración en la comunidad educativa.</p>

                    </span>
                    </p>
                </x-slot>
            </x-services>

            <div class="bg-[#ebebeb]">
                <div class="render py-12 grid gap-8 sm:gap-14">
                    <span class="subtitle"></span>
                    <h2 class="subtitle">Ofrecemos Asistencia en:</h2>

                    <div class="card-container-topico">
                        <x-card-topico>
                            <x-slot name="icon"><i class='bx bxs-book-alt text-[55px] text-[#3477db]'></i></x-slot>
                            
                            <x-slot name="title">PROTOCOLO DE ATENCION</x-slot>
                            <x-slot name="description">

                                Espacio de orientación que te permitirá fortalecer competencias o incorporar
                                nuevas habilidades para enfrentar con éxito los retos y desafíos que se presenten
                                en tu día a día.
                                <br></br>
                                <a class="vinculo" href="https://drive.google.com/file/d/1-WDvqT0bUZoSSdN6yCWCyuMQM-uR4bHY/view?usp=sharing" target="_self">VER</a>

                            </x-slot>

                        </x-card-topico>


                        <x-card-topico>
                            <x-slot name="icon"><i class='bx bxs-user-detail text-[55px] text-[#3477db]'></i></x-slot>
                            <x-slot name="title">CONSEJERÍA PSICOLÓGICA</x-slot>
                            <x-slot name="description">
                                Espacio de orientación que te permitirá fortalecer competencias o incorporar
                                nuevas habilidades para enfrentar con éxito los retos y desafíos que se presenten
                                en tu día a día..
                            </x-slot>
                        </x-card-topico>

                        <x-card-topico>
                            <x-slot name="icon"><i class='bx bx-swim text-[55px] text-[#3477db]'></i></x-slot>
                            <x-slot name="title">PROGRAMA DE TUTORÍA </x-slot>
                            <x-slot name="description">Conexión entre las personas que tienen habilidades específicas
                                y conocimientos (tutores) con individuos (tutoríados) quienes necesitan o desean las
                                mismas habilidades y ventajas para superarse en su trabajo, vida cotidiana o
                                ejecución escolar.</x-slot>
                        </x-card-topico>

                        <x-card-topico>
                        
                            <x-slot name="icon"><i class='bx bx-edit text-[55px] text-[#3477db]'></i></x-slot>
                            <x-slot name="title">EVALUACIÓN PSICOLÓGICA</x-slot>
                            <x-slot name="description">Procedimiento mediante el cual un psicólogo especializado
                                recopila información sobre el paciente a través de test y entrevistas, con el fin
                                de evaluar el funcionamiento y las capacidades del mismo en determinadas áreas.</x-slot>
                        </x-card-topico>


                        <x-card-topico>
                            <x-slot name="icon"><i class='bx bxs-clinic text-[55px] text-[#3477db]'></i></x-slot>
                            <x-slot name="title">TALLERES PSICOEDUCATIVOS</x-slot>
                            <x-slot name="description">Metodología ideal para informar, sensibilizar, intervenir y generar
                                cambios en los asistentes.</x-slot>
                        </x-card-topico>

                    </div>

                    <div class="flex items-center">
                        <i class='bx bx-lock text-[60px] text-[#3477db]'></i>
                        <span>Confidencialidad y ética en los servicios de Psicopedagogía.</span>
                    </div>
                </div>
            </div>




        </div>
    </div>





    <div id="mediosdifusion">
        <x-services>
            <x-slot name='servicio'>Medios de Difusion</x-slot>
            <x-slot name='frase'>La salud Mental es la base de nuestra Vida</x-slot>
            <x-slot name='autor'> Propio</x-slot>
            <x-slot name='img'>{{ asset('images/servicios/publicidad.jpg') }}</x-slot>
            <x-slot name='altImg'>Servicio de Psicopedagogia</x-slot>
            <x-slot name='parrafo'>
                <p class="grid sm:px-6">
                <h1 class="titulo_info">DIFUSIÓN</h1>
                <p class="texto_info">Aqui se muestran las campañas de concientizacion y promocion de la Salud Metal</p>

     
   
                    <ol class="animated-list">
                        <li>
                            <a href="https://drive.google.com/file/d/1e0b97vsCVY1dPDHCWuvCEg5cbU7vwb0A/view?usp=sharing">Salud Mental</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1e0b97vsCVY1dPDHCWuvCEg5cbU7vwb0A/view?usp=sharing">Programa Buen Ciudadano</a>
                        </li>
                        <li>
                            <a href="https://docs.google.com/spreadsheets/d/1N5tleU_pYLEOa8vCUh3e8YHheM67slFwjL2oyzU2LuQ/edit?usp=sharing">Informacion Estadística </a>
                        </li>
                        <li>Elemento 4</li>
                        <li>Elemento 5</li>
                    </ol>

             


            </x-slot>
        </x-services>

       



    </div>
    </div>








    <div class="render py-16" id="horario">
        <div class="grid gap-10">
            <h4 class="subtitle">Horario de atenci&oacute;n</h4>

            <div class="grid gap-4">
                <span class="font-bold">Dias de atenci&oacute;n</span>
                <div class="grid gap-5 sm:flex items-center sm:py-5">
                    <ul class="grid gap-2">
                        <li class="flex gap-3">
                            <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                            <span>Lunes</span>
                        </li>

                        <li class="flex gap-3">
                            <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                            <span>Martes</span>
                        </li>

                        <li class="flex gap-3">
                            <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                            <span>Miércoles</span>
                        </li>

                        <li class="flex gap-3">
                            <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                            <span>Jueves</span>
                        </li>

                        <li class="flex gap-3">
                            <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                            <span>Viernes</span>
                        </li>
                    </ul>

                    <div class="sm:border-l border-l-[#3477db] sm:h-full sm:flex items-center sm:px-5">
                        <span class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">La atenci&oacute;n es de 7:15 am a
                            1:30 pm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="responsable">
        <x-card-servicios>
            <x-slot name="img">{{ asset('images/institucion/directorio/images.png') }}</x-slot>
            <x-slot name="altImg">Lcda. Keilly</x-slot>
            <x-slot name="nombre">Lic. Rojas Esquivel Keilly Geraldine</x-slot>
            <x-slot name="title">Informacion de Contacto</x-slot>
            <x-slot name="departamento">Area de Psicopedagogia</x-slot>
            <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
            <x-slot name="telefono">918675727</x-slot>
            <x-slot name="email">areadepsicologia@isppjfschco.edu.pe</x-slot>
            <x-slot name="titleRedes">S&iacute;genos en</x-slot>
        </x-card-servicios>
    </div>

    <div class="render py-16" id="preguntas">
        <div class="grid gap-6 lg:gap-12">

            <span class="subtitle">Preguntas frecuentes sobre el Servicio de Soporte Psicopedagógico</span>

            <div class="desplegable_servicios grid gap-4">
                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿CUAL ES LA FUNCIÓN DE UN PSICÓLOGO?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>La función de un psicólogo en nuestro centro de estudios es proporcionar apoyo
                            emocional y psicológico a los estudiantes. Ayudamos a abordar desafíos emocionales,
                            académicos y personales, facilitando estrategias para mejorar el bienestar general y
                            el rendimiento académico.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿CÓMO PUEDO PROGRAMAR UNA CITA CON UN PSICÓLOGO?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>: Para programar una cita, puedes hacerlo llamando a la oficina de Soporte Psicopedagógico o
                            visitando personalmente el área. También ofrecemos citas urgentes para situaciones que
                            requieren atención inmediata.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿CUÁLES SON LOS COSTOS ASOCIADOS CON LOS SERVICIOS DE PSICOLOGÍA?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Los servicios de psicología para estudiantes no conllevan costos adicionales.
                            Queremos garantizar que todos los estudiantes tengan acceso a los recursos
                            necesarios para su bienestar emocional.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿CUÁNTAS SESIONES DE ASESORAMIENTO PUEDO TENER Y CON QUÉ FRECUENCIA?</span>
                        </div>
                    </div>
                    <div class="desplegable-item-content">
                        <span>El número de sesiones de asesoramiento puede variar según las necesidades
                            individuales. Generalmente, los estudiantes pueden programar sesiones de
                            asesoramiento según sea necesario, y la frecuencia se determina de manera
                            colaborativa entre el estudiante y el psicólogo.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿MIS SESIONES DE ASESORAMIENTO SERÁN CONFIDENCIALES?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Sí, todas las sesiones de asesoramiento son confidenciales. La información
                            compartida durante las sesiones se mantiene en privado, a menos que haya una
                            preocupación inmediata por la seguridad del estudiante o de otros, en cuyo caso se
                            seguirán los protocolos de seguridad.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿PUEDO INVOLUCRAR A FAMILIARES O AMIGOS EN MI PROCESO DE ASESORAMIENTO?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>La participación de familiares o amigos en el proceso de asesoramiento se discute
                            caso por caso. En general, respetamos la confidencialidad, pero podemos considerar
                            la participación de personas de apoyo si es beneficioso para el estudiante y se
                            obtiene su consentimiento.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿QUÉ DEBO HACER SI NECESITO CANCELAR O REPROGRAMAR UNA CITA?</span>
                        </div>
                    </div>
                    <div class="desplegable-item-content">
                        <span>Si necesitas cancelar o reprogramar una cita,
                            te pedimos que nos avises con la mayor antelación posible.
                            Puedes hacerlo llamando a la oficina de Soporte Psicopedagógico
                            o visitando personalmente el área. Respetamos tu tiempo y queremos
                            asegurarnos de que recibas la atención que necesitas.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection