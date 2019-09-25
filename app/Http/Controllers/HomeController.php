<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Produto, Compra, Cliente};

class HomeController extends Controller
{
    // public function index(){
    //     return view('home');
    // }

    public function index() {
        $data = [
            'clientes' => Cliente::count(),
            'compras' => Compra::count(),
            'produtos' => Produto::count()
        ];
        return view('home', compact('data'));
    }
}
