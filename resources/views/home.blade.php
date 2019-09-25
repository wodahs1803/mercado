@extends('layouts.app')
@section('styles')
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
                <div class="card">
                    <div class="card-header">Clientes</div>
                    <div class="card-body">
                        {{$data['clientes']}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Produtos</div>
                    <div class="card-body">
                        {{$data['produtos']}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Compras</div>
                    <div class="card-body">
                        {{$data['compras']}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop