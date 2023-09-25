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
                <div>
                    <span>Academia Vacacional IESPP-Huamachuco</span>
                </div>
                <div>
                    <ul>
                        <li><i class='bx bx-home-alt-2'></i>Lugar:<span>Local del IESPP-Huamachuco</span></li>
                        <li><i class='bx bx-line-chart' ></i>Duraci&oacute;n:<span>2 meses y 2 semanas.</span></li>
                        <li><i class='bx bx-time' ></i>Horario:<span>De Lunes a Viernes de 7.30  a 1:00 </span></li>
                        <li><i class='bx bx-user' ></i>Modalidad:<span>Presencial</span></li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render">
            <div>
                <div>
                    <img src="https://www.itmplatform.com/wp-content/uploads/altaeducacion.png" alt="">
                </div>
                <div>
                    <span>Aumenta tus posibilidades de ser parte de nuestra familia estudiantil, contamos con docentes capacitados para ayudarte en tu proceso de  preparación y que estés listo para tus exámenes de admisión. Exámenes de simulacro todos los viernes.</span>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="render">
            <div class="py-10 grid gap-5">
                <div>
                    <span>Beneficios</span>
                </div>
                <div>
                    <ul>
                        <li>
                            <span>Ingreso directo por exámenes simulacro primero y segundo puesto.</span>
                        </li>
                        <li>
                            <span>Mas del 80% que se preparan en nuestra academia ingresan y son parte de nuestra familia estudiantil.</span>
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