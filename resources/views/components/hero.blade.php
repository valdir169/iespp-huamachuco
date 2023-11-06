@props(['image', 'text'])

<div class="relative -mt-[120px] h-[600px] w-full bg-cover bg-no-repeat "
    style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.9)),
        url({{ $image }});'>
    <div class="absolute inset-0 render flex flex-col justify-end h-full pb-16">
        <h1 class="text-white text-5xl font-bold">{{ $text }}</h1>

    </div>
</div>
