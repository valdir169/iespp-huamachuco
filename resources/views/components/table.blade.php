@props(['slot'])
<div class="text-xs lg:text-sm w-full">
    <div>
        <span class="text-sm font-black lg:text-xl 2xl:text-2xl">Horas y Creditos</span><br>
        <span>Distribución total de las horas y créditos para lograr el nivel de desarrollo esperado de las competencias del Perfil del egresado.</span>
    </div>
    <div class="">
        <div class="">
            <table class="border my-5  lg:my-10">
                <thead>
                    <tr>
                        <th rowspan="3">Componente curricular</th>
                        <th rowspan="3">Cursos / Módulos</th>
                        <th colspan="4">Horas Créditos</th>
                        <th rowspan="2" colspan="2">Totales</th>
                    </tr>
                    <tr>
                        <th colspan="2">Teoría</th>
                        <th colspan="2">Práctica</th>
                    </tr>
                    <tr>
                        <th>HT</th>
                        <th>Créditos</th>
                        <th>HT</th>
                        <th>Créditos</th>
                        <th>HT</th>
                        <th>Créditos</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>
        </div>
    </div>
    <div class="pl-10 grid gap-2">
        <ul>
            <li class="flex items-center gap-2"><i class='bx bxs-edit-alt text-sm lg:text-lg'></i><span>HT= Número de horas de teoría del plan de estudios.</span></li>
            <li class="flex items-center gap-2"><i class='bx bxs-edit-alt text-sm lg:text-lg'></i><span> HP= Número de horas de práctica del plan de estudios.</span></li>
            <li class="flex items-center gap-2"><i class='bx bxs-edit-alt text-sm lg:text-lg'></i><span>H= Número de horas del plan de estudios.</span></li>
        </ul>
        <span class="flex items-center gap-2"><i class='bx bxs-plus-circle text-sm lg:text-lg' ></i> <small class="text-xs lg:text-sm">Las horas consignadas en esta tabla se expresan en horas por semana. Para determinar el número de horas de trabajo académico, se debe multiplicar por el número de semanas del ciclo académico.</small></span>
    </div>
</div>