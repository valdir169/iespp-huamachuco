@extends('layout.app')

@section('title', 'Educación Inicial')

@section('content')
    <section>
        <x-presentation>
            <x-slot name="img">{{ asset('images/bg-admision.jpg')}}</x-slot>
            <x-slot name="inicioLink">{{ route('index') }}</x-slot>
            <x-slot name="inicioText">Inicio</x-slot>
            <x-slot name="carrerasLink">{{ route('carreras') }}</x-slot>
            <x-slot name="carrerasText">Carreras</x-slot>
            <x-slot name="especialidadLink">{{ route('inicial') }}</x-slot>
            <x-slot name="titulo">EDUCACI&Oacute;N INICIAL</x-slot>
            <x-slot name="descripcion">Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollan los niños y niñas, promover que los niños establezcan vínculos, que logren autonomía misma, y que desarrollen iniciativa para jugar.</x-slot>
            <x-slot name="duracion">10 Semestres Académicos (5 años)</x-slot>
            <x-slot name="titulacion">Profesional Pedagógico en Educaci&oacute;n Inicial</x-slot>
            <x-slot name="modalidad">Presencial</x-slot>
        </x-presentation>
    </section>
    <section class="py-5 sm:-mt-12 lg:-mt-16 2xl:-mt-20">
        <article class="render">
            <div class="sm:flex justify-center">
                <div class="bg-[#D9D9D9] border p-2 text-center hover:text-white hover:bg-[#2277db] sm:flex justify-center items-center sm:w-[200px] sm:h-[85px] lg:pt-4 lg:h-[100px] 2xl:sm:w-[300px] 2xl:h-[150px] 2xl:pt-6">
                    <a class="text-xs sm:flex flex-col lg:text-base" href="#logros"><i class='bx bx-line-chart sm:text-[30px] sm:pb-1 2xl:text-[50px]'></i>Lo que lograrás</a>
                </div>
                <div class="bg-[#D9D9D9] border p-2 text-center hover:text-white hover:bg-[#2277db] sm:flex justify-center items-center sm:w-[200px] sm:h-[85px]lg:pt-4 lg:h-[100px] 2xl:sm:w-[300px] 2xl:h-[150px] 2xl:pt-6">
                    <a class="text-xs sm:flex flex-col lg:text-base" href="#requisitos"><i class='bx bx-list-plus sm:text-[30px] sm:pb-1 2xl:text-[50px]'></i>Requisítos</a>
                </div>
                <div class="bg-[#D9D9D9] border p-2 text-center hover:text-white hover:bg-[#2277db] sm:flex justify-center items-center sm:w-[200px] sm:h-[85px]lg:pt-4 lg:h-[100px] 2xl:sm:w-[300px] 2xl:h-[150px] 2xl:pt-6">
                    <a class="text-xs sm:flex flex-col lg:text-base" href="#curricula"><i class='bx bx-food-menu sm:text-[30px] sm:pb-1 2xl:text-[50px]'></i>Currícula</a>
                </div>
            </div>
        </article>
    </section>
    <section class="render py-5 grid gap-4 lg:gap-8">
        <article class="grid gap-2 lg:gap-4 2xl:gap-8" id="logros">
            <div class="flex flex-col text-center">
                <i class='bx bx-down-arrow-alt text-[2rem] text-[#2277bd] lg:text-[3rem] 2xl:text-[4rem]'></i>
                <span class="text-sm font-black lg:text-lg 2xl:text-xl">Lo que lograrás</span>
            </div>
            <div class="grid gap-3 sm:flex">
                <div class="sm:w-1/2">
                    <span class="text-xs font-black text-[#2277db] lg:text-base">Al estudiar esta carrera serás capaz de:</span>
                    <div class="text-xs grid gap-2 lg:gap-6 pt-2 lg:pt-4">
                        <ul>
                            <span class="font-black">DOMINIO 1</span>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Conoce a los estudiantes, el contexto y la pedagogía.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Planifica la enseñanza.</span></li>
                        </ul>
                        <ul>
                            <span class="font-black">DOMINIO 2</span>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Crea un clima propicio para el aprendizaje.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Conduce el proceso de enseñanza.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Evalúa permanentemente el aprndizaje.</span></li>
                        </ul>
                        <ul>
                            <span class="font-black">DOMINIO 3</span>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Establece relaciones con las familias y la comunidad.</span></li>
                        </ul>
                        <ul>
                            <span class="font-black">DOMINIO 4</span>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Investiga la práctica docente.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Gestiona entornos digitales.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Gestiona su desarrollo personal.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Ejerce éticamente su profesión.</span></li>
                            <li class="flex pl-2"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-sm">Reflexiona sobre su práctica.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="sm:w-1/2">
                    <span class="text-xs font-black text-[#2277db] lg:text-base">Podrás desempeñarte en:</span>
                    <ul class="pt-2 lg:pt-4">
                        <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="text-xs lg:text-sm">Instituciones Educativas de Educación Inicial (Publicas y Privadas), como Profesional Pedagógico en Educación Inicial.</span></li>
                    </ul>
                </div>
            </div>
        </article>
        <article id="requisitos">
            <div class="grid gap-3 lg:gap-6 lg:gap-12">
                <div class="text-center">
                    <span class="text-sm font-black lg:text-lg 2xl:text-xl">Requisitos</span>
                    <p class="text-xs lg:text-base">Para poder estudiar esta carrera nesecitas lo siguiente:</p>
                </div>
                <div class="grid gap-3 sm:flex">
                    <div>
                        <span class="text-xs font-black text-[#2277db] lg:text-base">Para postular nesecitas lo siguiente:</span>
                        <ul class="text-xs grid gap-2 lg:pt-4">
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Haber culminado la secundaria.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Partida de nacimiento original.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Certificado de estudios secundarios.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Fotocopia DNI.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Dos fotografías tamaño carnet a color.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Recibo de pago por inscripción a la cta. banco de la nación: <span class="font-black">080-100-3141</span> (Preguntar en Secretaria).</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Carpeta de postulante recabada de administración del IESPP José Faustino Sánchez Carrión.</span></li>
                        </ul>
                    </div>
                    <div>
                        <span class="text-xs font-black text-[#2277db] lg:text-base">Para matricularte nesecitas lo siguiente:</span>
                        <ul class="text-xs grid gap-2 lg:pt-4">
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Pago por derecho de matricula.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 lg:text-xl'></i><span class="lg:text-base">Aprobar como mínimo el 75% de créditos (Esto es solo para lo que ya están cursando su carrera).</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="text-center">
                <a class="text-xs py-1 bg-[#2277db] px-8 text-white rounded-full lg:text-base lg:py-2 lg:px-20" href="{{ route('admision') }}">Obtiene mas informacion <span class="hidden lg:inline">sobre admisión</span></a>
            </div>
        </article>
    </section>
    <section class="render py-5 grid gap-3" id="curricula">
        <article>
            <div class="text-center">
                <span class="text-sm font-black lg:text-lg 2xl:text-xl">Currícula</span>
                <p class="text-xs lg:text-base">Estos serán las Unidades Didacticas de cada semestre del año escolar.</p>
            </div>
        </article>
    </section>
    <section>
        <article class="render bg-[#D9D9D9]">
            <div class="py-4 grid gap-2 sm:grid-cols-2 lg:py-10 lg:gap-6">
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">1</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo I</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Lectura y escritura en la Educación Superior.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Resolución de Problemas Matemáticos.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo Personal.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Fundamentos de la Educación Inicia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Interacciones de calidad y desarrollo en la Primera Infancia I.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">2</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo II</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Comunicación Oral en la Educación Superior.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Resolución de Problemas Matemáticos II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Historia, Sociedad y Diversidad.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Planificación por Competencias y Evaluación para el aprendizaje I.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Interacciones de calidad y desarrollo en la Primera Infancia II.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">3</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo III</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Arte, Creatividad y Aprendizaje.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Inglés para Principiantes I / Beginner English I A1.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo Personal II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación III.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo personal y social en la primera infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Juego, Desarrollo y Aprendizaje en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Curso Electivo 1.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">4</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo IV</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Ciencia y Epistemologías.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Inglés para Principiantes II / Beginner English II A1.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Deliberación y Participación.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación IV.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Inclusión Educativa para la Atención a la Diversidad.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Planificación por Competencias y Evaluación para el aprendizaje II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Curso Electivo 2.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">5</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo V</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Literatura y Sociedad en contextos diversos.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Inglés para Principiantes III / Beginner English III A2.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación V.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo del Pensamiento.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo de la Psicomotricidad en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo de la Comunicación en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Curso Electivo 3.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">6</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo VI</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Alfabetización Científica.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Inglés para Principiantes IV / Beginner English IV A2.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación VI.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Convivencia y Ciudadanía en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo de la Matemática en la primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Expresión del Arte en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Curso Electivo 4.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">7</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo VII</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Ética y Filosofía para el Pensamiento Crítico.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación VII.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Gestión de la Atención y Cuidado Infantil.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Desarrollo de la Creatividad en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Aprendizaje y enseñanza de la Ciencia en ciclo II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Curso Electivo 5.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">8</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo VIII</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación VIII.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span> Políticas y Gestión para el Servicio Educativo.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span> Planificación por Competencias y Evaluación para el aprendizaje III.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Atención a las Necesidades Educativas Especiales.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Curso Electivo 6.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">9</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo IX</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación IX.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Gestión de los Servicios Educativos en Educación Inicial.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-[#2277db] p-2 rounded-[30px] h-[350px] lg:p-4 2xl:p-8 xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white lg:w-10 lg:h-10"><span class="text-xs font-black text-black lg:text-lg">10</span></div>
                        <span class="text-xs font-black lg:text-lg text-white">Ciclo X</span>
                    </div>
                    <div class="text-white">
                        <ul class="text-xs grid gap-2 xl:text-sm">
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Práctica e Investigación X.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2 xl:text-base'></i><span>Escuela, Familia y Comunidad.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render py-5 lg:py-10">
            <div class="grid gap-3 lg:gap-12">
                <div class="text-center">
                    <span class="text-sm font-black lg:text-lg 2xl:text-xl">Forma Parte de Nuestra Familia</span>
                    <p class="text-xs lg:text-base">Aumenta mas tus posibilidades para ser parte de nuestra familia estudiantil</p>
                </div>
                <div class="grid gap-3 sm:grid-cols-2">
                    <div class="text-center grid gap-2 border rounded-3xl p-8 h-[300px] lg:h-[430px]">
                        <div class="flex justify-center"><div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db] lg:w-12 lg:h-12"><span class="text-white lg:text-xl">I</span></div></div>
                        <span class="text-sm font-black lg:text-base">Ingreso Extraordinario</span>
                        <p class="text-xs lg:text-base">Brindamos academia vacacional de una duración de 2 meses y dos semanas, de lunes a viernes, los horarios son de 7:30 a 1:00, realiza tus inscripciones en secretaria.</p>
                        <div class="text-center">
                            <a class="w-1/2 px-10 py-1 shadow shadow-[#9d9d9d] text-xs rounded-full lg:text-base lg:py-2 lg:px-20 hover:bg-[#3477db] hover:text-white" href="{{route('academia')}}">Conoce Más</a>
                        </div>
                    </div>
                    <div class="text-center grid gap-2 border rounded-3xl p-8 h-[300px] lg:h-[430px]">
                        <div class="flex justify-center"><div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db] lg:w-12 lg:h-12"><span class="text-white lg:text-xl">II</span></div></div>
                        <span class="text-sm font-black lg:text-base">Ingreso Ordinario</span>
                        <p class="text-xs lg:text-base">Inscríbete en secretaria para dar tu examen de admisión.</p>
                        <div class="text-center">
                            <a class="w-1/2 px-10 py-1 bg-[#2277db] text-xs rounded-full text-white lg:text-base lg:py-2 lg:px-20  hover:border-2 border-[#3477db] hover:text-black hover:bg-white" href="{{route('admision')}}">Conoce Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection