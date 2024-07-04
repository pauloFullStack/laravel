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
                        <li route="dashboard" class="redirect breadcrumb-item cursor">Início</li>
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @isset($name)
                        <h4 class="page-title">{{ $name }}</h4>
                    @endisset
                    @isset($allData)
                    <a href="{{ route($allData) }}">
                        <h4 class="page-title">{{ $exampleCss }}</h4>
                    </a>
                    @endisset
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                @forelse ($data as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div style="padding: 40px 0" class="text-center">
                            <a href="{{ route('css-examples.show', ['id' => $item->id]) }}" target="_blank">
                                <img class="card-hover" style="border-radius: 20px" width="100" height="100"
                                    src="{{ url("storage/{$item->image}") }}" alt="" class="img-fluid">
                                <div style="padding: 10px">
                                    <h3>{{ $item->title }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 text-center">
                        <h4>Nenhum Css Disponivel</h4>
                    </div>
                @endforelse
            </div>
            <div class="div-center">
                {!! $data->links() !!}
            </div>
        </div>
    </div>
@endsection
