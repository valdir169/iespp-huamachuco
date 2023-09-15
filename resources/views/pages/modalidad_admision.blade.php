@extends('layout.app')

@section('title','Modalidad de Admisión')
@section('content')
    <section>
        <div class="render h-[300px] py-4 sm:h-[400px] lg:h-[500px] xl:h-[700px]">
            <div class="">
                <div>
                    <a class="text-[#D9D9D9] text-xs lg:sm" href="">Inicio</a><span class="px-3">/</span>
                    <a class="text-[#D9D9D9] text-xs lg:sm" href="{{route('admision')}}">admisi&oacute;n</a><span class="px-3">/</span>
                    <a class=" text-xs lg:sm" href="">Modalidad de Admisi&oacute;n</a>
                </div>
                <div class="text-xs pt-[100px] sm:pt-[200px] md:pl-[3rem] lg:pt-[300px] lg:w-[700px] lg:pl-[6rem] xl:pt-[400px]">
                    <span class="text-sm font-black md:text-base lg:text-xl 2xl:text-4xl">Modalidad de Admisión</span>
                    <p class="lg:text-sm">Nosotros ofrecemos diferentes tipos de modalidades para  los que van ha postular y formar parte de nuestra familia estudiantil.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="preparate-tabs">
        <section class="tabs preparation render">
            <!-- Nav tabs -->
            <div class="tabs-container">
                <div class="container flex items-center justify-center">
                    <div class="row">
                        <ul role="tablist" class="nav nav-tabs grid grid-cols-2 min-[420px]:grid-cols-3">
                            <li role="presentation" class="active h-[120px] p-1 border flex items-center justify-center">
                                <a class="text-center" href="#tab2" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">
                                    <p class="flex flex-col"><i class='bx bx-child text-[2rem]'></i><span class="text-xs">Educaci&oacute;n Inicial</span></p>
                                </a>
                            </li>
                            <li role="presentation" class="active h-[120px] p-1 border flex items-center justify-center">
                                <a class="text-center" href="#tab2" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">
                                    <p class="flex flex-col"><i class='bx bx-hive text-[2rem]'></i><span class="text-xs">Idiomas, Especialidad: Ingles</span></p>
                                </a>
                            </li>
                            <li role="presentation" class="active h-[120px] p-1 border flex items-center justify-center">
                                <a class="text-center" href="#tab2" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">
                                    <p class="flex flex-col"><i class='bx bx-user-voice text-[2rem]'></i><span class="text-xs">Educación Secundaria, Especialidad: Comunicación</span></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <!-- Tab panes -->
            <div class="tabs-info">
                <div class="container">
                    <div class="tab-content">
                        <div id="tab1" role="tabpanel" class="tab-pane rich-text active">
                            <span>H1</span>
                        </div>
                        <div id="tab1" role="tabpanel" class="tab-pane rich-text active">
                            <span>H2</span>
                        </div>
                        <div id="tab1" role="tabpanel" class="tab-pane rich-text active">
                            <span>H3</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection