@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Nova Compra</div>
    <div class="card-body">
        <form method="POST" action="{{url('compras')}}">
    
            @csrf
            <div class="form-group">
                <label><b>Cliente</b></label>
                <select name="compra[cliente_id]" class="form-control">
                    @foreach($data['clientes'] as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>Data da Compra</b></label>
                        <input type="text" value="{{old('compra.data', '')}}" name="compra[data]" class="form-control data">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>produto 1</b></label>
                        <select name="produtos[0][produto_id]" class="form-control">
                            @foreach($data['produtos'] as $produto)
                                <option value="{{$produto->id}}">{{$produto->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>produto 2</b></label>
                        <select name="produtos[1][produto_id]" class="form-control">
                            @foreach($data['produtos'] as $produto)
                                <option value="{{$produto->id}}">{{$produto->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>produto 3</b></label>
                        <select name="produtos[2][produto_id]" class="form-control">
                            @foreach($data['produtos'] as $produto)
                                <option value="{{$produto->id}}">{{$produto->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </div>
</div>
@stop