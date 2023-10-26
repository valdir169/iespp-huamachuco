@props(['img', 'inicioLink', 'inicioText', 'link', 'linkText', 'linkTitle', 'Title', 'Content'])

<div class="bg-cover bg-no-repeat bg-center -mt-[120px]" style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)), url({{ $img }});'>
    <div class="render h-[45vh] py-4 sm:h-[500px] lg:h-[600px] xl:h-[700px]">
        <div class="text-white">
            <div class="pt-28">
                <a class="text-[#ebebeb] text-xs lg:sm" href="{{ $inicioLink }}">{{ $inicioText }}</a><span class="px-3">/</span>
                <a class="text-[#ebebeb] text-xs lg:sm" href="{{ $link }}">{{ $linkText }}</a><span class="px-3">/</span>
                <a class=" text-xs lg:sm" href="{{ $linkTitle }}">{{ $Title }}</a>
            </div>
            <div class="pt-[70px] sm:pt-[150px] md:pl-[3rem] lg:pt-[250px] lg:w-[700px] lg:pl-[6rem] xl:pt-[300px]">
                <span class="title-gel">{{ $Title }}</span>
                <p>{{ $Content }}</p>
            </div>
        </div>
    </div>
</div>
