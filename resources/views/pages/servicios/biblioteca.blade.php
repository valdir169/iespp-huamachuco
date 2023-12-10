@extends('layout.app')

@section('title', 'Biblioteca - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/servicios/Biblioteca.jpg') }}" text="Biblioteca" />


    <div class="py-16">
        <div class="sm:border-y border-y-[#d9d9d9]  w-full">
            <div class="render w-full">
                {{-- header biblioteca --}}
                <ul class="w-full grid grid-cols-2 sm:flex justify-center">
                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#servicio" class="flex flex-col text-center gap-2">
                            <i class='bx bx-book-bookmark text-[25px]'></i>
                            <span>Sobre el servicio</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#catalago" class="flex flex-col text-center gap-2">
                            <i class='bx bx-list-ol text-[25px]'></i>
                            <span>Cat&aacute;logo</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#horario" class="flex flex-col text-center gap-2">
                            <i class='bx bx-time-five text-[25px]'></i>
                            <span>Horarios</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#responsable" class="flex flex-col text-center gap-2">
                            <i class='bx bx-user text-[25px]'></i>
                            <span>Responsable</span>
                        </a>
                    </li>

                    <li
                        class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]">
                        <a href="#preguntas" class="flex flex-col text-center gap-2">
                            <i class='bx bx-question-mark text-[25px]'></i>
                            <span>Preguntas Frecuentes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div id="servicio">
        <x-services>
            <x-slot name='servicio'>Biblioteca</x-slot>
            <x-slot name='frase'>El que lee mucho y anda mucho, ve mucho y sabe mucho</x-slot>
            <x-slot name='autor'> (Miguel de Cervantes Saavedra)</x-slot>
            <x-slot name='img'>{{ asset('images/servicios/User_biblioteca.jpg') }}</x-slot>
            <x-slot name='altImg'>Servicio de Biblioteca</x-slot>
            <x-slot name='parrafo'>
                <div class="grid sm:px-6">
                    <span>El servicio de Biblioteca tiene como objetivo fomentar el acceso a la información, promover la
                        lectura y contribuir al desarrollo académico y cultural de la comunidad educativa del "IESPP-JFSC
                        Huamachuco". Nuestra misión es proporcionar recursos y servicios que apoyen el aprendizaje, la
                        investigación y el enriquecimiento personal.</span> <br>

                    <span>Además, nos esforzamos por crear un ambiente acogedor y propicio para el estudio individual y
                        colaborativo. La biblioteca no solo es un depósito de libros, sino un centro dinámico que busca
                        apoyar el desarrollo integral de nuestros estudiantes.</span>
                </div>
            </x-slot>
        </x-services>
    </div>

    <div class="bg-[#3477db]" id="catalago">
        <div class="render">
            <div class="grid gap-5 py-32 lg:gap-10 xl:gap-20">
                <div class="text-white text-center">
                    <h3 class="subtitle">Cat&aacute;logo de libros por programa de Estudios</h3>
                    <span>(Biblioteca Fisica)</span>
                </div>

                <div class="grid grid-colum-1 sm:flex justify-center gap-5">
                    <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border card-animation">
                        <div class="my-4 text-white sm:h-[150px]">
                            <i class='bx bx-child text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                            <span>Educaci&oacute;n Inicial</span><br>
                        </div>

                        <a href="https://drive.google.com/file/d/1ii0Cc3r6hgbiIW44mRMHfq7kf8tjTTlI/view?usp=sharing"
                            target="_blank"
                            class="bg-[#ffffff] text-black cursor-pointer hover:shadow-xl
                                    outline-none font-bold rounded-lg py-2 text-center no-underline  px-12  transition-all duration-200 opacity-90 hover:opacity-100">Ver
                            Cat&aacute;logo
                        </a>
                    </div>

                    <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border card-animation">
                        <div class="my-4 text-white sm:h-[150px]">
                            <i class='bx bx-hive text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                            <span>Idiomas, Especilidad: Ingles</span><br>
                        </div>

                        <a href="https://drive.google.com/file/d/16j9WUN-e_pG5eAduMDtJCq5qST9VIfYJ/view?usp=sharing"
                            target="_blank"
                            class="bg-[#ffffff] text-black cursor-pointer hover:shadow-xl
                                    outline-none font-bold rounded-lg py-2 text-center no-underline  px-12  transition-all duration-200 opacity-90 hover:opacity-100">Ver
                            Cat&aacute;logo
                        </a>
                    </div>

                    <div class="py-10 p-4 text-center sm:w-[30%] lg:w-[25%] border card-animation">
                        <div class="my-4 text-white sm:h-[150px]">
                            <i class='bx bx-user-voice text-[2rem] lg:text-[3rem] xl:text-[5rem] text-[#ebebeb]'></i><br>
                            <span>Educaci&oacute;n Secundaria Especilidad: Comunicaci&oacute;n</span><br>
                        </div>

                        <a href="https://drive.google.com/file/d/1jvNBoMIXGStIoDXwC_tVoDTLEZw4OpU6/view?usp=sharing"
                            target="_blank"
                            class="bg-[#ffffff] text-black cursor-pointer hover:shadow-xl
                                    outline-none font-bold rounded-lg py-2 text-center no-underline  px-12  transition-all duration-200 opacity-90 hover:opacity-100">Ver
                            Cat&aacute;logo
                        </a>
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
                        <span class="flex gap-3">
                            <i class='bx bxs-calendar text-[25px] text-[#3477db]'></i>
                            <span>Lunes</span>

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
                            1:00pm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="responsable">
        <x-card-servicios>
            <x-slot name="img">{{ asset('images/institucion/directorio/images.png') }}</x-slot>
            <x-slot name="altImg">bibliotecaria</x-slot>
            <x-slot name="nombre">Cecilia Liliana Alarco Narváez</x-slot>
            <x-slot name="title">Información de Contacto</x-slot>
            <x-slot name="departamento">Departameto de Biblioteca</x-slot>
            <x-slot name="direccion">Prolog. Sánchez Carrión 1400 – Huamachuco</x-slot>
            <x-slot name="telefono">948 036 645</x-slot>
            <x-slot name="email">biblioteca@jfsc.edu.pe</x-slot>
            <x-slot name="titleRedes">S&iacute;genos en</x-slot>
        </x-card-servicios>
    </div>


    <div class="render py-16" id="preguntas">
        <div class="grid gap-6">
            <h5 class="subtitle">Preguntas frecuentes sobre el Servicio de Biblioteca</h5>

            <div class="desplegable_servicios grid gap-4">
                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿CÓMO PUEDO ACCEDER A LA BIBLIOTECA?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Para acceder a la biblioteca, simplemente presenta tu tarjeta de identificación estudiantil en
                            el mostrador de entrada. Si eres un estudiante nuevo, puedes solicitar una tarjeta en la oficina
                            de servicios estudiantiles.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿QUÉ MATERIALES HAY EN LA BIBLIOTECA?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>La biblioteca cuenta con una amplia gama de materiales, incluyendo libros impresos, revistas,
                            periódicos y materiales multimedia. Además, ofrecemos acceso a recursos en línea, bases de datos
                            académicas y libros electrónicos para apoyar tus estudios e investigaciones.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿QUÉ MATERIALES PUEDO TOMAR PRESTADOS?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Puedes tomar prestados libros, DVDs, CDs, y otros materiales físicos de la biblioteca. Además,
                            ofrecemos acceso en línea a una variedad de recursos digitales. La duración del préstamo es de
                            dos semanas para libros y una semana para materiales multimedia.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿HAY UN LÍMITE EN LA CANTIDAD DE MATERIALES QUE PUEDO TOMAR PRESTADOS?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Sí, hay un límite de 5 materiales por estudiante para préstamos simultáneos. Sin embargo,
                            puedes renovar el préstamo si es necesario, siempre y cuando no haya solicitudes de otros
                            estudiantes para el mismo material.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>
                        <div class="desplegable-item-list">
                            <span>¿QUÉ HACER SI PIERDO UN LIBRO O MATERIAL PRESTADO?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>En caso de perder un libro o material prestado, te pedimos que nos informes de inmediato.
                            Puedes pagar el costo de reemplazo del material perdido o proporcionar una copia nueva del
                            mismo. Haremos todo lo posible por encontrar una solución justa y resolver el problema.</span>
                    </div>
                </div>

                <div class="desplegable-item">
                    <div class="desplegable-item__content">
                        <div
                            class="icon-container desplegable-item-list w-[40px] bg-[#3477db] flex items-center justify-center text-white hover:bg-[#ebebeb] hover:text-black py-3 px-6">
                            <i class='bx bx-plus'></i>
                        </div>

                        <div class="desplegable-item-list">
                            <span>¿HAY ESPACIOS DE ESTUDIO GRUPAL DISPONIBLES EN LA BIBLIOTECA?</span>
                        </div>
                    </div>

                    <div class="desplegable-item-content">
                        <span>Sí, la biblioteca ofrece espacios de estudio grupal equipados con mesas, sillas y pizarras
                            para facilitar la colaboración entre estudiantes. Puedes reservar estas salas de estudio en
                            línea o en el mostrador de información de la biblioteca.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
