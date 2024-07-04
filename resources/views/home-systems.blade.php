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
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{ route('systems.erp.index') }}">
                        <div class="card card-hover">
                            <div class="box bg-purple text-center">
                                <h1><i class="mdi mdi-settings-box"></i></h1>
                                <h6>ERP Básico</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
