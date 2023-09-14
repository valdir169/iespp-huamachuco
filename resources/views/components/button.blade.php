@props(['type' => 'primary', 'ruta' => '#'])

<a href={{ $ruta }}
    @if ($type === 'primary') class="bg-white cursor-pointer hover:bg-[#3477DB] text-center
    focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-bold rounded-lg
     px-5 py-2.5 text-center hover:text-white font-bold
     border border-[#3477DB] lg:max-w-full max-w-full
       mb-2 hover:shadow-lg transition-all duration-200 ease-in-out hover:scale-80
       scale-20 gap-x-2 opacity-90 hover:opacity-100 "

   @elseif($type === 'secondary')
      class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] text-center
      focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-bold rounded-lg
      hover:text-black hover:border-[#3477DB] hover:border
       py-2.5 text-center lg:max-w-full xl:max-w-[300px] px-5
         mb-2 hover:shadow-lg transition-all duration-200 ease-in-out hover:scale-80
         scale-20 gap-x-2 opacity-90 hover:opacity-100" @endif">

    {{ $slot }}
</a>
