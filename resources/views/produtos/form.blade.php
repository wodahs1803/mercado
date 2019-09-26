@extends('layouts.app') @section('content')
<div class="card">
    <div class="card-header">
        <h4>{{$data['produto'] ? 'Editar produto' : 'Novo produto'}}</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url($data['url'])}}">
            @if($data['method'] == 'PUT') @method('PUT') @endif @csrf
            <div class="form-group">
                <label><b>Nome</b></label>
                <input type="text" value="{{old('produto.nome', $data['produto'] ? $data['produto']->nome : '')}}" name="produto[nome]" class="form-control">
                <span style="color:red">{{$errors->first('produto.nome')}}</span>
            </div>
            <div class="form-group">
                <label><b>Valor</b></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">R$</div>
                    </div>
                    <input type="text" value="{{old('produto.valor', $data['produto'] ? $data['produto']->valor : '')}}" name="produto[valor]" class="form-control money">
                </div>
                <span style="color:red">{{$errors->first('produto.valor')}}</span>
            </div>
            <input type="submit" value="{{$data['produto'] ? 'Atualizar' : 'Salvar'}}" class="btn btn-success">
        </form>
    </div>
</div>
@stop