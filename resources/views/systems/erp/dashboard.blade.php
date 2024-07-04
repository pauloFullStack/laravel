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
                        <li route="systems" class="redirect breadcrumb-item cursor">Início</li>
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @isset($segmentType)
                        <h4 class="page-title">{{ $segmentType }}</h4>
                    @endisset
                </div>
            </div>

            {{-- Botão logout --}}
            @include('layouts.logout')
        </div>

        <div class="container-fluid">

            <div class="row">
                @forelse ($userRoles as $roles)
                    <!-- Column -->
                    @if ($roles['id'] == 1)
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <a href="{{ route('systems.erp.customers') }}">
                                <div class="card card-hover">
                                    <div class="box bg-purple text-center">
                                        <h1><i class="fas fa-users"></i></h1>
                                        <h6>Clientes</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    <!-- Column -->
                    @if ($roles['id'] == 3)
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <a href="{{ route('systems.erp.all-works') }}">
                                <div class="card card-hover">
                                    <div class="box bg-purple text-center">
                                        <h1><i class="fas fa-box"></i></h1>
                                        <h6>Todos os Trabalhos</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    <!-- Column -->
                    @if ($roles['id'] == 5)
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <a href="{{ route('systems.erp.my-works') }}">
                                <div class="card card-hover">
                                    <div class="box bg-purple text-center">
                                        <h1><i class="fas fa-box-open"></i></h1>
                                        <h6>Meus Trabalhos</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    <!-- Column -->
                    @if ($roles['id'] == 2)
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <a href="{{ route('systems.erp.employees') }}">
                                <div class="card card-hover">
                                    <div class="box bg-purple text-center">
                                        <h1><i class="fas fa-user-circle"></i></h1>
                                        <h6>Colaboradores</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    <!-- Column -->
                    @if ($roles['id'] == 4)
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <a href="{{ route('systems.erp.services') }}">
                                <div class="card card-hover">
                                    <div class="box bg-purple text-center">
                                        <h1><i class="fas fa-address-card"></i></h1>
                                        <h6>Serviços Fornecidos</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
            </div>
            @endforelse

        </div>


    </div>
@endsection
