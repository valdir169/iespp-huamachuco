<footer class="bg-[#3477DB] text-white divide-y-2 ">
    <section class="flex flex-col md:flex-row items-center md:items-start px-4 py-16 gap-12 md:gap-6 justify-center  max-w-[1024px] mx-auto">
        <div class="w-full md:max-w-[25%]">
            <div class="w-[150px] mx-auto md:mx-0">
                <img class="w-full h-full" src="{{ asset('images/logo.png') }}" alt="">
            </div>
        </div>

        <div class="w-full flex flex-col  items-center md:items-start md:max-w-[25%]">
            <span class="text-2xl font-bold font-[Roboto-Thin]">Enlaces rápidos</span>

            <div class="flex flex-col mt-4 w-full md:items-start items-center">
                <a href=""
                    class="hover:underline transition py-1 opacity-75 hover:opacity-100">Institución</a>
                <a href={{ route('admision') }} class="hover:underline transition py-1 opacity-75 hover:opacity-100">Admisión</a>
                <a href="" class="hover:underline transition py-1 opacity-75 hover:opacity-100">Servicios</a>
                <a href="" class="hover:underline transition py-1 opacity-75 hover:opacity-100">Programas de estudio</a>
                <a href="" class="hover:underline transition py-1 opacity-75 hover:opacity-100">Contacto</a>
            </div>
        </div>

        <div class="w-full flex flex-col items-center md:items-start md:max-w-[25%]">
            <span class="text-2xl font-bold font-[Roboto-Thin]">Síguenos</span>
            <div class="flex flex-col mt-4 w-full items-center md:items-start ">
                <a class="flex items-center gap-2 hover:underline transition  py-1 opacity-75 hover:opacity-100"
                    href="https://web.facebook.com/IESPPJFSC" target="_blank">
                    <i class='bx bxl-facebook-circle text-2xl'></i>
                    Facebook
                </a>
                <a class="flex items-center gap-2 hover:underline transition py-1 opacity-75 hover:opacity-100">
                    <i class='bx bxl-youtube text-2xl'></i>
                    Youtube
                </a>
                <a class="flex items-center gap-2 hover:underline transition py-1 opacity-75 hover:opacity-100">
                    <i class='bx bxl-instagram-alt text-2xl'></i>
                    Instagram
                </a>
            </div>
        </div>


        <div class="w-full flex flex-col  items-center md:items-start md:max-w-[25%] md:overflow-hidden xl:overflow-visible">
            <span class="text-2xl font-bold font-[Roboto-Thin]">Contacto</span>

            <div class="flex flex-col mt-4 w-full md:items-start items-center">
                <a class="py-1 opacity-75 hover:opacity-100 hover:text-white">Prolog. Sánchez Carrión 1400 –
                    Huamachuco</a>
                <a class="flex items-center gap-2 transition py-1 opacity-75 hover:opacity-100">

                    <i class='bx bxs-phone text-2xl'></i>
                    044-441449
                </a>

                <a class="flex items-center gap-2 transition py-1 opacity-75 hover:opacity-100">
                    <i class='bx bx-envelope text-2xl'></i>
                    correo.soporte.web@isppjfschco.edu.pe
                </a>
            </div>
        </div>

    </section>

    <div class="grid place-items-center py-4 px-4 text-center">
        <p class=""> Copyright &copy; - Desarrollado por IESPP JFSC - Huamachuco
        </p>
    </div>
</footer>
