@props(['image', 'text'])

<div class="relative h-[400px] w-full bg-cover bg-no-repeat bg-center"
    style='background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)),
        url({{ $image }});'>
    <span class="absolute bottom-0 render text-white text-4xl uppercase py-8">{{ $text }}</span>
</div>
