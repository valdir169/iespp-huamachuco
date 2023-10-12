@props(['type' => 'primary', 'ruta' => ''])

<a href={{ $ruta }}
    @if ($type === 'primary') class="bg-white cursor-pointer hover:bg-[#3477DB] text-center
    focus:outline-none font-bold rounded-lg
     px-12 py-2.5 text-center hover:text-white font-bold
     border border-[#3477DB] mb-2 hover:shadow-lg transition-all duration-200 ease-in-out hover:scale-80   opacity-90 hover:opacity-100"

   @elseif($type === 'secondary')
      class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] text-center
      focus:ring-4 focus:outline-none font-bold rounded-lg
      hover:text-black hover:border-[#3477DB] hover:border
       py-2.5 text-center no-underline  px-12  mb-2 hover:shadow-lg
        transition-all duration-200 ease-in-out opacity-90 hover:opacity-100" @endif>
    {{ $slot }}
</a>
