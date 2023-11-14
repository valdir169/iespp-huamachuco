@extends('layout.app')

@section('title', 'Admisión - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <section>
        <x-modal
            img="{{ asset('images/admision/bg_admision.jpg') }}"
            inicioLink="{{ route('index') }}"
            inicioText="Inicio"
            link="{{ route('admision') }}"
            linkText="Admisión"
            linkTitle="{{ route('academia') }}"
            Title="Academia Vacacional"
            Content="Tu momento ha llegado, prepárate en nuestra academia y has crecer tus posibilidades de ingresar y poder estudiar tu Programa de Estudios Profesional soñado."
        />
    </section>
    <section>
        <div class="render py-16 flex flex-col gap-16">
            <div>
                <div class="font-black flex justify-center flex-col text-center">
                    <i class='bx bx-book-open text-[60px] text-[#3477db]'></i>
                    <span class="title">Academia Vacacional IESPP-JFSC_Huamachuco</span>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
                <div>
                    <img src="{{ asset('images/admision/Academia.jpg') }}" alt="">
                </div>
                <div class="flex flex-col gap-8 w-4/5">
                    <div class="text-center"><span class="font-[Roboto-thin] text-xl font-semibold">¡Asegura tu futuro hoy, ven y prepárate en nuestra academia vacacional!</span></div>
                    <span>Bienvenido a nuestra academia, donde nos comprometemos a impulsar tu éxito académico. Contamos con docentes altamente capacitados que te guiarán en la preparación para tus exámenes de admisión, ofreciendo exámenes de simulacro todos los viernes para evaluar y mejorar constantemente tu rendimiento. Además, proporcionamos recursos educativos adicionales y un entorno de aprendizaje estimulante para potenciar tu desarrollo integral. Únete a nosotros y prepárate para destacar en tu camino hacia el éxito educativo.</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <article class="render">
            <div class="py-10">
                <div class="grid gap-8 lg:gap-12">
                    <span class="subtitle font-black border-b border-[#ebebeb] py-2 max-w-[300px] text-[#3477db]">Sobre la Academia</span>
                    <ul class="grid gap-4">
                        <li class="flex flex-col text-center sm:flex-row sm:gap-4"><p class="sm:flex items-center sm:gap-3"><i class='bx bx-home-alt-2 text-[28px] text-[#3477db]'></i><span class="font-bold">Lugar:</span></p><p class="sm:flex items-center"><span>Local del IESPP-Huamachuco.</span></p></li>
                        <li class="flex flex-col text-center sm:flex-row sm:gap-4"><p class="sm:flex items-center sm:gap-3"><i class='bx bx-line-chart text-[28px] text-[#3477db]'></i><span class="font-bold">Duraci&oacute;n:</span></p><p class="sm:flex items-center"><span>2 meses y 2 semanas.</span></p></li>
                        <li class="flex flex-col text-center sm:flex-row sm:gap-4"><p class="sm:flex items-center sm:gap-3"><i class='bx bx-time text-[28px] text-[#3477db]'></i><span class="font-bold">Horario:</span></p><p class="sm:flex items-center"><span>De Lunes a Viernes de 7.30am  a 1:00pm. </span></p></li>
                        <li class="flex flex-col text-center sm:flex-row sm:gap-4"><p class="sm:flex items-center sm:gap-3"><i class='bx bx-user text-[28px] text-[#3477db]'></i><span class="font-bold">Modalidad:</span></p><p class="sm:flex items-center"><span>Presencial.</span></p></li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
    <section class="py-20">
        <article class="render">
                <div class="flex flex-col justify-center gap-8">
                    <div><span class="font-[Roboto-thin] text-3xl font-semibold">Cursos a Desarrollar</span></div>
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="p-3 flex flex-col gap-4 bg-[#3477db] text-white rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="font-semibold text-[20px]">Matemática </span>
                                </div>
                                <div><i class='bx bx-category text-[40px]'></i></div>
                            </div>
                            <div>
                                <span>Este curso es para fortalecer tus habilidades analíticas y resolutivas. Desde conceptos fundamentales hasta aplicaciones prácticas. Nuestros docentes expertos te guiarán a través de conceptos clave, promoviendo el pensamiento crítico y la resolución de problemas.</span>
                            </div>
                        </div>

                        <div class="p-3 flex flex-col gap-4 bg-[#3477db] text-white rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="font-semibold text-[20px]">Comunicación</span>
                                </div>
                                <div><i class='bx bxs-message-detail text-[40px]' ></i></div>
                            </div>
                            <div>
                                <span>En nuestro curso de Comunicación, te brindamos las herramientas esenciales para expresarte de manera efectiva y comprender textos complejos. Aprenderás estrategias de lectura crítica, análisis de textos y redacción persuasiva.</span>
                            </div>
                        </div>

                        <div class="p-3 flex flex-col gap-4 bg-[#3477db] text-white rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="font-semibold text-[20px]">Inglés</span>
                                </div>
                                <div><i class='bx bx-sort-a-z text-[40px]'></i></div>
                            </div>
                            <div>
                                <span>Este curso está diseñado para mejorar tus habilidades lingüísticas en lectura, escritura, habla y escucha. Con enfoque en la comunicación efectiva y la comprensión de textos académicos, este curso te proporcionará las habilidades lingüísticas esenciales para el éxito. </span>
                            </div>
                        </div>

                        <div class="p-3 flex flex-col gap-4 bg-[#3477db] text-white rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="font-semibold text-[20px]">Historia del Perú</span>
                                </div>
                                <div><i class='bx bxs-landmark text-[40px]'></i></div>
                            </div>
                            <div>
                                <span>Sumérgete en nuestra rica herencia cultural con el curso de Historia del Perú. Aquí, explorarás eventos clave, personajes históricos y contextos sociopolíticos que son fundamentales para comprender la historia del país.</span>
                            </div>
                        </div>
                    </div>
                </div>
        </article>
    </section>
    <section>
        <article class="render">
            <div class="pb-32 pt-16 flex flex-col gap-8 lg:gap-16">
                <div class="font-black flex justify-center flex-col text-center">
                    <i class='bx bx-user-plus text-[60px] text-[#3477db]'></i>
                    <span class="subtitle">Beneficios</span>
                </div>
                <div class="flex flex-col gap-8 sm:flex-row items-center sm:gap-16 2xl:gap-36">
                    <ul class="flex flex-col gap-3">
                        <li class="flex gap-2">
                            <i class="bx  bx-check-square text-[25px]"></i>
                            <span>Ingreso directo por exámenes simulacro primero y segundo puesto.</span>
                        </li>
                        <li class="flex gap-2">
                            <i class="bx  bx-check-square text-[25px]"></i>
                            <span>Mas del 70% que se preparan en nuestra academia ingresan y son parte de nuestra familia estudiantil.</span>
                        </li>
                    </ul>
                    <div>
                        <img src="{{ asset('images/carreras/CarreraComunicacion.png') }}" alt="">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="border-t border-[#d9d9d9">
            <div class="render mb-8 pt-6">
                <x-sublinks
                :title="'Te Puede Interesar...'"
                :links='[
                    "Conoce Nuestras Programas de Estudio" => route("programas"),
                    "Requisitos de Matrícula" => route("matricula"),
                    "Contactános" => route("contacto"),
                    "Modaliad de Admisión" => route("modalidad_admision")
                ]'
                />
            </div>
        </article>
    </section>
@endsection