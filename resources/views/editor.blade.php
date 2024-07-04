@extends('menu')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">{{ $data['segmentType'] }}</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            {{-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.laravel.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="fab fa-laravel"></i></h1>
                                <h6>LARAVEL</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.php.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-language-php"></i></h1>
                                <h6>PHP</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.git.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-github-circle"></i></h1>
                                <h6>GIT</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.mysql.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-database"></i></h1>
                                <h6>MYSQL</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.js.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-language-javascript"></i></h1>
                                <h6>JAVASCRIPT</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.aws.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="fab fa-aws"></i></h1>
                                <h6>AWS</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.css.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-language-css3"></i></h1>
                                <h6>CSS</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.docker.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="fab fa-docker"></i></h1>
                                <h6>DOCKER</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.html.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-language-html5"></i></h1>
                                <h6>HTML</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.node.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-nodejs"></i></h1>
                                <h6>NODE</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.ssh.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-crop-square"></i></h1>
                                <h6>SSH</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('editor.ubuntu.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-ubuntu"></i></h1>
                                <h6>UBUNTU</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
