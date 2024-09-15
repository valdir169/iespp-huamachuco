@extends('layout.app')

@section('title', 'Soporte Médico - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
<x-hero image="{{ asset('images/servicios/topico.jpg') }}" text="Soporte Médico" />

<div class="render">
    <div class="grid gap-5 lg:gap-10 py-16">
        <span class="text-center text-2xl font-bold  2xl:text-3xl">ORGANIZACIÓN</span>

        <ul class="w-auto shadow-2xl  sm:flex justify-center">
            <li
                class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                    <i class='bx bxs-bowl-rice xl:text-[2.5rem]'></i>
                    <span>Manual de Atenci&oacute;n</span>
                </a>
            </li>


            <li
                class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                    <i class='bx bx-bed xl:text-[2.5rem]'></i>
                    <span>Organigrama</span>
                </a>
            </li>


            <li
                class="w-full sm:h-[100px] p-2 flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[180px]  xl:h-[120px]">
                <a class="min-w-[90%] flex items-center justify-center gap-4 text-center sm:flex-col sm:gap-2">
                    <i class='bx bxs-donate-blood xl:text-[2.5rem]'></i>
                    <span>Flujograma</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<x-services>
    <x-slot name='servicio'>Soporte Médico</x-slot>
    <x-slot name='frase'>Una vida sin salud, es como un río sin agua. </x-slot>
    <x-slot name='autor'> (Maxime Lagacé)</x-slot>
    <x-slot name='img'>{{ asset('images/servicios/User_Topico.jpg') }}</x-slot>
    <x-slot name='altImg'>ServicioTópico</x-slot>
    <x-slot name='parrafo'>
        <p class="grid sm:px-6">
        <p class="titulo_info">PRESENTACIÓN</p>
        <br><br>
        <p class="texto_info"> El servicio de soporte medico ha sido implementado por la gerencia regional de educación La Libertad (GRELL), y adoptado por nuestra institución educativa para el logro de las condicione básicas de calidad del ISPP “JFCS”, a fin de lograr una eficiente prestación del servicio educativo. De esta manera nuestros futuros docentes podrán tener una educación de calidad.
        </p>
        <br><br>

        <p class="titulo_info">OBJETIVO PRINCIPAL</p>
        <br><br>
        <p class="texto_info">Establecer las actividades, controles e intervenciones necesarias y específicas que compete al personal de salud asignado al instituto superior pedagógico publico José Faustino Sánchez Carrión para mantener y asegurar la salud e integridad física de los estudiantes, docentes y personal administrativo de esta casa de estudios.
        </p>
        </p>
    </x-slot>
</x-services>

<div class="bg-[#ebebeb] py-16">
    <div class="render grid gap-4  lg:gap-8">
        <h2 class="subtitle">Ofrecemos hacistencia en:</h2>

        <div class="card-container-topico">
            <x-card-topico>
                <x-slot name="icon"><i class='bx bx-plus-medical text-[55px] text-[#3477db]'></i></x-slot>
                <x-slot name="title">Primeros Auxilios y Emergencias Médicas</x-slot>
                <x-slot name="description">
                    Atención inmediata y coordinación con servicios médicos de emergencia
                    en casos de enfermedades súbitas, problemas respiratorios graves, reacciones alérgicas
                    graves, etc.
                </x-slot>
            </x-card-topico>

            <x-card-topico>
                <x-slot name="icon"><i class='bx bx-swim text-[55px] text-[#3477db]'></i></x-slot>
                <x-slot name="title">Promoción y prevención de la salud </x-slot>
                <x-slot name="description">Asistencia para lesiones deportivas leves, como torceduras,
                    esguinces, contusiones, y manejo inicial antes de referir a un profesional médico.</x-slot>
            </x-card-topico>

            <x-card-topico>
                <x-slot name="icon"><i class='bx bxs-clinic text-[55px] text-[#3477db]'></i></x-slot>
                <x-slot name="title">Datos Actuales del Servicio</x-slot>
                <x-slot name="description">Atención a heridas y cortaduras menores, incluido el lavado y
                    desinfección de la herida y la aplicación de vendajes.</x-slot>
            </x-card-topico>


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
                    <span class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">La atenci&oacute;n es de 7:00 am a
                        1:00 pm</span>
                </div>
                <ul class="grid gap-2">
                    <li class="flex gap-3">
                        <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                        <span>Lunes</span>
                    </li>

                    <li class="flex gap-3">
                        <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                        <span>Miércoles</span>
                    </li>

                    <li class="flex gap-3">
                        <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                        <span>Viernes</span>
                    </li>
                </ul>

                <div class="sm:border-l border-l-[#3477db] sm:h-full sm:flex items-center sm:px-5">
                    <span class="text-xl font-[Roboto-thin] font-bold sm:text-2xl">Orientación y Promoción de la Salud es de 12:00 am a
                        1:00 pm</span>
                </div>

            </div>
        </div>
    </div>
</div>

<x-card-servicios>
    <x-slot name="img">{{ asset('images/institucion/directorio/images.png') }}</x-slot>
    <x-slot name="altImg">Lcda. Ana</x-slot>
    <x-slot name="nombre">Lic. enfermería Betzabel Abigail Carbonell Acosta
    </x-slot>
    <x-slot name="title">Informacion de Contacto</x-slot>
    <x-slot name="departamento">Departameto de Tópico</x-slot>
    <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
    <x-slot name="telefono">973311161</x-slot>
    <x-slot name="email">soportemedico@isppjfschco.edu.pe</x-slot>
    <x-slot name="titleRedes">Siguenos en Redes</x-slot>
    
</x-card-servicios>



<div class="render py-16">
    <div class="grid gap-6">
        <h4 class="subtitle">Preguntas frecuentes sobre el Servicio de Soporte Médico</h4>

        <div class="desplegable_servicios grid gap-4">
            <div class="desplegable-item">
                <div class="desplegable-item__content">
                    <div
                        class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                        <i class='bx bx-plus'></i>
                    </div>
                    <div class="desplegable-item-list"><span>¿QUÉ ES EL SERVICIO DE SOPORTE MÉDICO?</span></div>
                </div>
                <div class="desplegable-item-content">
                    <span>Es un servicio a cargo de la unidad de bienestar y empleabilidad, cuya función principal
                        es la atención oportuna ante emergencias y problemas de salud que se presentes en el IESPP “JFSC”
                        tanto en sus alumnos como personal docente y administrativo, así como la promoción y prevención de
                        la salud. .</span>
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
                    <span>Para acceder al servicio de soporte médico debes ser alumno, docente o personal
                        administrativo del ISPP “JFSC”.</span>
                </div>
            </div>

            <div class="desplegable-item">
                <div class="desplegable-item__content">
                    <div
                        class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                        <i class='bx bx-plus'></i>
                    </div>

                    <div class="desplegable-item-list">
                        <span>¿EN QUÉ SITUACIONES PUEDO BUSCAR AYUDA DEL SERVICIO DE SOPORTE MÉDICO?</span>
                    </div>
                </div>

                <div class="desplegable-item-content">
                    <span>Ante algún malestar, cualquier emergencia o problema de salud y necesitar orientación sobre temas relacionados a la salud.</span>
                </div>
            </div>

            <div class="desplegable-item">
                <div class="desplegable-item__content">
                    <div
                        class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                        <i class='bx bx-plus'></i>
                    </div>
                    <div class="desplegable-item-list">
                        <span>¿ES NECESARIO AGENDAR UNA CITA PARA RECIBIR ATENCIÓN DEL SERVICIO DE SOPORTE MÉDICO?</span>
                    </div>
                </div>
                <div>
                    <div class="desplegable-item-content">
                        <span>Si es por algún malestar, emergencia. NO
                            Si es para orientación personal en temas de la salud se realiza previa coordinación con el personal a cargo del servicio.
                            .</span>
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
                        SOPORTE MÉDICO?
                        </span>
                    </div>
                </div>

                <div class="desplegable-item-content">
                    <span>El personal a cargo es una la Lic. en enfermería Betzabel Abigail Carbonell Acosta.</span>
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
                <span>Es totalmente gratuito .</span>
            </div>
        </div>

        
    </div>
</div>
@endsection