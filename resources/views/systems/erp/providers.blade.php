@extends('menu')

@section('content')

    <input type="hidden" id="idCustomerCreate">
    <div class="page-wrapper">
        
        {{-- breadcrumbs --}}
        @include('layouts.breadcrumbs',['typeBreadcrumbs' => 'system_erp_start', 'segmentType' => $segmentType])
        
        <div id="loading-request" class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
        </div>

        <div class="container-fluid">
                        
            @include('layouts.table');

        </div>
    </div>


    

@endsection
