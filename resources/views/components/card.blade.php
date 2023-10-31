@props(['image, altText'])

<div
    class="bg-[#ebebeb] rounded-lg shadow-md border-gray-900  hover:scale-105  hover:bg-[#ffffff] hover:border-gray-500  transition flex flex-col p-4 items-center jusitify-center max-w-[400px] mx-auto">

    <picture class="flex justify-center">
        <img class="mb-5 rounded-lg w-full h-full" src={{ $image }} alt={{ $altText }} />
    </picture>

    <header class="p-4 flex-grow text-center">
        <h2 class="my-2 font-bold tracking-tight text-black  subtitle">
            {{ $title }}
        </h2>
        <p class="mb-4 font-light text-black">
            {{ $content }}
        </p>
    </header>
    {{ $slot }}

</div>
