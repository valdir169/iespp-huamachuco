@extends('layout.app')

@section('title', 'Plana Docente - IESPP JFSC ')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Plana Docente" />
    <div class="render py-8">
        <p class="uppercase text-xl font-bold">Plana Docente por Programas de Estudio</p>

        <div class="">
            <h3 class="flex  items-center w-full justify-between bg-[#DDDD] py-2 px-10 cursor-pointer" id="table-open">
                <p>Ingles</p>
                <i class='bx bx-plus' id="icon"></i>
            </h3>

            <div class=" w-full x">
                <table class="my-4 w-full" id="table">
                    <thead >
                        <tr>
                            <th class="bg-sky-900 text-white">Docente</th>
                            <th class="bg-sky-900 text-white">Unidad Didáctica</th>
                            <th class="bg-sky-900 text-white">CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="w-6/12">Marivel Santos Layza Rodriguez</th>
                            <th class="w-6/12">Investigación</th>
                            <th class="w-6/12">
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>

                        <tr>
                            <th>Marivel Santos Layza Rodriguez</th>
                            <th>Investigación</th>
                            <th>
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>


                        <tr>
                            <th>Marivel Santos Layza Rodriguez</th>
                            <th>Investigación</th>
                            <th>
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>

                        <tr>
                            <th>Marivel Santos Layza Rodriguez</th>
                            <th>Investigación</th>
                            <th>
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>
                    </tbody>
                </table>

            </div>


            <h3 class="flex items-center w-full justify-between bg-[#DDDD] py-2 px-10 cursor-pointer" id="table-open">
                <p>Educacion Inicial</p>
                <i class='bx bx-plus'></i>
            </h3>

            <div class=" w-full ">
                <table class="mt-4 w-full" id="table">
                    <thead >
                        <tr>
                            <th class="bg-sky-900 text-white">Docente</th>
                            <th class="bg-sky-900 text-white">Unidad Didáctica</th>
                            <th class="bg-sky-900 text-white">CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="w-6/12">Marivel Santos Layza Rodriguez</th>
                            <th class="w-6/12">Investigación</th>
                            <th class="w-6/12">
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>

                        <tr>
                            <th>Marivel Santos Layza Rodriguez</th>
                            <th>Investigación</th>
                            <th>
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>


                        <tr>
                            <th>Marivel Santos Layza Rodriguez</th>
                            <th>Investigación</th>
                            <th>
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>

                        <tr>
                            <th>Marivel Santos Layza Rodriguez</th>
                            <th>Investigación</th>
                            <th>
                                <x-button type="secondary" ruta="#">Ver</x-button>
                            </th>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
