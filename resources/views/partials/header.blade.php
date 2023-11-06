<header class="py-2 navbar sticky top-0">
    <div class="render flex justify-between w-full">

        {{-- container for logo --}}
        <div class="logo-container">
            <img src={{ asset('images/others/logo.png') }} alt="Iespp Huamachuco" class="w-full h-full">
        </div>

        {{-- container for nav --}}
        <nav class="w-full nav-menu">
            <ul
                class="nav-ul flex flex-col justify-start items-center lg:flex-row px-8 sm:px-12 py-4 lg:px-0 lg:justify-end">
                <li class="list-item">
                    <a href="/" class="w-full link-button-click">Inicio</a>
                </li>

                <li class=" w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Institución
                        </span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>
                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('presentacion') }}">Presentación</a></li>
                        <li><a class="nav-link" href="{{ route('historia') }}">Historia</a></li>
                        <li><a class="nav-link" href="{{ route('nosotros') }}">Misión, Visión y Valores</a></li>
                        <li><a class="nav-link" href="{{ route('organigrama') }}">Organigrama</a></li>
                        <li><a class="nav-link" href="{{ route('directorio') }}">Directorio Institucional</a></li>
                        <li><a class="nav-link" href="#">Reglamento Institucional</a></li>
                        <li><a class="nav-link" href="{{ route('plana-docente') }}">Plana Docente</a></li>
                    </ul>
                </li>

                <li class="w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Programas</span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>
                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('ingles') }}">Ingles</a></li>
                        <li><a class="nav-link" href="{{ route('inicial') }}">Educación Inicial</a></li>
                        <li><a class="nav-link" href="{{ route('comunicacion') }}">Comunicación</a></li>
                    </ul>
                </li>

                <li class="w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Admisión</span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>
                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('admision') }}">Admisión 2024</a></li>
                        <li><a class="nav-link" href="{{ route('modalidad_admision') }}">Becas y Creditos</a></li>
                    </ul>
                </li>

                <li class="w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Transparencia</span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>
                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('licenciamiento') }}">Licenciamiento</a></li>
                        <li><a class="nav-link" href="{{ route('documentos-gestion') }}">Documentos de Gestión</a></li>
                        <li><a class="nav-link" href="#">Convocatorias Laborales</a></li>
                        <li><a class="nav-link" href="{{ route('calendario-academico') }}">Calendario Académico</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('convenios') }}">Convenios</a></li>
                        <li><a class="nav-link" href="{{ route('inversiones-donaciones') }}">Inversiones y
                                Donaciones</a>
                        </li>
                        <li><a class="nav-link" href="#">Estadísticas</a></li>
                        <li><a class="nav-link" href="#">Denuncias y Reclamos</a></li>
                        <li><a class="nav-link" href="{{ route('documentos-transparencia') }}">Documentos de
                                transparencia</a></li>
                    </ul>
                </li>



                <li class="w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Servicios</span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>
                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('biblioteca') }}">Biblioteca</a></li>
                        <li><a class="nav-link" href="{{ route('brigadistas') }}">Capacitacion de Brigadistas</a></li>
                        <li><a class="nav-link" href="{{ route('topico') }}">Tópico</a></li>
                        <li><a class="nav-link" href="{{ route('talleres') }}">Talleres</a></li>
                        <li><a class="nav-link" href="{{ route('psicopedagogia') }}">Psicopedagogia</a></li>
                    </ul>
                </li>

                <li class="w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Trámites </span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>

                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('contacto') }}">Contáctanos</a></li>
                        <li><a class="nav-link" href="{{ route('matricula') }}">Matrícula</a></li>
                    </ul>
                </li>

                <li class="w-full list-item">
                    <div class="link-button-click">
                        <span class="w-full flex justify-between items-center gap-1">Otros </span>
                        <i class='bx bx-chevron-right text-2xl lg:hidden list-arrow'></i>
                        <i class='bx bx-chevron-down text-xl hidden lg:block list-arrow'></i>
                    </div>

                    <ul class="submenu">
                        <li><a class="nav-link" href="{{ route('galeria') }}">Galería</a></li>
                        <li><a class="nav-link" href="#">Eva</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        {{-- button for menu responsive --}}
        <button class="btn-menu">
            <i class='bx bx-menu text-5xl'></i>
        </button>
    </div>
</header>
