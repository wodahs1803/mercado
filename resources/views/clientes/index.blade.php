@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <i class="material-icons mr-1" style="font-size:50px;">account_circle</i>
            <h1>Cliente</h1>
        </div>
    </div>
    <div class="card-body">
    
        <div class="col-md-12">
            <div class="text-right">
                <a href="{{url('clientes/create')}}" class="btn btn-success">Novo Cliente</a>
                <!-- <a href="{{url('compras/create')}}" class="btn btn-primary">Nova Compra</a> -->
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Clientes Ativos</div>
                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 50%">Nome</th>
                                <th colspan='3' style="width:50%">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['clientesAtivos'] as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>
                                    <a href="{{url('clientes/'.$cliente->id.'/compras')}}" class="btn btn-info">Compras</td>
                                    <td>
                                    <a href="{{url('clientes/'.$cliente->id.'/edit')}}" class="btn btn-warning">Editar</td>
                                    <td>
                                        <form action="{{url('clientes', [$cliente->id])}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                                <input type="submit" class="btn btn-danger" value="Desativar"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    {{ $data['clientesAtivos']->links() }}
                </div>
            </div>
        </div>
    
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Clientes Inativos</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:50%">Nome</th>
                                <th style="width:50%">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['clientesInativos'] as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>
                                        <form action="{{url('clientes', [$cliente->id])}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                                <input type="submit" class="btn btn-success" value="Ativar"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data['clientesInativos']->links() }}
                </div>
            </div>
        </div>
    
    </div>
</div>
@stop