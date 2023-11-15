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
                    <p class="mb-4 uppercase font-bold">Reactualización del II Al VII ciclo</p>
                    <span>Todos los programas de estudio.</span>
                    <ul class="mt-4 list-disc">
                        <li>Haber aprobado el 75% de los créditos del ciclo inmediato anterior. </li>
                        <li>Comprobante de pago por derecho de Matrícula de S/. 173.00 a la cuenta del Banco de la Nación
                            (0801003141). </li>
                    </ul>
                </div>
            </div>


            <div class="flex gap-4 py-6">
                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>

                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Reactualización del VII Al X ciclo</p>
                    <span>Todos los programas de estudio.</span>
                    <ul class="mt-4 list-disc">
                        <li>Haber aprobado el 100% de los créditos del ciclo inmediato anterior. </li>
                        <li>Comprobante de pago por derecho de Matrícula de S/. 173.00 a la cuenta del Banco de la Nación
                            (0801003141). </li>
                    </ul>
                </div>
            </div>



            <div class="flex gap-4 py-6">
                <i class='bx bx-chevron-right-circle text-4xl text-[#3477db]'></i>

                <div class="mt-2">
                    <p class="mb-4 uppercase font-bold">Nota</p>
                    <span>La matrícula extemporánea se realiza con un pago del 50% del costo original.</span>
                </div>
            </div>
        </div>
    </section>

@endsection
