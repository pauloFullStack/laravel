@if (!isset($tbody))
    @php($tbody = 'tbody-default')
@endif

<div class="table-responsive">
    <table id="table-default" class="table table-striped">
        <thead class="bg-primary">
            <tr>
                @foreach ($th as $segmentType => $title)
                    @include('layouts.type-tables.table-th')
                @endforeach
            </tr>
        </thead>
        <tbody id="{{ $tbody }}">

            @forelse ($data as $valDatal)
                {{-- Table css examplos --}}
                @if ($typeOfRequest == 'example_css')
                    @include('layouts.type-tables.example-css')
                @endif
                {{-- table services --}}
                @if ($typeOfRequest == 'service')
                    @include('layouts.type-tables.service')
                @endif
                {{-- Table customer services --}}
                @if ($typeOfRequest == 'customer_service')
                    @include('layouts.type-tables.customer-service')
                @endif
                {{-- Table customer --}}
                @if ($typeOfRequest == 'customer')
                    @include('layouts.type-tables.customer')
                @endif
                {{-- Table editor studies --}}
                @if ($typeOfRequest == 'editor')
                    @include('layouts.type-tables.editor')
                @endif
                {{-- Table employees --}}
                @if ($typeOfRequest == 'employee')
                    @include('layouts.type-tables.employees')
                @endif
                {{-- Table employees roles --}}
                @if ($typeOfRequest == 'employee_roles')
                    @include('layouts.type-tables.employees-roles')
                @endif
                {{-- Table my works --}}
                @if ($typeOfRequest == 'my_works')
                    @include('layouts.type-tables.my-works')
                @endif
            @empty
                <div>
                    <td id="message-table" colspan="{{ $collapse }}">Nenhuma Informação</td>
                </div>
            @endforelse
        </tbody>
    </table>
</div>


<div class="div-center">
    {!! $data->links() !!}
</div>
