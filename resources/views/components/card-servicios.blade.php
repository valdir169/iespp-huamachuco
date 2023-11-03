@props(['img', 'altImg', 'nombre', 'title', 'departamento', 'direccion', 'telefono', 'email', 'titleRedes'])

<div>
    <div class="render py-16">
        <div class="w-full py-8 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]">
           <div class="p-3 grid gap-4 sm25pxd-cols-2 sm:gap-10 md:grid-cols-3">
                <div class="flex items-center flex-col gap-8">
                    <div class="h-[80%]">
                        <img class="h-full" src={{$img}} alt={{$altImg}}>
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-[#3477db]">{{$nombre}}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="text-center">
                        <span class="subtitle">{{$title}}</span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="font-bold text-[#3477db] pt-4">{{$departamento}}</span>
                        <span class="pt-8 flex items-center gap-2"><i class='bx bx-current-location text-[25px]' ></i>{{$direccion}}</span>
                        <span class=" flex items-center gap-2"><i class='bx bxs-phone-call text-[25px]'></i>{{$telefono}}</span>
                        <span class=" flex items-center gap-2"><i class='bx bxs-envelope text-[25px]' ></i>{{$email}}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-8">
                    <span class="subtitle">{{$titleRedes}}</span>
                    <ul class="flex justify-center gap-2 lg:flex-col ">
                        <li><a href="https://web.facebook.com/" class="flex items-center gap-2"><i class='bx bxl-facebook-circle text-[25px]'></i> <span class="hidden lg:block">Facebook</span></a></li>
                        <li><a href="https://web.facebook.com/" class="flex items-center gap-2"><i class='bx bxl-youtube text-[25px]'></i> <span class="hidden lg:block">YouTube</span></a></li>
                        <li><a href="https://web.facebook.com/" class="flex items-center gap-2"><i class='bx bxl-instagram-alt text-[25px]'></i> <span class="hidden lg:block">Instagram</span></a></li>
                    </ul>
                </div>
           </div>
        </div>
    </div>
</div>
