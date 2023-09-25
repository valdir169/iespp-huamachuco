@props(['img','inicioLink','inicioText','carrerasLink','carrerasText','especialidadLink','titulo','descripcion','duracion','titulacion','modalidad'])

<div class="bg-cover bg-no-repeat bg-center -mt-[120px]" style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)), url({{ $img }});'>
    <div class="render py-5 text-white">
        <div class="pt-24">
            <a class="text-[#D9D9D9] text-xs lg:sm" href="{{ $inicioLink }}">{{ $inicioText }}</a><span class="px-3">/</span>
            <a class="text-[#D9D9D9] text-xs lg:sm" href="{{ $carrerasLink }}">{{ $carrerasText }}</a><span class="px-3">/</span>
            <a class="text-xs lg:sm lowercase" href="{{ $especialidadLink }}">{{ $titulo }}</a>
        </div>
        <div class="pt-[4rem] sm:pb-16 sm:pt-[8rem] lg:pl-[4rem] lg:pb-26 xl:pl-[6rem] md:w-[500px] lg:w-[700px] 2xl:w-[900px] 2xl:pb-32">
            <div>
                <h1 class="text-sm font-black lg:text-base 2xl:text-3xl">{{ $titulo }}</h1>
                <p class="text-xs py-4 lg:text-sm lg:py-6">{{ $descripcion }}</p>
            </div>
            <div class="grid gap-2">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <small class="text-xs font-black lg:text-sm 2xl:text-base sm:flex items-center">
                        <i class='bx bx-time text-[#2277db] mr-1 lg:text-[1rem] 2xl:text-[2rem]'></i>Duración:
                    </small>
                    <span class="text-xs pl-2 py-1 sm:py-0 sm:pl-6 lg:text-sm lg:pl-8 2xl:text-base">{{ $duracion }}</span>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <small class="text-xs font-black lg:text-sm 2xl:text-base sm:flex items-center">
                        <i class='bx bx-file-blank text-[#2277db] mr-1 lg:text-[1rem] 2xl:text-[2rem]'></i>Titulación:
                    </small>
                    <span class="text-xs pl-2 py-1 sm:py-0 sm:pl-5 lg:text-sm lg:pl-7 2xl:text-base">{{ $titulacion }}</span>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <small class="text-xs font-black lg:text-sm 2xl:text-base sm:flex items-center">
                        <i class='bx bx-user-check text-[#2277db] mr-1 lg:text-[1rem] 2xl:text-[2rem]'></i>Modalidad:
                    </small>
                    <span class="text-xs pl-2 py-1 sm:py-0 sm:pl-4 lg:text-sm lg:pl-6 2xl:text-base">{{ $modalidad }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
