@props(['slot'])
<div class="w-full">
    <div>
        <span class="font-black subtitle">Horas y Creditos Acad&eacute;micas</span><br>
        <span>Distribución total de las horas y créditos para lograr el nivel de desarrollo esperado de las competencias del Perfil del egresado.</span>
    </div>
    
    <div class="w-full container">
        <div class="table-container">
            <table class="border my-5  lg:my-16 table-creditos">
                <thead>
                    <tr class="row-col">
                        <th class="cabecera" rowspan="3">Componente curricular</th>
                        <th class="cabecera" rowspan="3">Cursos / Módulos</th>
                        <th class="cabecera" colspan="4">Horas Créditos</th>
                        <th class="cabecera" rowspan="2" colspan="2">Totales</th>
                    </tr>
                    <tr class="row-col">
                        <th class="cabecera" colspan="2">Teoría</th>
                        <th class="cabecera" colspan="2">Práctica</th>
                    </tr>
                    <tr class="row-col">
                        <th class="cabecera">HT</th>
                        <th class="cabecera">Créditos</th>
                        <th class="cabecera">HP</th>
                        <th class="cabecera">Créditos</th>
                        <th class="cabecera">H</th>
                        <th class="cabecera">Créditos</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>
        </div>
    </div>
    <div class="pl-10 grid gap-2 sm:gap-8">
        <ul>
            <li class="flex items-center gap-2"><i class='bx bxs-edit-alt text-[25px]'></i><span>HT= Número de horas de teoría del plan de estudios.</span></li>
            <li class="flex items-center gap-2"><i class='bx bxs-edit-alt text-[25px]'></i><span> HP= Número de horas de práctica del plan de estudios.</span></li>
            <li class="flex items-center gap-2"><i class='bx bxs-edit-alt text-[25px]'></i><span>H= Número de horas del plan de estudios.</span></li>
        </ul>
        <span class="flex items-center gap-2"><i class='bx bxs-plus-circle text-[25px]' ></i> <span>Las horas consignadas en esta tabla se expresan en horas por semana. Para determinar el número de horas de trabajo académico, se debe multiplicar por el número de semanas del ciclo académico.</span></span>
    </div>
</div>