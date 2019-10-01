@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h4>Nova Compra</h4></div>
    <div class="card-body">
        <form method="POST" action="{{url('compras')}}">
    
            @csrf
            <div class="form-group">
                <label for="cliente"><b>Cliente</b></label>
                <select name="compra[cliente_id]" class="form-control" id="cliente">
                    <option value="">--Selecione--</option>
                    @foreach($data['clientes'] as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dataCompra"><b>Data da Compra</b></label>
                        <input id="dataCompra" type="text" value="{{old('compra.data', '')}}" name="compra[data]" class="form-control placeholder">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="p1"><b>Produto 1</b></label>
                        <div class="input-group">
                            <select id="p1" name="produtos[0][produto_id]" class="form-control" >
                                <option value="0">--Selecione--</option>
                                @foreach($data['produtos'] as $produto)
                                    <option value="{{$produto->id}}">{{$produto->nome}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="produtos[0][quantidade]" aria-label="quantidade-p1" class="form-control qtd col-3">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="p2"><b>Produto 2</b></label>
                        <div class="input-group">
                            <select id="p2" name="produtos[1][produto_id]" class="form-control">
                                <option value="0">--Selecione--</option>
                                @foreach($data['produtos'] as $produto)
                                    <option value="{{$produto->id}}">{{$produto->nome}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="produtos[1][quantidade]" aria-label="quantidade-p2" class="form-control qtd col-3">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="p3"><b>Produto 3</b></label>
                        <div class="input-group">
                            <select id="p3" name="produtos[2][produto_id]" class="form-control">
                                <option value="0">--Selecione--</option> 
                                @foreach($data['produtos'] as $produto)
                                    <option value="{{$produto->id}}">{{$produto->nome}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="produtos[2][quantidade]" aria-label="quantidade-p3" class="form-control qtd col-3">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </div>
</div>
@stop