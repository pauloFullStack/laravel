{{-- breadcrumbs dos editores de estudo --}}
@if ($typeBreadcrumbs == 'editor')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <ol class="breadcrumb">
                    <li route="editor" class="redirect breadcrumb-item cursor">Início</li>
                </ol>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @isset($segmentType)
                    <h4 class="page-title">{{ $segmentType }}</h4>
                @endisset
            </div>
        </div>
    </div>
@endif

{{-- breadcrumbs da tela serviços --}}
@if ($typeBreadcrumbs == 'system_erp_start')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <ol class="breadcrumb">
                    <li route="systems/erp" class="redirect breadcrumb-item cursor">Início</li>
                </ol>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @isset($segmentType)
                    <h4 class="page-title">{{ $segmentType }}</h4>
                @endisset
            </div>
        </div>
        @include('layouts.logout')
    </div>
@endif

{{-- breadcrumbs da tela clientes --}}
@if ($typeBreadcrumbs == 'customers_service')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <ol class="breadcrumb">
                    <li route="systems/erp" class="redirect breadcrumb-item cursor">Início</li>
                </ol>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ol class="breadcrumb">
                    <li route="systems/erp/customers" class="redirect breadcrumb-item cursor">
                        {{ $customers }}
                    </li>
                </ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @if (isset($name))
                    <h4 class="page-title">
                        {{ $name }}</h4>
                @else
                    <h4 class="page-title">
                        Cliente Excluido</h4>
                @endif
            </div>
        </div>
        @include('layouts.logout')
    </div>
@endif


{{-- breadcrumbs da tela serviço do cliente --}}
@if ($typeBreadcrumbs == 'customers')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <ol class="breadcrumb">
                    <li route="systems/erp" class="redirect breadcrumb-item cursor">Início</li>
                </ol>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @isset($segmentType)
                    <h4 class="page-title">{{ $segmentType }}</h4>
                @endisset
            </div>
        </div>
        @include('layouts.logout')
    </div>
@endif
