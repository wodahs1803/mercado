@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Compras</div>
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
                                <th>Data da Compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['cliente']->compras as $compra)
                                <tr>
                                    <td>{{$compra->id}}</td>
                                    <td>{{$compra->produto->nome}}</td>
                                    <td>{{$compra->produto->valor}}</td>
                                    <td>{{$compra->data}}</td>
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