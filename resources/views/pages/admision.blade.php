<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.header')
    <div class="w-full h-[36rem] bg-gray-500">
        <div class="mx-60 w-[36rem]">
            <div class="pt-60">
                <h1 class="text-4xl font-black">Admisión 2024</h1>
                <h1 class="text-4xl font-black border-b-4 pb-3 border-blue-500">INSCRIPCIONES ABIERTAS!!!</h1>
            </div>
            <div class="mt-4">
                <span class="text-1xl pr-4 font-semibold">Inicio de Inscripciones:</span><span class="text-1xl">20 de Enero</span><br>
                <span class="text-1xl pr-4 font-semibold">Cierre de Inscripciones:</span><span class="text-1xl">20 de Enero</span><br>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center">
        <div class="w-[65rem] h-[15rem] bg-gray-800 -mt-28">
            <div class="flex justify-center items-center py-14">
                <h1 class="text-3xl font-semibold">Admisión IESPP - HUMACHUCO</h1>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-1/3 border-r border-gray-400 pr-4 text-center py-2"><a href="#" class="text-lg">Carreras Profecionales</a></div>
                <div class="w-1/3 border-r border-gray-400 pr-4 text-center py-2"><a href="#" class="text-lg">Modalidad de Admisión</a></div>
                <div class="w-1/3 border-r border-gray-400 pr-4 text-center py-2"><a href="#" class="text-lg">Requisitos de Matricula</a></div>
                <div class="w-1/3 border-r border-gray-400 pr-4 text-center py-2"><a href="#" class="text-lg">Campus Institucional</a></div>
            </div>        
        </div>
    </div>
    <div class="w-full">
        <div class="px-64 py-14">
            <h1 class="text-3xl font-semibold">Modalidad admisión</h1>
            <p class="text-lg">Te ofrecemos distintas opciones al momento que postulas a una de nuestras carreras profecionales.</p>
        </div>
        <div class="flex justify-center items-center flex-col px-64 gap-12">
            <div class="flex justify-center items-center gap-36">
                <div>
                    <img src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg" alt="">
                </div>
                <div class="text-center">
                    <h1 class="text-3xl">Excelencia Académica</h1>
                    <p class="text-lg py-8">Para poder obtener este beneficio se requiere haber alcanzado en los tres últimos años del nivel secundario el primer o segundo puesto de su aula de estudios.</p>
                    <button class="text-lg bg-blue-500 text-white rounded-xl w-72 py-2">Más Información</button>
                </div>
            </div>
            <div class="flex justify-center items-center gap-36 flex-row-reverse">
                <div>
                    <img src="https://www.worldbank.org/content/dam/photos/780x439/2022/aug/UNs0685096.jpg" alt="">
                </div>
                <div class="text-center">
                    <h1 class="text-3xl">Excelencia Académica</h1>
                    <p class="text-lg py-8">Para poder obtener este beneficio se requiere haber alcanzado en los tres últimos años del nivel secundario el primer o segundo puesto de su aula de estudios.</p>
                    <button class="text-lg bg-blue-500 text-white rounded-xl w-72 py-2">Más Información</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="px-64 py-14 text-center">
            <h1 class="text-3xl font-semibold">Proceso de Admisión</h1>
            <p class="text-lg">Para ingresar al IESPP-Huamachuco debe seguir los siguientes pasos.</p>
        </div>
        <div class="px-64 flex justify-center items-center gap-10 flex-col">
            <div class="flex justify-center items-center gap-10">
                <div class="w-1/2 h-[20rem] bg-zinc-500 p-10 rounded-3xl">
                    <div class="flex items-center gap-10 py-5">
                        <div class="w-16 h-16 bg-slate-400 flex justify-center items-center rounded-full">
                            <h1 class="text-3xl font-bold">1</h1>
                        </div>
                        <p class="text-xl">Postula</p>
                    </div>
                    <div>
                        <p class="text-base">Realiza tu inscripción en la secretaría de nuestra institución</p>
                    </div>
                </div>
                <div class="w-1/2 h-[20rem] bg-zinc-500 p-10 rounded-3xl">
                    <div class="flex items-center gap-10 py-5">
                        <div class="w-16 h-16 bg-slate-400 flex justify-center items-center rounded-full">
                            <h1 class="text-3xl font-bold">2</h1>
                        </div>
                        <p class="text-xl">Realiza el examen</p>
                    </div>
                    <div>
                        <p class="text-base">1.- Evaluación de competencias fundamentales (Ingreso Ordinario).</p>
                        <p class="text-base">2.- Prueba de competencias específicas y test de aptitud personal vocacional (Ingreso Ordinario).</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center gap-10">
                <div class="w-1/2 h-[20rem] bg-zinc-500 p-10 rounded-3xl">
                    <div class="flex items-center gap-10 py-5">
                        <div class="w-16 h-16 bg-slate-400 flex justify-center items-center rounded-full">
                            <h1 class="text-3xl font-bold">3</h1>
                        </div>
                        <p class="text-xl">Revisa tu resultado</p>
                    </div>
                    <div>
                        <p class="text-base">Los resultados son publicados en las redes sociales y también en la institución.</p>
                    </div>
                </div>
                <div class="w-1/2 h-[20rem] bg-zinc-500 p-10 rounded-3xl">
                    <div class="flex items-center gap-10 py-5">
                        <div class="w-16 h-16 bg-slate-400 flex justify-center items-center rounded-full">
                            <h1 class="text-3xl font-bold">4</h1>
                        </div>
                        <p class="text-xl">Proceso de Matrícula</p>
                    </div>
                    <div>
                        <p class="text-base">Si, lograste realizar los pasos anteriores satisfactoriamente, acércate a la oficinas para realizar los tramites de matrícula</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>