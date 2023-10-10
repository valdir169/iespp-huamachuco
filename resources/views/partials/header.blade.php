<header class="render py-2 navbar sticky top-0">
    <div class="logo-container">
        <img src={{ asset('images/logo.png') }} alt="Iespp Huamachuco" class="w-full h-full">
    </div>

    <nav class="w-full absolute nav-menu">
        <ul class="flex flex-col h-full center items-center px-14 md:gap-2 xl:gap-4 shrink-0 ">
            <li class="nav-link">
                <a href="/" class="w-full flex">Inicio</a>
            </li>

            <li class="nav-link ">
                <a class="w-full flex justify-between items-center gap-1 item-active">Institución
                    <i class='bx bx-chevron-down text-xl'></i>
                </a>

                <ul class="submenu">
                    <li><a href="{{ route('presentacion') }}">Presentación</a></li>
                    <li><a href="{{ route('historia') }}">Historia</a></li>
                    <li><a href="{{ route('nosotros') }}">Misión, Visión y Valores</a></li>
                    <li><a href="{{ route('organigrama') }}">Organigrama</a></li>
                    <li><a href="{{ route('directorio') }}">Directorio Institucional</a></li>
                    <li><a href="#">Reglamento Institucional</a></li>
                    <li><a href="{{ route('plana-docente') }}">Plana Docente</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between items-center gap-1">Programas
                    <i class='bx bx-chevron-down'></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ route('ingles') }}">Ingles</a></li>
                    <li><a href="{{ route('inicial') }}">Educación Inicial</a></li>
                    <li><a href="{{ route('comunicacion') }}">Comunicación</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between items-center gap-1">Admisión
                    <i class='bx bx-chevron-down'></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ route('admision') }}">Admisión 2024</a></li>
                    <li><a href="{{ route('modalidad_admision') }}">Becas y Creditos</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between items-center gap-1">Transparencia
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="{{ route('licenciamiento') }}">Licenciamiento</a></li>
                    <li><a href="{{ route('documentos-gestion') }}">Documentos de Gestión</a></li>
                    <li><a href="#">Convocatorias Laborales</a></li>
                    <li><a href="{{ route('calendario-academico') }}">Calendario Académico</a></li>
                    <li><a href="#">Convenios</a></li>
                    <li><a href="{{ route('inversiones-donaciones') }}">Inversiones y Donaciones</a></li>
                    <li><a href="#">Estadísticas</a></li>
                    <li><a href="#">Denuncias y Reclamos</a></li>
                    <li><a href="{{ route('documentos-transparencia') }}">Documentos de transparencia</a></li>
                </ul>
            </li>



            <li class="nav-link">
                <a class="w-full flex justify-between items-center gap-1">Servicios
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
                <a class="w-full flex justify-between items-center gap-1">Trámites
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="#">Trámite documentario</a></li>
                    <li><a href="{{ route('contacto') }}">Contáctnos</a></li>
                </ul>
            </li>

            <li class="nav-link">
                <a class="w-full flex justify-between items-center gap-1">Otros
                    <i class='bx bx-chevron-down'></i>
                </a>

                <ul class="submenu">
                    <li><a href="{{ route('galeria') }}">Galeria</a></li>
                    <li><a href="#">Eva</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <button class="btn-menu" type="button">
        <i class='bx bx-menu'></i>
    </button>
</header>
