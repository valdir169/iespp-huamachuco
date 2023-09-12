@props(['image, altText'])

<div
    class="bg-[#D9D9D9] rounded-lg  shadow-md border-gray-700 hover:scale-105 hover:bg-[#ffffff] hover:border-gray-500  transition flex flex-col p-4">

    <picture class="flex justify-center">
        <img class="mb-5 rounded-lg w-full h-full" src={{ $image }} alt={{ $altText }} />
    </picture>

    <header class="p-4 flex-grow">
        <h2 class="my-2 text-2xl font-bold tracking-tight text-black  ">
            {{ $title }}
        </h2>
        <p class="mb-4 font-light text-black">
            {{ $content }}
        </p>
    </header>

    {{ $slot }}

</div>
