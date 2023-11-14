@extends('layout.app')

@section('title', 'Documentos de Transparencia - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/home/home.jpg') }}" text="Documentos de Transparencia" />

    <section class="w-full render py-8">
        <div class=" overflow-x-auto w-full">
            <table class="table-documents w-full mb-4 ">
                <thead>
                    <tr>
                        <th class="bg-[#3477DB] text-white">Descripción</th>
                        <th class="bg-[#3477DB] text-white">Año</th>
                        <th class="bg-[#3477DB] text-white">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="w-9/12">Plan Anual del Trabajo (PAT)</th>
                        <th class="w-6/12">2023</th>
                        <th class="w-6/12">
                            <a class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] text-center
                                focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-bold rounded-lg
                                hover:text-black hover:border-[#3477DB] hover:border
                                 py-2.5  no-underline lg:max-w-full xl:max-w-[300px] px-10
                                   mb-2 hover:shadow-lg transition-all duration-200 ease-in-out
                                    gap-x-2 opacity-90 hover:opacity-100"
                                type="secondary" href="#" target="_blank">Ver</a>
                        </th>
                    </tr>

                    <tr>
                        <th class="w-9/12">Documento de gestion</th>
                        <th class="w-6/12">2023</th>
                        <th class="w-6/12">
                            <a class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] text-center
                                focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-bold rounded-lg
                                hover:text-black hover:border-[#3477DB] hover:border
                                 py-2.5  no-underline lg:max-w-full xl:max-w-[300px] px-10
                                   mb-2 hover:shadow-lg transition-all duration-200 ease-in-out
                                    gap-x-2 opacity-90 hover:opacity-100"
                                type="secondary" href="#" target="_blank">Ver</a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
