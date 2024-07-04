<div class="div-p20">
    <h3 style="color: #000" class="text-center" >{!! auth()->user()->name !!}</h3>
</div>
<form style="text-align: right;" id="logout-form" action="{{ route('logout') }}" method="POST">
    <a onclick="event.preventDefault();
document.getElementById('logout-form').submit();"
        class="btn btn-outline-dark">Sair</a>
    @csrf
</form>
