@props(['imageSrc, altText'])

<div class="bg-[#D9D9D9] max-w-[400px] rounded-md mx-auto md:max-w-full">
    <div class="h-[300px]">
        <img class="w-full h-full object-cover" src="{{ $imageSrc }}" alt="{{ $altText }}">
    </div>
    <div class="flex flex-col justify-center p-4 gap-3">
        <h2 class="text-center font-bold text-xl border-b-2 border-indigo-500">{{ $title }}</h2>
        <p>{{ $slot }}</p>

        {{ $button }}

    </div>
</div>
