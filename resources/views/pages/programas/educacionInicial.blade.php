@extends('layout.app')

@section('title', 'Educación Inicial')

@section('content')
    <section>
        <x-presentation>
            <x-slot name="img">{{ asset('images/bg-admision.jpg')}}</x-slot>
            <x-slot name="inicioLink">{{ route('index') }}</x-slot>
            <x-slot name="inicioText">Inicio</x-slot>
            <x-slot name="carrerasLink">{{ route('programas') }}</x-slot>
            <x-slot name="carrerasText">Programas</x-slot>
            <x-slot name="especialidadLink">{{ route('inicial') }}</x-slot>
            <x-slot name="titulo">EDUCACI&Oacute;N INICIAL</x-slot>
            <x-slot name="descripcion">Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollan los niños y niñas, promover que los niños establezcan vínculos, que logren autonomía misma, y que desarrollen iniciativa para jugar.</x-slot>
            <x-slot name="duracion">10 Semestres Académicos (5 años)</x-slot>
            <x-slot name="titulacion">Profesional Pedagógico en Educaci&oacute;n Inicial</x-slot>
            <x-slot name="modalidad">Presencial</x-slot>
        </x-presentation>
    </section>

    <section class="py-5 sm:-mt-16 lg:-mt-20 2xl:-mt-24">
        <article class="render">
            <div class="sm:flex justify-center">
                <div class="bg-[#ebebeb] border  border-white p-2 text-center hover:text-white hover:bg-[#3477db] sm:flex justify-center items-center sm:w-[250px] sm:h-[100px] lg:pt-4 lg:h-[130px] 2xl:sm:w-[350px] 2xl:h-[150px] 2xl:pt-6">
                    <a class="flex items-center justify-center gap-5 sm:flex-col sm:gap-3" href="#logros"><i class='bx bx-line-chart text-[30px] sm:pb-1 2xl:text-[50px]'></i>Lo que lograrás</a>
                </div>
                <div class="bg-[#ebebeb] border  border-white p-2 text-center hover:text-white hover:bg-[#3477db] sm:flex justify-center items-center sm:w-[250px] sm:h-[100px] lg:pt-4 lg:h-[130px] 2xl:sm:w-[350px] 2xl:h-[150px] 2xl:pt-6">
                    <a class="flex items-center justify-center gap-5 sm:flex-col sm:gap-3" href="#requisitos"><i class='bx bx-list-plus text-[30px] sm:pb-1 2xl:text-[50px]'></i>Requisítos</a>
                </div>
                <div class="bg-[#ebebeb] border  border-white p-2 text-center hover:text-white hover:bg-[#3477db] sm:flex justify-center items-center sm:w-[250px] sm:h-[100px] lg:pt-4 lg:h-[130px] 2xl:sm:w-[350px] 2xl:h-[150px] 2xl:pt-6">
                    <a class="flex items-center justify-center gap-5 sm:flex-col sm:gap-3" href="#curricula"><i class='bx bx-food-menu text-[30px] sm:pb-1 2xl:text-[50px]'></i>Currícula</a>
                </div>
            </div>
        </article>
    </section>

    <section class="render py-16 grid gap-8 lg:gap-36">
        <article class="grid gap-8 lg:gap-20" id="logros">
            <div class="flex flex-col text-center gap-5">
                <i class='bx bx-down-arrow-alt text-[#3477db] text-[60px]'></i>
                <span class="title">Lo que <span class="bg-[#3477db] text-white py-3 px-2">lograrás</span></span>
            </div>
            <div class="grid gap-8 sm:flex lg:gap-20">
                <div class="flex flex-col gap-6 lg:gap-8 sm:w-1/2">
                    <span class="text-[#3477db] subtitle">Al estudiar esta carrera serás capaz de:</span>
                    <div class="grid gap-2 lg:gap-6 pt-2 lg:pt-4">
                        <ul>
                            <span class="font-bold text-lg">DOMINIO 1</span>
                            <li class="flex items-center pl-2 pt-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Conoce a los estudiantes, el contexto y la pedagogía.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Planifica la enseñanza.</span></li>
                        </ul>
                        <ul>
                            <span class="font-bold text-lg">DOMINIO 2</span>
                            <li class="flex items-center pl-2 pt-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Crea un clima propicio para el aprendizaje.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Conduce el proceso de enseñanza.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Evalúa permanentemente el aprndizaje.</span></li>
                        </ul>
                        <ul>
                            <span class="font-bold text-lg">DOMINIO 3</span>
                            <li class="flex items-center pl-2 pt-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Establece relaciones con las familias y la comunidad.</span></li>
                        </ul>
                        <ul>
                            <span class="font-bold text-lg">DOMINIO 4</span>
                            <li class="flex items-center pl-2 pt-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Investiga la práctica docente.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Gestiona entornos digitales.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Gestiona su desarrollo personal.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Ejerce éticamente su profesión.</span></li>
                            <li class="flex items-center pl-2"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Reflexiona sobre su práctica.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col gap-6 lg:gap-8 sm:w-1/2">
                    <span class="text-[#3477db] subtitle">Podrás desempeñarte en:</span>
                    <ul class="pt-2 lg:pt-4">
                        <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Instituciones Educativas de Educación Inicial (Publicas y Privadas), como Profesional Pedagógico en Educaci&oacute;n Inicial.</span></li>
                    </ul>
                </div>
            </div>
        </article>
        <article>
            <div class="grid gap-3 lg:gap-8 lg:gap-20" id="requisitos">
                <div class="text-center">
                    <span class="title">Requisitos</span>
                    <p >Para poder estudiar esta carrera nesecitas lo siguiente:</p>
                </div>
                <div class="grid gap-8 sm:flex lg:gap-20">
                    <div class="flex flex-col gap-6 lg:gap-8">
                        <span class="text-[#3477db] subtitle">Para postular nesecitas lo siguiente:</span>
                        <ul class="grid gap-2 lg:pt-4">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Haber culminado la secundaria.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Partida de nacimiento original.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Certificado de estudios secundarios.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Fotocopia DNI.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Dos fotografías tamaño carnet a color.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Recibo de pago por inscripción a la cta. banco de la nación: <span class="font-black">080-100-3141</span> (Preguntar en Secretaria).</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Carpeta de postulante recabada de administración del IESPP José Faustino Sánchez Carrión.</span></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-6 lg:gap-8">
                        <span class="text-[#3477db] subtitle">Para matricularte nesecitas lo siguiente:</span>
                        <ul class="grid gap-2 lg:pt-4">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Pago por derecho de matricula.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span class="lg:text-base">Aprobar como mínimo el 75% de créditos (Esto es solo para lo que ya están cursando su carrera).</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="text-center">
                <x-button type="secondary" ruta="{{ route('admision') }}"><span class="hidden lg:inline">Obtener</span> mas informacion <span class="hidden lg:inline">sobre admisión</span></x-button>
            </div>
        </article>
    </section>

    <section class="py-20 grid gap-8 bg-[#ebebeb] lg:gap-12" id="curricula">
        <article>
            <div class="text-center render">
                <span class="title">Currícula</span>
                <p>Estos serán las Unidades Didacticas de cada semestre del año escolar.</p>
            </div>
        </article>
        <article class="render">
            <div class="py-4 grid gap-2 sm:grid-cols-2 lg:py-10 lg:gap-6">
                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">1</span></div>
                        <span class="subtitle text-white">Ciclo I</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Lectura y Escritura en la Educación Superior.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Resolución de Problemas Matemáticos I.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo Personal I.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación I.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Fundamentos de la Educación Inicial.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>nteracciones de calidad y desarrollo en la Primera Infancia I.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">2</span></div>
                        <span class="subtitle text-white">Ciclo II</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Comunicación Oral en la Educación Superior.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Resolución de Problemas Matemáticos II.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Historia, Sociedad y Diversidad.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación II.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Planificación por Competencias y Evaluación para el aprendizaje I.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Interacciones de calidad y desarrollo en la Primera Infancia II.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">3</span></div>
                        <span class="subtitle text-white">Ciclo III</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Arte, Creatividad y Aprendizaje.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Inglés para Principiantes I / Beginner English I A1.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo Personal II.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación III.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo personal y social en la primera infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Juego, Desarrollo y Aprendizaje en la Primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Curso Electivo 1.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">4</span></div>
                        <span class="subtitle text-white">Ciclo IV</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Ciencia y Epistemologías.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Inglés para Principiantes II / Beginner English II A1.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Deliberación y Participación.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación IV.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Inclusión Educativa para la Atención a la Diversidad.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Planificación por Competencias y Evaluación para el aprendizaje II.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Curso Electivo 2.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">V</span></div>
                        <span class="subtitle text-white">Ciclo V</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Literatura y Sociedad en Contextos Diversos.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Inglés para Principiantes III / Beginner English II A2.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación V.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo del Pensamiento.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo de la Psicomotricidad en la Primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo de la Comunicación en la Primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Curso Electivo 3.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">6</span></div>
                        <span class="subtitle text-white">Ciclo VI</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Alfabetización Científica .</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Inglés para Principiantes IV / Beginner English IV A2.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación VI.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Convivencia y Ciudadanía en la Primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo de la Matemática en la primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Expresión del Arte en la primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Curso Electivo 4.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">7</span></div>
                        <span class="subtitle text-white">Ciclo VII</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Ética y Filosofía para el Pensamiento Crítico.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación VII.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Gestión de la Atención y Cuidado Infantil.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Desarrollo de la Creatividad en la Primera Infancia.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Aprendizaje y enseñanza de la Ciencia en ciclo II.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Curso Electivo 5.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">8</span></div>
                        <span class="subtitle text-white">Ciclo VIII</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación VIII.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Políticas y Gestión para el Servicio Educativo.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Planificación por Competencias y Evaluación para el Aprendizaje III.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Atención a las Necesidades Educativas Especiales.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Curso Electivo 6.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">9</span></div>
                        <span class="subtitle text-white">Ciclo IX</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación IX.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Gestión de los Servicios Educativos en Educación Inicia.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="grid gap-2 bg-[#3477db] p-4 rounded-[30px] h-[350px] xl:h-[400px]">
                    <div class="flex items-center justify-center gap-2 lg:gap-6">
                        <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white"><span class="font-bold text-black text-3xl">10</span></div>
                        <span class="subtitle text-white">Ciclo X</span>
                    </div>
                    <div class="text-white">
                        <ul class="grid gap-2">
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Práctica e Investigación X.</span></li>
                            <li class="flex items-center"><i class='bx bx-check-circle pr-2 text-[25px]'></i><span>Escuela, Familia y Comunidad.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section>
        <article class="render py-20 sm:py-36">
            <div class="grid gap-3 lg:gap-12">
                <div class="text-center grid gap-8">
                    <span class="title">Forma Parte de <span class="bg-[#ebebeb] text-[#3477db] py-3 px-2"> Nuestra Familia</span></span>
                    <p>Aumenta mas tus posibilidades para ser parte de nuestra familia estudiantil</p>
                </div>
                <div class="grid gap-5 sm:grid-cols-2 lg:gap-14">
                    <div class="text-center grid gap-2 border rounded-3xl p-8 h-[350px] lg:h-[430px] cursor-pointer hover:-translate-y-6 hover:shadow-lg shadow-[#ebebeb]">
                        <div class="flex justify-center"><div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-white text-3xl">I</span></div></div>
                        <span class="subtitle">Ingreso Extraordinario</span>
                        <p>Brindamos academia vacacional de una duración de 2 meses y dos semanas, de lunes a viernes, los horarios son de 7:30 a 1:00, realiza tus inscripciones en secretaria.</p>
                        <div class="text-center">
                            <x-button type="secondary" ruta="{{route('academia')}}">Conoce Más</x-button>
                        </div>
                    </div>
                    <div class="text-center grid gap-2 border rounded-3xl p-8 h-[350px] lg:h-[430px] cursor-pointer hover:-translate-y-6 hover:shadow-lg shadow-[#ebebeb]">
                        <div class="flex justify-center"><div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-white text-3xl">II</span></div></div>
                        <span class="subtitle">Ingreso Ordinario</span>
                        <p>Inscríbete en secretaria para dar tu examen de admisión.</p>
                        <div class="text-center">
                            <x-button type="secondary" ruta="{{route('admision')}}">Conoce Más</x-button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    
@endsection
