@extends('menu', ['route' => $route])

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <ol class="breadcrumb">
                        <li route="studies" class="redirect breadcrumb-item cursor">Início</li>
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @isset($segmentType)
                        <h4 class="page-title">{{ $segmentType }}</h4>
                    @endisset
                </div>
            </div>
        </div>

        {{-- <div class="container-fluid">
            <br>
            @if (isset($data))
                @foreach ($data as $dataItem)
                    <div class="div-p10">
                        <div class="div-list-style" >
                            <div  class="row div-p10">
                                <div class="col">
                                    <h3>{!! $dataItem['title'] !!}</h3>
                                    <p>
                                        {!! $dataItem['description'] !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="div-p20">
                    <center>
                        <h2>Nenhuma Informação</h2>
                    </center>
                </div>
            @endif

        </div> --}}

        <div class="container-fluid">
            @isset($data)
                <div id="accordian-4">
                    @foreach ($data as $dataItem)
                        <div class="card m-t-30 card card-hover">
                            <a class="card-header link" data-toggle="collapse" data-parent="#accordian-4"
                                href="#Toggle-{{ $dataItem['id'] }}" aria-expanded="true" aria-controls="Toggle-1"><i
                                    class="mdi mdi-book-open-page-variant"
                                    aria-hidden="true"></i>&nbsp;<span>{!! $dataItem['title'] !!}</span></a>
                            <div id="Toggle-{{ $dataItem['id'] }}"
                                @if ($dataItem['position'] == 1) class="collapse multi-collapse"@else class="collapse multi-collapse" @endif>
                                <div class="card-body widget-content description-studies">{!! $dataItem['description'] !!}<br>
                                    @isset($dataItem['code'])
                                        <b>{!! $dataItem['code'] !!}</b>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endisset
        </div>
    </div>
@endsection
