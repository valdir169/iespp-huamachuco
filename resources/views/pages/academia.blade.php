@extends('layout.app')

@section('title', 'Admisión IESPP-Humachuco')

@section('content')
    <section>
        <x-modal
            img="{{ asset('images/bg-admision.jpg') }}"
            inicioLink="{{ route('index') }}"
            inicioText="Inicio"
            link="{{ route('admision') }}"
            linkText="Admisión"
            linkTitle="{{ route('academia') }}"
            Title="Academia Vacacional"
            Content="Tu momento ha llegado, prepárate en nuestra academia y  has crecer tus posibilidades de ingresar y poder estudiar tu Carrera Profecional soñada."
        />
    </section>
    <section>
        <article class="render">
            <div class="py-10 grid gap-5 lg:gap-16">
                <div class="font-black flex justify-center flex-col text-center">
                    <i class='bx bx-book-open text-[60px] text-[#3477db]'></i>
                    <span class="title">Academia Vacacional IESPP-JFSC_Huamachuco</span>
                </div>
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
            <div class="lg:flex lg:gap-16">
                <div class="flex flex-col items-center gap-8 lg:gap-16 lg:w-1/2">
                    <div>
                        <img src="https://www.itmplatform.com/wp-content/uploads/altaeducacion.png" alt="">
                    </div>
                    <div>
                        <span>Aumenta tus posibilidades de ser parte de nuestra familia estudiantil, contamos con docentes capacitados para ayudarte en tu proceso de  preparación y que estés listo para tus exámenes de admisión. Exámenes de simulacro todos los viernes.</span>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-8">
                    <div><span class="font-[Roboto-thin] text-xl font-semibold">Desarrolla Habilidades en:</span></div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="p-2 grid gap-2 bg-[#3477db] text-white rounded-lg">
                            <div>
                                <div><span>Asistencia</span></div>
                            </div>
                            <div><p class="font-[Roboto-thin]">Brindar Asistencia Inmediata en Situaciones de Emergencia.</p></div>
                        </div>
                        
                        <div class="p-2 grid gap-2 bg-[#3477db] text-white rounded-lg">
                            <div>
                                <div><span>Prevención</span></div>
                            </div>
                            <div><p class="font-[Roboto-thin]">Impulsar Iniciativas de Prevención Ambiental y de Riesgos.</p></div>
                        </div>
    
                        <div class="p-2 grid gap-2 bg-[#3477db] text-white rounded-lg">
                            <div>
                                <div><span>Seguridad</span></div>
                            </div>
                            <div><p class="font-[Roboto-thin]">Garantizar la Seguridad a través de Brigadas Especializadas.</p></div>
                        </div>
    
                        <div class="p-2 grid gap-2 bg-[#3477db] text-white rounded-lg">
                            <div>
                                <div><span>Bienestar</span></div>
                            </div>
                            <div><p class="font-[Roboto-thin]">Cultivar un Entorno Educativo que Promueva el Bienestar Integral.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render">
            <div class="py-10 grid gap-16 lg:gap-36">
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
                "Conoce Nuestras Programas de Estudio" => route("admision"),
                "Requisitos de Matrícula" => route("ingles"),
                "Campus Institucional" => route("programas"),
                "Modaliad de Admisión" => route("modalidad_admision"),
            ]'
            />
        </article>
    </section>
@endsection