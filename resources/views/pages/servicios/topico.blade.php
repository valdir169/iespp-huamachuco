@extends('layout.app')

@section('title', 'Tópico - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/servicios/topico.jpg') }}" text="Tópico" />

    <div class="render">
        <div class="grid gap-5 lg:gap-10 py-16">
            <span class="text-center text-2xl font-bold  2xl:text-3xl">Buenos Hábitos</span>

            <ul class="w-auto shadow-2xl  sm:flex justify-center">
                <li
                    class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                    <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                        <i class='bx bxs-bowl-rice xl:text-[2.5rem]'></i>
                        <span>Buena Alimentaci&oacute;n</span>
                    </a>
                </li>

                <li
                    class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                    <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                        <i class='bx bx-run xl:text-[2.5rem]'></i>
                        <span>Hacer Ejercicio</span>
                    </a>
                </li>

                <li
                    class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                    <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                        <i class='bx bx-bed xl:text-[2.5rem]'></i>
                        <span>Dormir lo Suficinete</span>
                    </a>
                </li>

                <li
                    class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                    <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                        <i class='bx bxs-wine xl:text-[2.5rem]'></i>
                        <span>Hidratarse</span>
                    </a>
                </li>

                <li
                    class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                    <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                        <i class='bx bxs-donate-blood xl:text-[2.5rem]'></i>
                        <span>Buena Higiene</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <x-services>
        <x-slot name='servicio'>Tópico</x-slot>
        <x-slot name='frase'>Una vida sin salud, es como un río sin agua. </x-slot>
        <x-slot name='autor'> (Maxime Lagacé)</x-slot>
        <x-slot name='img'>{{ asset('images/servicios/User_Topico.jpg') }}</x-slot>
        <x-slot name='altImg'>ServicioTópico</x-slot>
        <x-slot name='parrafo'>
            <p class="grid sm:px-6">
                El servicio de Tópico tiene como propósito fundamental contribuir al cuidado y bienestar
                de la comunidad educativa del "IESPP-JFSC Huamachuco". Nuestra misión se enfoca en
                proporcionar servicios de atención médica y promover prácticas saludables entre los
                estudiantes y el personal.
                <br><br>
                Estamos comprometidos con la prevención, el cuidado y la atención de situaciones de salud,
                trabajando para mantener un ambiente seguro y saludable en el entorno educativo. Nos
                esforzamos por brindar asistencia inmediata en casos de emergencias médicas, así como para
                ofrecer orientación en temas de salud preventiva.
            </p>
        </x-slot>
    </x-services>
        
    <div class="bg-[#ebebeb] py-16">
        <div class="render grid gap-4  lg:gap-8">
            <h2 class="subtitle">Ofrecemos hacistencia en:</h2>

            <div class="card-container-topico">
                <x-card-topico>
                    <x-slot name="icon"><i class='bx bx-plus-medical text-[55px] text-[#3477db]'></i></x-slot>
                    <x-slot name="title">Emergencias Médicas</x-slot>
                    <x-slot name="description">
                        Atención inmediata y coordinación con servicios médicos de emergencia
                        en casos de enfermedades súbitas, problemas respiratorios graves, reacciones alérgicas
                        graves, etc.
                    </x-slot>
                </x-card-topico>

                <x-card-topico>
                    <x-slot name="icon"><i class='bx bx-swim text-[55px] text-[#3477db]'></i></x-slot>
                    <x-slot name="title">Lesiones Deportivas</x-slot>
                    <x-slot name="description">Asistencia para lesiones deportivas leves, como torceduras,
                        esguinces, contusiones, y manejo inicial antes de referir a un profesional médico.</x-slot>
                </x-card-topico>

                <x-card-topico>
                    <x-slot name="icon"><i class='bx bxs-clinic text-[55px] text-[#3477db]'></i></x-slot>
                    <x-slot name="title">Heridas y Cortaduras</x-slot>
                    <x-slot name="description">Atención a heridas y cortaduras menores, incluido el lavado y
                        desinfección de la herida y la aplicación de vendajes.</x-slot>
                </x-card-topico>

                <x-card-topico>
                    <x-slot name="icon"><i class='bx bxs-meteor text-[55px] text-[#3477db]'></i></x-slot>
                    <x-slot name="title">Quemaduras Leves</x-slot>
                    <x-slot name="description">Tratamiento inicial para quemaduras leves, incluido el enfriamiento
                        de la zona afectada y la aplicación de apósitos o geles.</x-slot>
                </x-card-topico>

                <x-card-topico>
                    <x-slot name="icon"><i class='bx bxs-virus text-[55px] text-[#3477db]'></i></x-slot>
                    <x-slot name="title">Reacciones Alérgicas Menores</x-slot>
                    <x-slot name="description">Asistencia para reacciones alérgicas leves, como picaduras de
                        insectos o contacto con alérgenos conocidos.</x-slot>
                </x-card-topico>

                <x-card-topico>
                    <x-slot name="icon"><i class='bx bx-male-female text-[55px] text-[#3477db]'></i></x-slot>
                    <x-slot name="title">Educación en Salud</x-slot>
                    <x-slot name="description">Proporcionar información educativa sobre temas de salud relevantes
                        para los estudiantes.</x-slot>
                </x-card-topico>
            </div>
        </div>
    </div>

    <article class="render py-16 grid gap-10">
        <h4 class="subtitle text-center">Horario de atenci&oacute;n</h4>

        <div class="grid gap-4">
            <span class="font-bold">Dias de atenci&oacute;n</span>
            <div class="grid gap-5 sm:flex items-center sm:py-5">
                <ul class=" gap-2 grid   md:flex">
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

                <div class="sm:border-l border-l-[#3477db] sm:h-full sm:flex items-center sm:px-5"><span
                        class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">La atenci&oacute;n es de
                        7:15am a 1:00am</span></div>
            </div>
        </div>
    </article>

    <x-card-servicios>
        <x-slot name="img">{{ asset('images/institucion/directorio/images.png') }}</x-slot>
        <x-slot name="altImg">Lcda. Ana</x-slot>
        <x-slot name="nombre">Lcda. Ana Roely Vasquez Cruzado</x-slot>
        <x-slot name="title">Informacion de Contacto</x-slot>
        <x-slot name="departamento">Departameto de Tópico</x-slot>
        <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
        <x-slot name="telefono">949 949 494</x-slot>
        <x-slot name="email">topico@jfsc.edu.pe</x-slot>
        <x-slot name="titleRedes">S&iacute;genos en</x-slot>
    </x-card-servicios>

    <div class="render py-16">
        <div class="grid gap-6">
            <h4 class="subtitle">Preguntas frecuentes sobre el Servicio de Tópico</h4>

            <div class="desplegable_servicios grid gap-4">
                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list"><span>¿QUÉ ES EL SERVICIO DE TÓPICO?</span></div>
                    </div>
                    <div class="desplegable-item-content">
                        <span>El Servicio de Tópico es un servicio de atención médica básica disponible para los
                            estudiantes. Ofrece asistencia para problemas de salud menores y proporciona servicios
                            como primeros auxilios, evaluación de síntomas y administración de medicamentos de venta
                            libre.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list"><span>¿CÓMO PUEDO ACCEDER AL SERVICO?</span></div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Puedes acceder al Servicio de Tópico presentando tu tarjeta de identificación
                            estudiantil en la recepción. Opera durante el horario regular del IESPP - José Faustino
                            Sánchez Carrión.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿EN QUÉ SITUACIONES PUEDO BUSCAR AYUDA DEL SERVICIO DE TÓPICO?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>El Servicio de Tópico está diseñado para situaciones de salud menores, como pequeñas
                            lesiones, dolores leves, o síntomas de enfermedades comunes. Siempre se recomienda
                            buscar atención especializada para casos más graves.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿ES NECESARIO AGENDAR UNA CITA PARA RECIBIR ATENCIÓN DEL SERVICIO DE TÓPICO?</span>
                        </div>
                    </div>
                    <div>
                        <div class="desplegable-item-content">
                            <span>Generalmente, no es necesario agendar una cita para el Servicio de Tópico. Sin
                                embargo, durante períodos ocupados, como el inicio de semestre, puede ser útil llamar
                                con antelación para verificar la disponibilidad y reducir el tiempo de espera.</span>
                        </div>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿QUIÉNES SON LOS PROFESIONALES ENCARGADOS DE BRINDAR ATENCIÓN EN EL SERVICIO DE
                                TÓPICO?
                            </span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>El Servicio de Tópico cuenta con un especilista de la salud capacitados para brindar
                            atención básica. En casos más complejos, pueden referirte a un médico o especialista
                            según sea necesario.</span>
                    </div>
                </div>
            </div>

            <div class="desplegable-item">
                <div class="desplegable-item__content">
                    <div
                        class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                        <i class='bx bx-plus'></i>
                    </div>
                    <div class="desplegable-item-list">
                        <span>¿EL SERVICIO DE TÓPICO TIENE ALGUN COSTO?</span>
                    </div>
                </div>

                <div class="desplegable-item-content">
                    <span>Por lo general, el Servicio de Tópico está incluido como parte de los beneficios de
                        salud para estudiantes. Se recomienda verificar con el departamento de servicios
                        estudiantiles para obtener información específica sobre cobertura y posibles
                        costos.</span>
                </div>
            </div>

            <div class="desplegable-item">
                <div class="desplegable-item__content">
                    <div
                        class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                        <i class='bx bx-plus'></i>
                    </div>
                    <div class="desplegable-item-list">
                        <span>¿EL SERVICIO DE TÓPICO OFRECE ATENCIÓN FUERA DEL HORARIO REGULAR DE LA UNIVERSIDAD?</span>
                    </div>
                </div>

                <div class="desplegable-item-content">
                    <span>El Servicio de Tópico opera durante el horario regular de la universidad. Para
                        situaciones fuera de ese horario, se sugiere buscar atención en servicios de urgencias o
                        centros médicos locales.</span>
                </div>
            </div>

            <div class="desplegable-item">
                <div class="desplegable-item__content">
                    <div
                        class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                        <i class='bx bx-plus'></i>
                    </div>
                    <div class="desplegable-item-list">
                        <span>¿QUÉ DEBO HACER EN CASO DE UNA LESIÓN MÁS GRAVE QUE REQUIERA ATENCIÓN MÉDICA
                            ESPECIALIZADA?</span>
                    </div>
                </div>

                <div class="desplegable-item-content">
                    <span>En casos de lesiones más graves que requieran atención especializada, se recomienda
                        buscar atención médica de emergencia o dirigirse al hospital más cercano. El Servicio de
                        Tópico está destinado para situaciones menos urgentes.</span>
                </div>
            </div>
        </div>
    </div>
@endsection
