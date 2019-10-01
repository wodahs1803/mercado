@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <i class="material-icons mr-1" style="font-size:50px;">attach_money</i>
            <h1>Compras</h1>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Compras do cliente <b>{{$data['cliente']->nome}}</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Valor</th>
                                <th>Quantidade</th>
                                <th>Data da Compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['cliente']->compra as $compra)
                                @foreach($compra->produto as $produto)
                                <tr>
                                
                                    <td>{{$compra->id}}</td>
                                    <td>{{$produto->nome}}</td>
                                    <td>{{$produto->valor}}</td>
                                    <td>{{$produto->pivot->quantidade}}</td>
                                    <td>{{$compra->data}}</td>
                                    
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</div>
@stop