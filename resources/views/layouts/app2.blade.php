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
    @vite(['public/template/vendor/fontawesome-free/css/all.min.css', 'resources/css/app.css', 'public/template/css/sb-admin-2.min.css'])
    @livewireStyles
    @powerGridStyles
</head>

<body  id="page-top">

      <!-- BEGIN: Mobile Menu -->
      <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="{{ route('dashboard') }}" class="flex mr-auto">
                <x-application-logo class="w-32 mt-5" />
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-theme-24 py-5 hidden">
            <li>
                <x-nav-menu :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title">
                        {{ __('Dashboard') }}
                    </div>
                </x-nav-menu>
            </li>
            <li>
                <x-nav-menu href="javascript:;" :active="request()->routeIs('usuarios.index')">
                    <div class="menu__icon"> <i data-feather="users"></i> </div>
                    <div class="menu__title"> {{ __('Empleados') }} </div>

                    <div class="menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </x-nav-menu>
                <x-ul-menu :active="request()->routeIs('usuarios.index')">
                    <x-nav-menu :href="route('usuarios.index')" :active="request()->routeIs('usuarios.index')"
                        class="side-menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>

                        <div class="menu__title"> {{ __('Empleados') }} </div>

                    </x-nav-menu>
            </li>
            <li>
                <x-nav-menu :href="route('usuarios.index')" :active="request()->routeIs('p.index')" class="side-menu">
                    <div class="menu__icon"> <i data-feather="activity"></i> </div>

                    <div class="menu__title"> {{ __('Permisos') }} </div>

                </x-nav-menu>
            </li>
            </x-ul-menu>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
                <x-application-logo class="w-32" />

            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title">
                            {{ __('Dashboard') }}
                        </div>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="javascript:;" :active="request()->routeIs('usuarios.index')">
                        <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                        <div class="side-menu__title"> {{ __('Empleados') }} <i data-feather="chevron-down"
                                class="side-menu__sub-icon"></i>
                        </div>

                    </x-nav-link>
                    <x-ul :active="request()->routeIs('usuarios.index')">
                <li>
                    <x-nav-link :href="route('usuarios.index')" :active="request()->routeIs('usuarios.index')"
                        class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>

                        <div class="side-menu__title"> {{ __('Empleados') }} </div>

                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('usuarios.index')" :active="request()->routeIs('p.index')"
                        class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>

                        <div class="side-menu__title"> {{ __('Permisos') }} </div>

                    </x-nav-link>
                </li>
                </x-ul>
                </li>
                <li>
                    <x-nav-link href="javascript:;" :active="request()->routeIs('listaChequeoZigZag.index') ||
                            request()->routeIs('listaChequeoZigZag.create')">
                        <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="side-menu__title">
                            Listas de inspección
                            <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                        </div>
                    </x-nav-link>

                    <x-ul :active="request()->routeIs('listaChequeoZigZag.index') ||
                            request()->routeIs('listaChequeoZigZag.create')">

                <li>
                    <x-nav-link :href="route('listaChequeoZigZag.index')" :active="request()->routeIs('listaChequeoZigZag.index') ||
                            request()->routeIs('listaChequeoZigZag.create')" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>

                        <div class="side-menu__title"> {{ __('Lista de inspección Zig Zag') }} </div>

                    </x-nav-link>

                </li>
                </x-ul>
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i
                        data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                        class="breadcrumb--active">Dashboard</a> </div>
                <!-- END: Breadcrumb -->
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown relative mr-auto sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i
                            data-feather="bell" class="notification__icon"></i> </div>
                    <div
                        class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                        <div class="notification-content__box dropdown-box__content box">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-13.jpg">
                                    <div
                                        class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots in a piece of classical Latin literature
                                        from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-2.jpg">
                                    <div
                                        class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">It is a long established fact that a
                                        reader will be distracted by the readable content of a page when looking at its
                                        layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-14.jpg">
                                    <div
                                        class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots in a piece of classical Latin literature
                                        from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-6.jpg">
                                    <div
                                        class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">There are many variations of passages of
                                        Lorem Ipsum available, but the majority have suffered alteration in some form,
                                        by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-5.jpg">
                                    <div
                                        class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the industry&#039;s
                                        standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8 relative">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                        <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                    </div>
                    <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                        <div class="dropdown-box__content box bg-theme-38 text-white">
                            <div class="p-4 border-b border-theme-40">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="p-2">
                                <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                    <i data-feather="user" class="w-4 h-4 mr-2"></i> Perfil </a>
                            </div>
                            <div class="p-2 border-t border-theme-40">
                                  <!-- Authentication -->
                                  <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="dropdown-item ">
                                        <span class="text-white">{{ __('Cerrar Sesión') }}</span>
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <div class="p-2 w-full">
                @yield('contenido')
            </div>
        </div>
        <!-- END: Content -->
    </div>
    @livewireScripts
    @powerGridScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
</body>

</html>
