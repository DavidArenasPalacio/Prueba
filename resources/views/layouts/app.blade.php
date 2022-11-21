<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Scripts -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    {{--     <script src="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"></script> --}}

    @vite(['public/template/vendor/fontawesome-free/css/all.min.css', 'resources/css/app.css', 'resources/js/app.js', 'public/css/styles.css', 'public/template/css/sb-admin-2.min.css', 'public/template/js/sb-admin-2.min.js', 'public/template/vendor/bootstrap/js/bootstrap.bundle.min.js'])
    @livewireStyles
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center  md:my-10"
                href="{{ route('dashboard') }}">
                <x-application-logo class="w-32" />
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <x-li-menu :active="request()->routeIs('dashboard')">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </x-li-menu>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <x-li-menu :active="request()->routeIs('usuarios.index')">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Empleados</span>
                </a>
                <div id="collapseTwo" class="collapse  @if (request()->routeIs('usuarios.index')) show @endif"
                    aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestionar empleados:</h6>
                        <x-nav-menu :active="request()->routeIs('usuarios.index')" :href="route('usuarios.index')">Empleados</x-nav-menu>
                        <x-nav-menu>Permisos</x-nav-menu>
                    </div>
                </div>
            </x-li-menu>
            <!-- Heading -->
            <div class="sidebar-heading">
                Lista de inspección
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <x-li-menu :active="request()->routeIs('listaChequeoVCT.index') ||
                request()->routeIs('listaChequeoVCT.create') ||
                (request()->routeIs('listaChequeoTrenIguana.index') ||
                    request()->routeIs('listaChequeoTrenIguana.create')) ||
                (request()->routeIs('listaChequeoSimuladorExtremo.index') ||
                    request()->routeIs('listaChequeoSimuladorExtremo.create')) ||
                (request()->routeIs('listaChequeoMaui.index') || request()->routeIs('listaChequeoMaui.create')) ||
                (request()->routeIs('listaChequeoKamikaze.index') ||
                    request()->routeIs('listaChequeoKamikaze.create')) ||
                (request()->routeIs('listaChequeoCrash.index') || request()->routeIs('listaChequeoCrash.create')) ||
                (request()->routeIs('listaChequeoAvion.index') || request()->routeIs('listaChequeoAvion.create'))">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Extrema</span>
                </a>
                <div id="collapseUtilities" class="collapse  @if (request()->routeIs('listaChequeoVCT.index') ||
                    request()->routeIs('listaChequeoVCT.create') ||
                    (request()->routeIs('listaChequeoTrenIguana.index') || request()->routeIs('listaChequeoTrenIguana.create')) ||
                    (request()->routeIs('listaChequeoSimuladorExtremo.index') ||
                        request()->routeIs('listaChequeoSimuladorExtremo.create')) ||
                    (request()->routeIs('listaChequeoMaui.index') || request()->routeIs('listaChequeoMaui.create')) ||
                    (request()->routeIs('listaChequeoKamikaze.index') || request()->routeIs('listaChequeoKamikaze.create')) ||
                    (request()->routeIs('listaChequeoCrash.index') || request()->routeIs('listaChequeoCrash.create')) ||
                    (request()->routeIs('listaChequeoAvion.index') || request()->routeIs('listaChequeoAvion.create'))) show @endif"
                    aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">listas de inspección:</h6>

                        <x-nav-menu :active="request()->routeIs('listaChequeoVCT.index') ||
                            request()->routeIs('listaChequeoVCT.create')" :href="route('listaChequeoVCT.index')">Inspección VCT </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoTrenIguana.index') ||
                            request()->routeIs('listaChequeoTrenIguana.create')" :href="route('listaChequeoTrenIguana.index')">Inspección Tren Iguana</x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoSimuladorExtremo.index') ||
                            request()->routeIs('listaChequeoSimuladorExtremo.create')" :href="route('listaChequeoSimuladorExtremo.index')">Inspección Simulador Extremo </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoMaui.index') ||
                            request()->routeIs('listaChequeoMaui.create')" :href="route('listaChequeoMaui.index')">Inspección Maui </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoKamikaze.index') ||
                            request()->routeIs('listaChequeoKamikaze.create')" :href="route('listaChequeoKamikaze.index')">Inspección Kamikaze </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoCrash.index') ||
                            request()->routeIs('listaChequeoCrash.create')" :href="route('listaChequeoCrash.index')">Inspección Crash </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoAvion.index') ||
                            request()->routeIs('listaChequeoAvion.create')" :href="route('listaChequeoAvion.index')">Inspección Avión </x-nav-menu>
                    </div>
                </div>

            </x-li-menu>
            <!-- Nav Item - Utilities Collapse Menu -->
            <x-li-menu :active="request()->routeIs('listaChequeoJungla.index') ||
                request()->routeIs('listaChequeoJungla.create') ||
                (request()->routeIs('listaChequeoCanopy.index') || request()->routeIs('listaChequeoCanopy.create'))">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Expedición</span>
                </a>
                <div id="collapseTree" class="collapse @if (request()->routeIs('listaChequeoJungla.index') ||
                    request()->routeIs('listaChequeoJungla.create') ||
                    (request()->routeIs('listaChequeoCanopy.index') || request()->routeIs('listaChequeoCanopy.create'))) show @endif"
                    aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">listas de inspección:</h6>
                        <x-nav-menu :active="request()->routeIs('listaChequeoJungla.index') ||
                            request()->routeIs('listaChequeoJungla.create')" :href="route('listaChequeoJungla.index')">Inspección Jungla </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoCanopy.index') ||
                            request()->routeIs('listaChequeoCanopy.create')" :href="route('listaChequeoCanopy.index')">Inspección Canopy </x-nav-menu>
                    </div>
                </div>
            </x-li-menu>
            <!-- Nav Item - Utilities Collapse Menu -->
            <x-li-menu :active="request()->routeIs('listaChequeoPolar.index') ||
                request()->routeIs('listaChequeoPolar.create') ||
                (request()->routeIs('listaChequeoEspacioInfinito.index') ||
                    request()->routeIs('listaChequeoEspacioInfinito.create'))">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Aventura</span>
                </a>
                <div id="collapseFour" class="collapse @if (request()->routeIs('listaChequeoPolar.index') ||
                    request()->routeIs('listaChequeoPolar.create') ||
                    (request()->routeIs('listaChequeoEspacioInfinito.index') ||
                        request()->routeIs('listaChequeoEspacioInfinito.create'))) show @endif"
                    aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">listas de inspección:</h6>
                        <x-nav-menu :active="request()->routeIs('listaChequeoPolar.index') ||
                            request()->routeIs('listaChequeoPolar.create')" :href="route('listaChequeoPolar.index')">Inspección Polar </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoEspacioInfinito.index') ||
                            request()->routeIs('listaChequeoEspacioInfinito.create')" :href="route('listaChequeoEspacioInfinito.index')">Inspección Espacio Infinito </x-nav-menu>
                    </div>
                </div>
            </x-li-menu>
            <!-- Nav Item - Utilities Collapse Menu -->
            <x-li-menu :active="((request()->routeIs('listaChequeoUrbano.index') ||
                request()->routeIs('listaChequeoUrbano.create'))) ||
                (request()->routeIs('listaChequeoTrenMitico.index') ||
                    request()->routeIs('listaChequeoTrenMitico.create')) ||
                (request()->routeIs('listaChequeoSimuladorFantasia.index') ||
                    request()->routeIs('listaChequeoSimuladorFantasia.create')) ||
                (request()->routeIs('listaChequeoMorgan.index') || request()->routeIs('listaChequeoMorgan.create')) ||
                (request()->routeIs('listaChequeoMiniCrash.index') ||
                    request()->routeIs('listaChequeoMiniCrash.create') ||  (request()->routeIs('listaChequeoInvasion.index') ||
                    request()->routeIs('listaChequeoInvasion.create')))">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Fantasía</span>
                </a>
                <div id="collapseFive" class="collapse @if (request()->routeIs('listaChequeoUrbano.index') ||
                    request()->routeIs('listaChequeoUrbano.create') ||
                    (request()->routeIs('listaChequeoTrenMitico.index') || request()->routeIs('listaChequeoTrenMitico.create')) ||
                    (request()->routeIs('listaChequeoSimuladorFantasia.index') ||
                        request()->routeIs('listaChequeoSimuladorFantasia.create')) ||
                    (request()->routeIs('listaChequeoMorgan.index') || request()->routeIs('listaChequeoMorgan.create')) ||
                    (request()->routeIs('listaChequeoMiniCrash.index') || request()->routeIs('listaChequeoMiniCrash.create')) ||  (request()->routeIs('listaChequeoInvasion.index') || request()->routeIs('listaChequeoInvasion.create'))) show @endif"
                    aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">listas de inspección:</h6>
                        <x-nav-menu :active="request()->routeIs('listaChequeoUrbano.index') ||
                            request()->routeIs('listaChequeoUrbano.create')" :href="route('listaChequeoUrbano.index')">Inspección Urbano </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoTrenMitico.index') ||
                            request()->routeIs('listaChequeoTrenMitico.create')" :href="route('listaChequeoTrenMitico.index')">Inspección Tren Mitico </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoSimuladorFantasia.index') ||
                            request()->routeIs('listaChequeoSimuladorFantasia.create')" :href="route('listaChequeoSimuladorFantasia.index')">Inspección Simulador Fantasia </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoMorgan.index') ||
                            request()->routeIs('listaChequeoMorgan.create')" :href="route('listaChequeoMorgan.index')">Inspección Morgan </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoMiniCrash.index') ||
                            request()->routeIs('listaChequeoMiniCrash.create')" :href="route('listaChequeoMiniCrash.index')">Inspección Mini Crash </x-nav-menu>
                        <x-nav-menu :active="request()->routeIs('listaChequeoInvasion.index') ||
                            request()->routeIs('listaChequeoInvasion.create')" :href="route('listaChequeoInvasion.index')">Inspección Invasión </x-nav-menu>
                    </div>
                </div>
            </x-li-menu>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('template/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="dropdown-item ">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        <span class="">{{ __('Cerrar Sesión') }}</span>
                                    </a>
                                </form>

                            </div>
                        </li>

                    </ul>

                    <!-- End of Topbar -->
                </nav>
                <!-- Begin Page Content -->
                <div class="mb-5">
                    <!-- Page Heading -->
                    @yield('contenido')

                </div>

            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Todos los derechos reservados 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>


    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


    {{--     <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js">
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js">
    </script> --}}
    @stack('scripts')
</body>

</html>
