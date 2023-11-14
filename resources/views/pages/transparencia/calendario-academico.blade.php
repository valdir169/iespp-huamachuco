@extends('layout.app')

@section('title', 'Calendario Académico - Iespp José Faustino Sánchez Carrión Huamachuco')


@section('content')
    <x-hero image="{{ asset('images/home/home.jpg') }}" text="Calendario Académico" />

    <section class="w-full render py-8">
        <div class="overflow-x-auto w-full">
            <table class="table-documents w-full mb-4 ">
                <thead>
                    <tr>
                        <th class="bg-[#3477DB] text-white">Actividad</th>
                        <th class="bg-[#3477DB] text-white">Fecha</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <th class="w-9/12">Pagos de matrícula </th>
                        <th class="w-6/12">04-04-203</th>
                    </tr>

                    <tr>
                        <th class="w-9/12">Pagos y matrícula de traslados interno</th>
                        <th class="w-6/12">20-04-2023</th>
                    </tr>

                    <tr>
                        <th class="w-9/12">Inicio de clases 2023 - I</th>
                        <th class="w-6/12">01-04-2023</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
