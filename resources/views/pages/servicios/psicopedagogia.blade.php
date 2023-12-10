@extends('layout.app')

@section('title', 'Psicopedagogía - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')

    <x-hero image="{{ asset('images/servicios/psicopedagogia.jpg') }}" text="Psicopedagogía" />

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
                    </ul>
                </div>
            </div>

            <div id="servicio">
                <x-services>
                    <x-slot name='servicio'>Psicopedagogia</x-slot>
                    <x-slot name='frase'>El secreto de la existencia humana no sólo está en vivir, sino también en
                        saber
                        para qué se vive.</x-slot>
                    <x-slot name='autor'> _Miguel de Cervantes Saavedra</x-slot>
                    <x-slot name='img'>{{ asset('images/servicios/User_psicopedagogia.jpg') }}</x-slot>
                    <x-slot name='altImg'>Servicio de Psicopedagogia</x-slot>
                    <x-slot name='parrafo'>
                        <p class="grid sm:px-6">
                            <span>El servicio de Socopedagogía tiene como objetivo principal promover el desarrollo
                                integral
                                de los estudiantes en el contexto educativo del "IESPP-JFSC Huamachuco". Nuestra misión
                                se
                                centra en ofrecer recursos y servicios que apoyen el aprendizaje, la adaptación y el
                                bienestar socioemocional de la comunidad educativa.</span> <br>
                            <span>Este servicio está dedicado a brindar orientación y apoyo a los estudiantes en
                                aspectos
                                académicos y socioemocionales. Buscamos crear un espacio inclusivo y colaborativo donde
                                se
                                fomente el crecimiento personal, la autoestima y las habilidades sociales. Además, nos
                                esforzamos por identificar y abordar las necesidades individuales de cada estudiante,
                                proporcionando estrategias y recursos personalizados.</span>
                        </p>
                    </x-slot>
                </x-services>

                <div class="bg-[#ebebeb]">
                    <div class="render py-12 grid gap-8 sm:gap-14">
                        <span class="subtitle">Ofrecemos</span>

                        <div class="grid gap-4 sm:flex items-center justify-center">
                            <div
                                class="flex p-2 text-center gap-5 sm:flex items-center justify-center sm:flex-col sm:w-[200px] sm:h-[250px] border border-[#3477db] lg:w-[300px] card-animation">
                                <i class='bx bxs-user-check text-[50px] text-[#3477db]'></i>
                                <span>Asesoramiento Individual</span>
                            </div>

                            <div
                                class="flex p-2 text-center gap-5 sm:flex items-center justify-center sm:flex-col sm:w-[200px] sm:h-[250px] border border-[#3477db] lg:w-[300px] card-animation">
                                <i class='bx bx-male-female text-[50px] text-[#3477db]'></i>
                                <span>Terapia Grupal</span>
                            </div>

                            <div
                                class="flex p-2 text-center gap-5 sm:flex items-center justify-center sm:flex-col sm:w-[200px] sm:h-[250px] border border-[#3477db] lg:w-[300px] card-animation">
                                <i class='bx bxs-book-reader text-[50px] text-[#3477db]'></i>
                                <span>Talleres de Desarrollo Personal y Bienestar</span>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <i class='bx bx-lock text-[60px] text-[#3477db]'></i>
                            <span>Confidencialidad y ética en los servicios de Psicopedagogía.</span>
                        </div>
                    </div>
                </div>
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
                            <span class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">La atenci&oacute;n es de 7:15am a
                                1:00am</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="responsable">
            <x-card-servicios>
                <x-slot name="img">{{ asset('images/institucion/directorio/images.png') }}</x-slot>
                <x-slot name="altImg">Lcda. Ana</x-slot>
                <x-slot name="nombre">Lcda. Ana Roely Vasquez Cruzado</x-slot>
                <x-slot name="title">Informacion de Contacto</x-slot>
                <x-slot name="departamento">Departameto de Psicopedagogia</x-slot>
                <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
                <x-slot name="telefono">949 949 494</x-slot>
                <x-slot name="email">psicopedagogia@jfsc.edu.pe</x-slot>
                <x-slot name="titleRedes">S&iacute;genos en</x-slot>
            </x-card-servicios>
        </div>

        <div class="render py-16" id="preguntas">
            <div class="grid gap-6 lg:gap-12">

                <span class="subtitle">Preguntas frecuentes sobre el Servicio de Psicopedagogia</span>

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
                            <span>Para programar una cita con un psicólogo, puedes hacerlo a través de nuestro
                                sistema en línea, llamando a la oficina de servicios estudiantiles o visitando
                                personalmente el centro. También ofrecemos citas urgentes para situaciones que
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
                            <span>Si necesitas cancelar o reprogramar una cita, te pedimos que nos avises con la
                                mayor antelación posible. Puedes hacerlo llamando a la oficina de servicios
                                estudiantiles o a través de nuestro sistema en línea. Respetamos tu tiempo y
                                queremos asegurarnos de que recibas la atención que necesitas.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
