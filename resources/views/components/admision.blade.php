@props(['img','titulo', 'descripcion', 'subtitulo1', 'subtitulo2', 'subtitulo3', 'subtitulo4'])

<div class="bg-cover bg-no-repeat bg-center -mt-[120px]" style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)), url({{ $img }});'>
    <div class="render py-5">
        <div class="grid gap-2 text-white h-[40vh] sm:w-[60%] md:h-[400px] lg:h-[600px] xl:h-[700px]">
            <div class="pt-36 lg:pt-72">
                <h1 class="title-gel">{{ $titulo }}</h1>
                <p class="border-b pb-2 title-gel">{{ $descripcion }}</p>
            </div>
            <div class="pb-24 md:pb-42 pb-8 lg:pb-60">
                <p class="flex items-center gap-3"><span><i class='bx bx-file text-[30px]'></i></span>{{ $subtitulo1 }}<span><span>{{ $subtitulo3 }}</span></p>
                <p class="flex items-center gap-3"><span><i class='bx bx-window-close text-[30px]' ></i></span>{{ $subtitulo2 }}<span>{{ $subtitulo4 }}</span></p>
            </div>
        </div>
    </div>
</div>