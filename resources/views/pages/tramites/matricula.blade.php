@extends('layout.app')

@section('title', 'Matrícula - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Matrícula" />
    <section class="render py-16">
        <h2 class="title">Requísitos de Matrícula</h2>

        <div class="flex flex-col  divide-y-2">
            <div class="flex gap-4 py-6">
                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>

                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Ingresantes</p>
                    <span>Todos los ingresantes al I Semestre a las diferentes especialidades ofrecidas en el proceso de admisión.</span>
                        <ul class="mt-4 list-disc">
                            <li>Constancia de ingreso</li>
                            <li>Partida de nacimiento (original)</li>
                            <li>Copia de DNI</li>
                            <li>Certificado de estudios de educación secundaria bisado por la UGEL</li>
                            <li>Recibo por derecho de matrícula</li>
                        </ul>
                </div>
            </div>


            <div class="flex gap-4 py-6">

                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>
                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Reactualización del ii al viii semestre</p>
                    <span>Boleta de notas del semestre anterior.</span>
                    <span>Haber aprobado el 75% de los créditos del Semestre Académico inmediato anterior.</span>
                </div>
            </div>


            <div class="flex gap-4 py-6">
                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>

                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Matrícula</p>
                    <span>Llevar todos los documentos y el recibo canjeado al area de Secretaria Acádemica, para realizar la
                        matrícula.</span>
                </div>
            </div>
        </div>
    </section>

@endsection
