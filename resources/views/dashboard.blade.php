@extends('menu')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Início</h4>
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
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('home.studies.list') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-book-open-page-variant"></i></h1>
                                <h6>Estudos</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('home.systems.list') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-animation"></i></h1>
                                <h6>Sistemas PhpGold</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{ route('css-examples.list') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="fab fa-css3-alt"></i></h1>
                                <h6>Exemplos CSS</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
