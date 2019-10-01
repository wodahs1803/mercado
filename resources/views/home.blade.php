@extends('layouts.app') @section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@stop 
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <i class="material-icons mr-1" style="font-size:50px;">home</i>
            <h1>Mercadão do Fravão</h1>
        </div>
    </div>
    <div class="card-body">
        <h6>Bem vindo!</h6>
        <hr>

        <div class="row">

            <div class="col-md-4">
                <div class="card text-white bg-info">
                    <div class="card-header">
                        <a style="text-decoration: none;color:white" href="{{url('clientes')}}"><h5>Clientes</h5></a>
                    </div>
                    <div class="card-body">
                        <h6>{{$data['clientes']}}</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-header">
                        <a style="text-decoration: none;color:white" href="{{url('produtos')}}"><h5>Produtos</h5></a>
                    </div>
                    <div class="card-body">
                        <h6>{{$data['produtos']}}</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success">
                    <div class="card-header">
                                                         <!-- #212529 -->
                        <a style="text-decoration: none;color:white" href="{{url('compras/create')}}"><h5>Compras</h5></a>
                    </div>
                    <div class="card-body">
                        <h6>{{$data['compras']}}</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop