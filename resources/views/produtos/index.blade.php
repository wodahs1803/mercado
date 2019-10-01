@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <i class="material-icons mr-1" style="font-size:50px;">shopping_cart</i>
            <h1>Produtos</h1>
        </div>
    </div>
    <div class="card-body">
    
        <div class="col-md-12">
            <div class="text-right">
                <a href="{{url('produtos/create')}}" class="btn btn-success">
                    <div class="row mr-1 ml-1">
                        <i class="material-icons mr-1">add_shopping_cart</i>
                        Novo Produto
                    </div>
                </a>
                <!-- <a href="{{url('compras/create')}}" class="btn btn-primary">Nova Compra</a> -->
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Produtos Ativos</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 40%">Nome</th>
                                <th style="width: 30%">Valor</th>
                                <th colspan='2' style="width: 30%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['produtosAtivos'] as $produto)
                                <tr>
                                    <td>{{$produto->nome}}</td>
                                    <td>{{$produto->valor}}</td>
                                    <td>
                                    <!-- <a href="{{url('produtos/'.$produto->id.'/compras')}}" class="btn btn-info">Compras</a> -->
                                    <a href="{{url('produtos/'.$produto->id.'/edit')}}" class="btn btn-warning ml-1">Editar</td>
                                    <td>
                                        <form action="{{url('produtos', [$produto->id])}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                                <input type="submit" class="btn btn-danger ml-1" value="Desativar"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Produtos Inativos</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 40%">Nome</th>
                                <th style="width: 30%">Valor</th>
                                <th style="width: 30%">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['produtosInativos'] as $produto)
                                <tr>
                                    <td>{{$produto->nome}}</td>
                                    <td>{{$produto->valor}}</td>
                                    <td>
                                        <form action="{{url('produtos', [$produto->id])}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                                <input type="submit" class="btn btn-success" value="Ativar"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</div>
@stop