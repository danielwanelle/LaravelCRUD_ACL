@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @can('view', $chamado)
        <h2>Detalhe do chamado</h2>
            <ul class="list-group">
                <li class="list-group-item">Titulo: {{$chamado->titulo}}</li>
                <li class="list-group-item">Descrição: {{$chamado->descricao}}</li>
            </ul>
        @else
            <h3>Você não possui permissão para acessar este registro!</h3>
        @endcan
    </div>
</div>
@endsection
