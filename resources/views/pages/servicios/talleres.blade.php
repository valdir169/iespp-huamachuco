@extends('layout.app')

@section('title', 'Talles Académicos - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
<x-hero image="{{ asset('images/servicios/bg_talleres.jpg') }}" text="Talleres Académicos" />
<section>
    <article>
        <div class="render py-16 lg:py-36">
            <div class="pb-16 text-center sm:pb-20 lg:pb-36">
                <span class="title">Bienvenido al servicio de Talleres Académicos </span>
            </div>
            <div class="flex flex-col gap-8 sm:flex-row items-center">
                <div><img src="{{asset('images/servicios/User_talleres.jpg')}}" alt="Talleres"></div>
                <div class="flex flex-col gap-4 lg:w-3/4">
                    <div class="text-center"><span class="font-[Roboto-thin] text-2xl font-bold">Talleres Académicos</span></div>
                    <div class="grid gap-3">
                        <p>Nuestra institución ofrece talleres académicos especializados y diseñados cuidadosamente para potenciar no solo su rendimiento, sino también su éxito educativo de cada estudiante que tiene dificultades tanto en el proceso académico o proceso de titulación.</p>
                        <p>Invitamos a cada estudiante a participar activamente en estos talleres, donde no solo encontrarán apoyo académico, sino también un ambiente enriquecedor que promueve el crecimiento personal y el logro de metas educativas.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="bg-[#ebebeb] ">
            <div class="render py-16 lg:py-36">
                <div class="grid gap-8 sm:gap-12 lg:gap-16">
                    <div class="text-center"><span class="subtitle flex flex-col">Talleres para estudiantes del IESPP-JFSC</span> <span class="text-[#3477db] font-[Roboto-thin] text-lg font-semibold">(Autofinanciados)</span></div>
                    <div class="flex flex-col gap-8 sm:flex-row justify-center">
                        <div class="border border-[#3477db] p-3 rounded-lg grid gap-6 card-animation">
                            <div class="flex flex-col gap-2 text-center"><i class='bx bxs-objects-vertical-bottom text-[60px] text-[#3477db]' ></i><span class="font-semibold">Talleres de Nivelación Académica</span></div>
                            <div class="grid gap-3 lg:grid-cols-2 lg:gap-12 lg:max-w-[550px]">
                                <p>Estos talleres se centran en reforzar conceptos clave que los estudiantes pueden haber pasado por alto o no haber comprendido completamente durante su educación regular.</p>
                                <p>El objetivo principal es elevar el nivel académico del estudiante y proporcionar una base sólida en las materias relevantes.</p>
                            </div>
                            <div class="text-center flex flex-col items-center gap-3 border-t border-t-[#3477db] pt-5">
                                <span class="font-semibold flex items-center gap-4"><i class='bx bxs-calendar text-[25px]'></i>Duraci&oacute;n</span>
                                <span>2 Meses</span>
                            </div>
                        </div>
                        <div class="border border-[#3477db] p-3 rounded-lg grid gap-6 card-animation">
                            <div class="flex flex-col gap-2 text-center"><i class='bx bxs-graduation text-[60px] text-[#3477db]' ></i><span class="font-semibold">Talleres de Preparación para Exámenes de Titulación</span></div>
                            <div class="grid gap-3 lg:grid-cols-2 lg:gap-12 lg:max-w-[550px]">
                                <p>Estos están diseñados para ayudar a los estudiantes a prepararse de manera efectiva para los exámenes finales que son requeridos para obtener un título académico.</p>
                                <p>El objetivo es asegurar que los estudiantes estén bien preparados para enfrentar sus exámenes de titulación, lo que es crucial para obtener el título correspondiente.</p>
                            </div>
                            <div class="text-center flex flex-col items-center gap-3 border-t border-t-[#3477db] pt-5">
                                <span class="font-semibold flex items-center gap-4"><i class='bx bxs-calendar text-[25px]'></i>Duraci&oacute;n</span>
                                <span>1 Mes y dos Semanas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="render">
            <div class="py-16 lg:py-36">
                <div class="grid gap-8 sm:gap-16 lg:gap-20">
                    <div class="text-center flex flex-col">
                        <span class="subtitle">Talleres vacacionales para la comunidad Huamachuquina</span>
                        <span class="text-[#3477db] font-[Roboto-thin] text-lg font-semibold">(Esta dirigido a todos los niños, jóvenes y adultos)</span>
                    </div>
                    <div class="flex items-center gap-8 cont_talleres lg:justify-center py-8 lg:grid grid-cols-3 xl:px-24">
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bx-walk text-[70px] text-white' ></i><span>Danza</span></div>
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bxs-palette text-[70px] text-white'></i><span>Dibujo y Pintura </span></div>
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bxs-user-voice text-[70px] text-white' ></i><span>Canto</span></div>
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bxs-confused text-[70px] text-white' ></i><span>Teatro</span></div>
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bx-female text-[70px] text-white' ></i><span>Marinera</span></div>
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bx-run text-[70px] text-white' ></i><span>Ballet</span></div>
                        <div class="flex flex-col justify-center text-center min-w-[300px] w-[300px] h-[250px] bg-[#3477db] gap-4 text-white card-animation"><i class='bx bx-world text-[70px] text-white' ></i><span>Inglés</span></div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <span class="subtitle">Para moyeres informes</span>
                        <p class="flex items-center gap-4"><i class='bx bxs-group text-[30px] text-[#3477db]' ></i><span>Organizado por el CODE (Consejo de Defensa del Estudiante).</span></p>
                        <p class="flex items-center gap-4"><i class='bx bxs-home text-[30px] text-[#3477db]' ></i><span>IESPP - José Faustino Sánchez Carrión</span></p>
                        <p class="flex items-center gap-4"><i class='bx bxs-location-plus text-[30px] text-[#3477db]' ></i><span>Prol. Sánchez Carrión Nº 1400 </span></p>
                        <p class="flex items-center gap-4"><i class='bx bxs-time text-[30px] text-[#3477db]' ></i><span>De Lunes a sábado: 8:00 a 12:00 pm  -  2:30 a 6:00 pm</span></p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection