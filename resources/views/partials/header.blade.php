<header class="navbar sticky top-0">
    <div class=" h-full">
        <img src={{ asset('images/logo.png') }} alt="Iespp Huamachuco" class="w-full h-full logo">
    </div>

    <nav class="w-full absolute nav-menu">
        <ul class="flex flex-col h-full center items-center px-14 md:gap-2 xl:gap-4 ">
            <li class="nav-link">
                <a href="/">INICIO</a>
            </li>

            <li class="prueba nav-link ">
                <a class="w-full flex justify-between">INSTITUCIÓN
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="https://isthuamachuco.edu.pe/programas-estudio/computacion-e-informatica/">Presentación</a></li>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Organigrama</a></li>
                    <li><a href="#">Directorio</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between">ADMISIÓN
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="{{ route('admision') }}">Admisión 2024</a></li>
                    <li><a href="">Becas y Creditos</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between">CARRERAS
                    <i class='bx bx-chevron-down'></i>
                </a>
                <ul class="submenu">
                    <li><a href="#">Ingles</a></li>
                    <li><a href="#">Educación Inicial</a></li>
                    <li><a href="#">Comunicación</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between">SERVICIOS
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="#">Laboratorio</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li><a href="#">Tópico</a></li>
                    <li><a href="#">Psicopedagogia</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between">TRÁMITES
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="#">Trámite documentario</a></li>
                    <li><a href="#">Contáctnos</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between">OTROS
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Eva</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <button class="btn-menu" type="button" >
        <i class='bx bx-menu' ></i>
    </button>
</header>
