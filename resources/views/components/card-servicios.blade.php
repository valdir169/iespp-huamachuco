@props(['img', 'altImg', 'nombre', 'title', 'departamento', 'direccion', 'telefono', 'email', 'titleRedes'])

<div>
    <div class="render py-16">
        <div class="w-full py-8 sm:grid grid-cols-2 sm:gap-10 md:grid-cols-3 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]">
            <div class="h-full  sm:flex items-center sm:flex-col sm:gap-4">
                <div class="h-[70%]">
                    <img class="h-full" src={{$img}} alt={{$altImg}}>
                </div>
                <div class="text-center">
                    <span class="font-bold text-[#3477db]">{{$nombre}}</span>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <span class="subtitle">{{$title}}</span>
                <span class="font-bold text-[#3477db] pt-4">{{$departamento}}</span>
                <span class="pt-8"><i class='bx bx-current-location' ></i>{{$direccion}}</span>
                <span><i class='bx bxs-phone-call'></i>{{$telefono}}</span>
                <span><i class='bx bxs-envelope' ></i>{{$email}}</span>
            </div>
            <div class="flex flex-col gap-8">
                <span class="subtitle">{{$titleRedes}}</span>
                <ul class="grid gap-2">
                    <li><a href="https://web.facebook.com/"><i class='bx bxl-facebook-circle' ></i> Facebook</a></li>
                    <li><a href="https://web.facebook.com/"><i class='bx bxl-youtube' ></i> YouTube</a></li>
                    <li><a href="https://web.facebook.com/"><i class='bx bxl-instagram-alt' ></i> Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
