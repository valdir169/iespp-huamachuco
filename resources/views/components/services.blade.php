@props(['servicio', 'frase', 'autor', 'img', 'altImg', 'parrafo'])

<div class="py-5">
    <div>
        <div class="render py-10">
            <div>
                <div class="grid gap-5 sm:gap-14">
                    <div class="text-center">
                        <h2 class="title">Bienvenido al servicio de <span> {{$servicio}}</span></h1>
                    </div>
                    <div class="border-y-4 border-[#3477db] py-10 text-right">
                        <p>
                            <i class='bx bxs-quote-alt-left text-[30px] text-[#3477db]'></i>
                            <span class="px-2">{{$frase}}</span>
                            <i class='bx bxs-quote-alt-right text-[30px] text-[#3477db]' ></i> 
                            <span>{{$autor}}</span>
                        </p>
                    </div>
                    <div class="grid gap-8 sm:flex items-center md:gap-10">
                        <div>
                            <img src="{{$img}}" alt="{{$altImg}}">
                        </div>
                        <div class="lg:w-3/4">
                            <p>{{$parrafo}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
