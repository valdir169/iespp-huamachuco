@props(['image', 'text'])

<div class="relative -mt-[120px] h-[600px] w-full bg-cover bg-no-repeat "
    style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.9)),
        url({{ $image }});'>
    <h1 class="absolute bottom-0 render text-white text-5xl font-bold py-8">{{ $text }}</h1>
</div>
