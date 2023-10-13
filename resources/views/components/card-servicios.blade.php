@props(['img', 'altImg', 'nombre', 'title', 'departamento', 'direccion', 'telefono', 'email', 'titleRedes'])

<div>
    <div class="render w-full py-8 sm:grid grid-cols-2 sm:gap-10 md:grid-cols-3">
        <div class="h-full sm:flex items-center sm:flex-col sm:gap-4">
            <div class="h-[70%]">
                <img class="h-full" src={{$img}} alt={{$altImg}}>
            </div>
            <div>
                <span>{{$nombre}}</span>
            </div>
        </div>
        <div>
            <span>{{$title}}</span><br>
            <span>{{$departamento}}</span><br>
            <span>{{$direccion}}</span><br>
            <span>{{$telefono}}</span><br>
            <span>{{$email}}</span>
        </div>
        <div>
            <span>{{$titleRedes}}</span>
            <ul>
                <li><a href="https://web.facebook.com/">Facebook</a></li>
                <li><a href="https://web.facebook.com/">YouTube</a></li>
                <li><a href="https://web.facebook.com/">Instagram</a></li>
            </ul>
        </div>
    </div>
</div>
