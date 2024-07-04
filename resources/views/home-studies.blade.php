@extends('menu')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <ol class="breadcrumb">
                        <li route="dashboard" class="redirect breadcrumb-item cursor">Início</li>
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @isset($data['segmentType'])
                        <h4 class="page-title">{{ $data['segmentType'] }}</h4>
                    @endisset
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('studies.laravel.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="fab fa-laravel"></i></h1>
                                <h6>LARAVEL</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column #7460ee -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('studies.php.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-language-php"></i></h1>
                                <h6>PHP</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('studies.git.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-github-circle"></i></h1>
                                <h6>GIT</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('studies.mysql.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-database"></i></h1>
                                <h6>MYSQL</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('studies.js.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-language-javascript"></i></h1>
                                <h6>JAVASCRIPT</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('studies.aws.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="fab fa-aws"></i></h1>
                                <h6>AWS</h6>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('studies.css.index') }}">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-language-css3"></i></h1>
                            <h6 class="text-white">CSS</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('studies.docker.index') }}">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="fab fa-docker"></i></h1>
                            <h6 class="text-white">DOCKER</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('studies.html.index') }}">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-language-html5"></i></h1>
                            <h6 class="text-white">HTML</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('studies.node.index') }}">
                    <div class="card card-hover">
                        <div class="box bg-orange text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-nodejs"></i></h1>
                            <h6 class="text-white">NODE</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('studies.ssh.index') }}">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-crop-square"></i></h1>
                            <h6 class="text-white">SSH</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('studies.ubuntu.index') }}">
                    <div class="card card-hover">
                        <div class="box bg-dark text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-ubuntu"></i></h1>
                            <h6 class="text-white">UBUNTU</h6>
                        </div>
                    </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
