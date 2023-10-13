@props(['servicio', 'frase', 'img', 'altImg', 'parrafo'])

<div class="py-5">
    <div>
        <div class="render py-10">
            <div>
                <div class="grid gap-5 sm:gap-14">
                    <div class="text-center">
                        <h2 class="title">Bienvenido al servicio de <span> {{$servicio}}</span></h1>
                    </div>
                    <div class="border-y-4 border-[#3477db] py-10 text-right ">
                        <p><i class='bx bxs-quote-alt-left'></i><span>{{$frase}}</span><i class='bx bxs-quote-alt-right' ></i></p>
                    </div>
                    <div class="grid gap-5 sm:flex items-center md:gap-10 lg:gap-24">
                        <div>
                            <img src="{{$img}}" alt="{{$altImg}}">
                        </div>
                        <div>
                            <p>{{$parrafo}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
