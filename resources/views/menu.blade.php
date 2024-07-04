<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PhpGold</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('/assets/images/favicon-32x32.png') }}">
    <title>PhpGold</title>
    <!-- Custom CSS -->
    <link href="{{ URL::asset('/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div id="dashboard" class="overlay">
        <i style="color:#2c58f5" class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    </div>

    <div id="main-wrapper" class="mini-sidebar">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i>
                    </a>
                    <a class="navbar-brand" href="{{route('home.list')}}" href="javascript:void(0)">
                        {{-- Colocar a imagem do elefante do php
                            <b class="logo-icon p-l-10">
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        </b> --}}
                        <span class="logo-text">
                            <img src="{{ URL::asset('/assets/images/image-php.png') }}" alt="homepage"
                                class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>
                        @isset($route)
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form action="{{ route($route) }}" id="search-submit" method="POST"
                                    class="app-search position-absolute">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="text" class="form-control" name="search"
                                        placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
                        @endisset
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('home.list') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Início</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('home.studies.list') }}" aria-expanded="false"><i
                                    class="mdi mdi-book-open-page-variant"></i><span
                                    class="hide-menu">Estudos</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('home.systems.list') }}" aria-expanded="false"><i
                                    class="mdi mdi-animation"></i><span class="hide-menu">Sistemas PhpGold</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('css-examples.list') }}" aria-expanded="false"><i
                                    class="mdi mdi-animation"></i><span class="hide-menu">Exemplos CSS</span></a>
                        </li>



                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


        {{-- Aqui é onde todas as paginas vão ser abertas, juntamente com o menu acima e header --}}
        @yield('content')
        <div class="page-wrapper">
            <input type="hidden" id="id-selects">
            <footer class="footer text-center">
                PhpGold
            </footer>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

    </div>

    <script src="{{ URL::asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ URL::asset('/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ URL::asset('/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ URL::asset('/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::asset('/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ URL::asset('/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ URL::asset('/dist/js/pages/chart/chart-page-init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/toastr/build/toastr.min.js') }}"></script>
    <script type="module" src="/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>
