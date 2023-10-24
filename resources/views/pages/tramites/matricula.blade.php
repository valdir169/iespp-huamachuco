@extends('layout.app')

@section('title', 'Matrícula - Iespp Jfsc Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Matrícula" />
    <section class="render py-16">
        <h2 class="title">Requísitos de Matrícula</h2>

        <div class="flex flex-col  divide-y-2">
            <div class="flex gap-4 py-6">
                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>

                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Pago por derecho de matrícula</p>
                    <span>Pago por Derecho de Matricula en el Banco de la Nación y luego presentarlo a secretaría. (Mono: S/
                        200.00) de</span>
                </div>
            </div>


            <div class="flex gap-4 py-6">

                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>
                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Pago por derecho de mátricula</p>
                    <span>Pago de Derecho de matricula en el Banco de la Nación y luego presentarlo a secretaría. (Mono: S/
                        200.00) de</span>
                </div>
            </div>


            <div class="flex gap-4 py-6">
                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>

                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Matrícula</p>
                    <span>Llevar todos los documentos y el recibo canjeado al area de Secretaria Acádemica, para realizar la matrícula.</span>
                </div>
            </div>
        </div>
    </section>

@endsection
