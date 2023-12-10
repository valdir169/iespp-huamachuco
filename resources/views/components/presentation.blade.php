@props(['img','inicioLink','inicioText','carrerasLink','carrerasText','especialidadLink','titulo','descripcion','duracion','titulacion','modalidad'])

<div class="bg-cover bg-no-repeat bg-center -mt-[120px]" style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)), url({{ $img }});'>
    <div class="render py-5 text-white">
        {{-- <div class="pt-32">
            <a class="text-[#ebebeb] text-xs lg:sm" href="{{ $carrerasLink }}">{{ $carrerasText }}</a><span class="px-3">/</span>
            <a class="text-xl lg:sm lowercase hover:text-red-700 text-cyan-600" href="{{ $especialidadLink }}">{{ $titulo }}</a>
        </div> --}}

        <div class="pt-[4rem] sm:pb-16 sm:pt-[8rem] lg:pl-[4rem] lg:pb-26 xl:pl-[6rem] md:w-[500px] lg:w-[700px] 2xl:w-[900px] 2xl:pb-32">
            <div>
                {{-- <span class="font-[Roboto-thin] text-2xl font-bold">Programa de Estudios</span> --}}
                <h1 class="pt-4 title-gel">{{ $titulo }}</h1>
                <p class="py-6">{{ $descripcion }}</p>
            </div>
            <div class="grid gap-2">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <span class="font-bold flex items-center">
                        <i class='bx bx-time text-[#2277db] mr-1 text-[35px] pr-3'></i>Duración:
                    </span>
                    <span class="pl-2 py-1 sm:py-0 sm:pl-6 lg:pl-8">{{ $duracion }}.</span>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <span class="font-bold flex items-center">
                        <i class='bx bx-file-blank text-[#2277db] mr-1 text-[35px] pr-3'></i>Titulación:
                    </span>
                    <span class="pl-2 py-1 sm:py-0 sm:pl-5 lg:pl-7">{{ $titulacion }}.</span>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <span class="font-bold flex items-center">
                        <i class='bx bx-user-check text-[#2277db] mr-1 text-[35px] pr-3'></i>Modalidad:
                    </span>
                    <span class="pl-2 py-1 sm:py-0 sm:pl-4 lg:pl-6">{{ $modalidad }}.</span>
                </div>
            </div>
        </div>
    </div>
</div>
