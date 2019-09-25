@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$data['cliente'] ? 'Editar cliente' : 'Novo cliente'}}</div>
    <div class="card-body">
        <form method="POST" action="{{url($data['url'])}}">
            @if($data['method'] == 'PUT')
                @method('PUT')
            @endif
            @csrf
            <div class="form-group">
                <label><b>Nome</b></label>
                <input type="text" value="{{old('cliente.nome', $data['cliente'] ? $data['cliente']->nome : '')}}" name="cliente[nome]" class="form-control">
                <span style="color:red">{{$errors->first('cliente.nome')}}</span>
            </div>
            <input type="submit" value="{{$data['cliente'] ? 'Atualizar' : 'Salvar'}}" class="btn btn-success">
        </form>
    </div>
</div>
@stop