<header class="navbar sticky top-0">
    <div class="render flex justify-between w-full ">

        {{-- container for logo --}}
        <div class="logo-container mt-2 lg:mt-0 ">
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
                        <li><a class="nav-link" href="{{ route('ingles') }}">Inglés</a></li>
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
                        <li><a class="nav-link" href="{{ route('academia') }}">Pre JFSC</a></li>
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
                        <li><a class="nav-link" href="{{ route('calendario-academico') }}">Calendario Académico</a></li>
                        <li><a class="nav-link" href="{{ route('convenios') }}">Convenios</a></li>
                        <li><a class="nav-link" href="{{ route('inversiones-donaciones') }}">Inversiones y
                                Donaciones</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('estadisticas') }}">Estadísticas</a></li>
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
                        <li><a class="nav-link" href="{{ route('brigadistas') }}">Capacitación de Brigadistas</a></li>
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
                        <li><a class="nav-link"
                                href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&redirect_uri=https%3A%2F%2Fwww.microsoft365.com%2Flandingv2&response_type=code%20id_token&scope=openid%20profile%20https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&response_mode=form_post&nonce=638350947590415018.MjQ2NmE5YmEtODU3Yy00NDNiLTllZTItYjYzNDNkNjAzYjYwNmY0YjUxY2YtNTgxNC00YThkLTk0OGQtNjgxZDcxYTY4OGNh&ui_locales=es&mkt=es&client-request-id=cac81983-93e2-4386-b824-ec556f625aa0&state=_sLy8lCliVNoTKFmqDPnAWdWSJ2cW6XQbBMd_dL2Uwh8kHy3piS3EIPUTZc0D6euy4plX5pIc9XbebAVSAF7-McjRMAD7ok7gQYlK7Aii4QEFWogC1S2PrMDojq_Fan_yjD1p9BG2Ms6Jp_BM26TOrXK3oG4CQmWNsOstBp9g7LZgHkge_l3JRQLlehOnUZoTp-rn2IZif5UCqIDTW5w2X8j-bRDYoCwdANMuh1ja7KPxsZqki1AV9CbwWt5_f4NoyIVmuH5FgZ_YmWG4ZSOGCH2s_H2We_9Vf3nd1sfpE0&x-client-SKU=ID_NET6_0&x-client-ver=6.30.1.0&sso_reload=true"
                                target="_blank">Eva</a>
                        </li>

                        <li><a class="nav-link" href="https://registra.minedu.gob.pe/" target="_blank">Registra</a>
                        </li>
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
