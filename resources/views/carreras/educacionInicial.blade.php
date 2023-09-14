@extends('layout.app')

@section('title', 'Educación Inicial')

@section('content')
    <section>
        <div class="render h-[500px] bg-[#ffffff] py-4 sm:h-[600px] md:mt-[3rem] xl:mt-[0rem] lg:h-[700px] lg:py-8 2xl:h-[800px] lg:py-16">
            <div>
                <a class="text-[#d9d9d9] text-xs lg:sm" href="">Inicio</a><span class="px-3">/</span>
                <a class="text-[#d9d9d9] text-xs lg:sm" href="">Carreras</a><span class="px-3">/</span>
                <a class=" text-xs lg:sm" href="">Educaci&oacute;n Inicial</a>
            </div>
            <div class="pt-[6rem] sm:pt-[12rem] lg:pl-[4rem] xl:pl-[6rem] md:w-[500px] lg:w-[700px] 2xl:w-[900px]">
                <div>
                    <h1 class="text-sm font-black lg:text-base 2xl:text-3xl">EDUCACI&Oacute;N INICIAL</h1>
                    <P class="text-xs py-4 lg:text-sm lg:py-6">Formar profesionales que contribuyan a mejorar los entornos en los que se desarrollan los niños y niñas, promover que los niños establezcan vínculos, que logren autonomía misma, y que desarrollen iniciativa para jugar.</P>
                </div>
                <div class="grid gap-2">
                    <div class="flex flex-col sm:flex-row sm:items-center"><small class="text-xs font-black lg:text-sm 2xl:text-base sm:flex items-center"><i class='bx bx-time text-[#2277db] mr-1 lg:text-[1rem] 2xl:text-[2rem]'></i>Duraci&oacute;n:</small><span class="text-xs pl-2 py-1 sm:py-0 sm:pl-6 lg:text-sm lg:pl-8 2xl:text-base">10 Semestres Acad&eacute;micos (5 años).</span></div>
                    <div class="flex flex-col sm:flex-row sm:items-center"><small class="text-xs font-black lg:text-sm 2xl:text-base sm:flex items-center"><i class='bx bx-file-blank text-[#2277db] mr-1 lg:text-[1rem] 2xl:text-[2rem]'></i>Titulaci&oacute;n:</small><span class="text-xs pl-2 py-1 sm:py-0 sm:pl-5 lg:text-sm lg:pl-7 2xl:text-base">Profesional Pedagógico en Educación Inicial.</span></div>
                    <div class="flex flex-col sm:flex-row sm:items-center"><small class="text-xs font-black lg:text-sm 2xl:text-base sm:flex items-center"><i class='bx bx-user-check text-[#2277db] mr-1 lg:text-[1rem] 2xl:text-[2rem]'></i>Modalidad:</small><span class="text-xs pl-2 py-1 sm:py-0 sm:pl-4 lg:text-sm lg:pl-6 2xl:text-base">Presencial.</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 sm:-mt-20">
        <article class="render">
            <div class="sm:flex justify-center">
                <div class="border p-2 text-center hover:text-white hover:bg-[#2277db] sm:w-[200px] sm:h-[70px] sm:flex flex-col 2xl:sm:w-[300px] 2xl:h-[110px]">
                    <i class='bx bx-line-chart sm:text-[30px] sm:pb-1 2xl:text-[50px]'></i>
                    <a class="text-xs" href="">Lo que lograrás</a>
                </div>
                <div class="border p-2 text-center hover:text-white hover:bg-[#2277db] sm:w-[200px] sm:h-[70px] sm:flex flex-col 2xl:sm:w-[300px] 2xl:h-[110px]">
                    <i class='bx bx-list-plus sm:text-[30px] sm:pb-1 2xl:text-[50px]'></i>
                    <a class="text-xs" href="">Requisítos</a>
                </div>
                <div class="border p-2 text-center hover:text-white hover:bg-[#2277db] sm:w-[200px] sm:h-[70px] sm:flex flex-col 2xl:sm:w-[300px] 2xl:h-[110px]">
                    <i class='bx bx-food-menu sm:text-[30px] sm:pb-1 2xl:text-[50px]'></i>
                    <a class="text-xs" href="">Currícula</a>
                </div>
            </div>
        </article>
    </section>
    <section class="render py-5 grid gap-4">
        <article>
            <div class="flex flex-col text-center">
                <i class='bx bx-down-arrow-alt text-[2rem] text-[#2277bd]'></i>
                <span class="text-sm font-black">Lo que lograrás</span>
            </div>
            <div class="sm:flex">
                <div>
                    <span class="text-xs font-black text-[#2277db]">Al estudiar esta carrera serás capaz de:</span>
                    <div>
                        <img src="{{asset('images/icon/postular.png')}}" alt="">
                    </div>
                </div>
                <div>
                    <span class="text-xs font-black text-[#2277db]">Podrás desempeñarte en:</span>
                    <ul>
                        <li class="flex"><i class='bx bx-check-circle pr-2' ></i><span class="text-xs">Instituciones Educativas de Educación Inicial (Publicas y Privadas).</span></li>
                    </ul>
                </div>
            </div>
        </article>
        <article>
            <div class="grid gap-3">
                <div class="text-center">
                    <span class="text-sm font-black">Requisitos</span>
                    <p class="text-xs">Para poder estudiar esta carrera nesecitas lo siguiente:</p>
                </div>
                <div class="grid gap-3 sm:flex">
                    <div>
                        <span class="text-xs font-black text-[#2277db]">Para postular nesecitas lo siguiente:</span>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Haber culminado la secundaria.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Partida de nacimiento original.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Certificado de estudios secundarios.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Fotocopia DNI.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Dos fotografías tamaño carnet a color.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Recibo de pago por inscripción a la cta. banco de la nación: <span class="font-black">080-100-3141</span> (Preguntar en Secretaria).</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Carpeta de postulante recabada de administración del IESPP José Faustino Sánchez Carrión.</span></li>
                        </ul>
                    </div>
                    <div>
                        <span class="text-xs font-black text-[#2277db]">Para matricularte nesecitas lo siguiente:</span>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Pago por derecho de matricula.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Aprobar como mínimo el 75% de créditos (Esto es solo para lo que ya están cursando su carrera).</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="text-center">
                <a class="text-xs py-1 bg-[#2277db] px-8 text-white rounded-full" href="">Obtiene mas informacion <span class="hidden">sobre admisión</span></a>
            </div>
        </article>
    </section>
    <section class="render py-5 grid gap-3">
        <article>
            <div class="text-center">
                <span class="text-sm font-black">Currícula</span>
                <p class="text-xs">Estos serán las Unidades Didacticas de cada semestre del año escolar.</p>
            </div>
        </article>
    </section>
    <section>
        <article class="render bg-[#324454]">
            <div class="py-4 grid gap-2 sm:grid-cols-2 xl:grid-cols-3">
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">1</span></div>
                        <span class="text-xs font-black">Ciclo I</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Lectura y escritura en la Educación Superior.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Resolución de Problemas Matemáticos.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo Personal.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Fundamentos de la Educación Inicia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Interacciones de calidad y desarrollo en la Primera Infancia I.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">2</span></div>
                        <span class="text-xs font-black">Ciclo II</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Comunicación Oral en la Educación Superior.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Resolución de Problemas Matemáticos II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Historia, Sociedad y Diversidad.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Planificación por Competencias y Evaluación para el aprendizaje I.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Interacciones de calidad y desarrollo en la Primera Infancia II.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">3</span></div>
                        <span class="text-xs font-black">Ciclo III</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Arte, Creatividad y Aprendizaje.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Inglés para Principiantes I / Beginner English I A1.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo Personal II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación III.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo personal y social en la primera infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Juego, Desarrollo y Aprendizaje en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Curso Electivo 1.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">4</span></div>
                        <span class="text-xs font-black">Ciclo IV</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Ciencia y Epistemologías.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Inglés para Principiantes II / Beginner English II A1.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Deliberación y Participación.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación IV.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Inclusión Educativa para la Atención a la Diversidad.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Planificación por Competencias y Evaluación para el aprendizaje II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Curso Electivo 2.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">5</span></div>
                        <span class="text-xs font-black">Ciclo V</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Literatura y Sociedad en contextos diversos.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Inglés para Principiantes III / Beginner English III A2.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación V.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo del Pensamiento.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo de la Psicomotricidad en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo de la Comunicación en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Curso Electivo 3.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">6</span></div>
                        <span class="text-xs font-black">Ciclo VI</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Alfabetización Científica.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Inglés para Principiantes IV / Beginner English IV A2.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación VI.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Convivencia y Ciudadanía en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo de la Matemática en la primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Expresión del Arte en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Curso Electivo 4.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">7</span></div>
                        <span class="text-xs font-black">Ciclo VII</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Ética y Filosofía para el Pensamiento Crítico.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación VII.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Gestión de la Atención y Cuidado Infantil.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Desarrollo de la Creatividad en la Primera Infancia.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Aprendizaje y enseñanza de la Ciencia en ciclo II.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Curso Electivo 5.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">8</span></div>
                        <span class="text-xs font-black">Ciclo VIII</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación VIII.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span> Políticas y Gestión para el Servicio Educativo.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span> Planificación por Competencias y Evaluación para el aprendizaje III.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Atención a las Necesidades Educativas Especiales.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Curso Electivo 6.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">9</span></div>
                        <span class="text-xs font-black">Ciclo IX</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación IX.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Gestión de los Servicios Educativos en Educación Inicial.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2 bg-white p-2 rounded-[30px] h-[350px]">
                    <div class="flex items-center justify-center gap-2">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-xs font-black text-white">10</span></div>
                        <span class="text-xs font-black">Ciclo X</span>
                    </div>
                    <div>
                        <ul class="text-xs grid gap-2">
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Práctica e Investigación X.</span></li>
                            <li class="flex"><i class='bx bx-check-circle pr-2'></i><span>Escuela, Familia y Comunidad.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render py-5">
            <div class="grid gap-3">
                <div class="text-center">
                    <span class="text-sm font-black">Forma Parte de Nuestra Familia</span>
                    <p class="text-xs">Aumenta mas tus posibilidades para ser parte de nuestra familia estudiantil</p>
                </div>
                <div class="grid gap-3 sm:grid-cols-2">
                    <div class="text-center grid gap-2 border rounded-3xl p-8 h-[300px]">
                        <div class="flex justify-center"><div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-white">I</span></div></div>
                        <span class="text-sm font-black">Ingreso Extraordinario</span>
                        <p class="text-xs">Brindamos academia vacacional de una duración de 2 meses y dos semanas, de lunes a viernes, los horarios son de 7:30 a 1:00, realiza tus inscripciones en secretaria.</p>
                        <div class="text-center">
                            <a class="w-1/2 px-3 py-1 shadow shadow-[#9d9d9d] text-xs rounded-full" href="#">Conoce Más</a>
                        </div>
                    </div>
                    <div class="text-center grid gap-2 border rounded-3xl p-8 h-[300px]">
                        <div class="flex justify-center"><div class="w-8 h-8 flex items-center justify-center rounded-full bg-[#2277db]"><span class="text-white">II</span></div></div>
                        <span class="text-sm font-black">Ingreso Ordinario</span>
                        <p class="text-xs">Inscríbete en secretaria para dar tu examen de admisión.</p>
                        <div class="text-center">
                            <a class="w-1/2 px-3 py-1 bg-[#2277db] text-xs rounded-full text-white" href="#">Conoce Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection