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
            <div class="py-10 grid gap-5">
                <div class="text-sm font-black flex justify-center flex-col text-center sm:text-base">
                    <i class='bx bx-book-open text-[#d9d9d9] text-2xl sm:text-3xl lg:text-4xl 2xl:text-5xl'></i>
                    <span class="lg:text-lg 2xl:text-xl">Academia Vacacional IESPP-Huamachuco</span>
                </div>
                <div class="grid gap-3">
                    <span class="text-sm font-black border-b border-[#d9d9d9] py-2 max-w-[300px] text-[#3477db] sm:text-base">Sobre la Academia</span>
                    <ul class="text-xs grid gap-2 lg:text-sm">
                        <li class="flex items-center gap-1 sm:gap-2 lg:gap-3"><i class='bx bx-home-alt-2 text-sm lg:text-base'></i><p>Lugar:<span>Local del IESPP-Huamachuco</span></p></li>
                        <li class="flex items-center gap-1 sm:gap-2 lg:gap-3"><i class='bx bx-line-chart text-sm lg:text-base' ></i><p>Duraci&oacute;n:<span>2 meses y 2 semanas.</span></p></li>
                        <li class="flex items-center gap-1 sm:gap-2 lg:gap-3"><i class='bx bx-time text-sm lg:text-base'></i><p>Horario:<span>De Lunes a Viernes de 7.30  a 1:00 </span></p></li>
                        <li class="flex items-center gap-1 sm:gap-2 lg:gap-3"><i class='bx bx-user text-sm lg:text-base'></i><p>Modalidad:<span>Presencial</span></p></li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render">
            <div class="sm:flex items-center gap-4">
                <div>
                    <img src="https://www.itmplatform.com/wp-content/uploads/altaeducacion.png" alt="">
                </div>
                <div class="text-xs">
                    <span class="text-sm">Aumenta tus posibilidades de ser parte de nuestra familia estudiantil, contamos con docentes capacitados para ayudarte en tu proceso de  preparación y que estés listo para tus exámenes de admisión. Exámenes de simulacro todos los viernes.</span>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render">
            <div class="py-10 grid gap-2 lg:gap-5">
                <div class="text-sm font-black flex justify-center flex-col text-center">
                    <i class='bx bx-user-plus text-[#d9d9d9] text-2xl sm:text-3xl lg:text-4xl 2xl:text-5xl'></i>
                    <span class="lg:text-lg 2xl:text-xl">Beneficios</span>
                </div>
                <div>
                    <ul class="grid gap-1">
                        <li class="flex text-xs gap-2">
                            <i class="bx  bx-check-square text-sm lg:text-base"></i>
                            <span class="lg:text-sm">Ingreso directo por exámenes simulacro primero y segundo puesto.</span>
                        </li>
                        <li class="flex text-xs gap-2">
                            <i class="bx  bx-check-square text-sm lg:text-base"></i>
                            <span class="lg:text-sm">Mas del 80% que se preparan en nuestra academia ingresan y son parte de nuestra familia estudiantil.</span>
                        </li>
                    </ul>
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
                "Conoce Nuestras Carreras" => route("admision"),
                "Requisitos de Matrícula" => route("ingles"),
                "Campus Institucional" => route("carreras"),
                "Modaliad de Admisión" => route("modalidad_admision"),
            ]'
            />
        </article>
    </section>
@endsection