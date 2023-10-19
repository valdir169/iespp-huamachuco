@props(['img','titulo', 'descripcion', 'subtitulo1', 'subtitulo2', 'subtitulo3', 'subtitulo4'])

<div class="bg-cover bg-no-repeat bg-center -mt-[120px]" style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)), url({{ $img }});'>
    <div class="render py-5">
        <div class="grid gap-2 text-white h-[40vh] sm:w-[60%] md:h-[400px] lg:h-[600px] xl:h-[700px]">
            <div class="text-sm font-black pt-48 lg:pt-72">
                <h1 class="md:text-xl md:text-2xl xl:text-3xl  2xl:text-4xl">{{ $titulo }}</h1>
                <p class="border-b pb-2 md:text-xl md:text-2xl xl:text-3xl  2xl:text-4xl">{{ $descripcion }}</p>
            </div>
            <div class="pb-24 md:pb-42 pb-8 lg:pb-60">
                <p>{{ $subtitulo1 }}<span class="pl-3 text-xs md:text-sm xl:text-base">{{ $subtitulo3 }}</span></p>
                <p>{{ $subtitulo2 }}<span class="pl-3 text-xs md:text-sm xl:text-base">{{ $subtitulo4 }}</span></p>
            </div>
        </div>
    </div>
</div>