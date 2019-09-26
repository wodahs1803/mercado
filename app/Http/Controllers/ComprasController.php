<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Compra, Produto, Cliente};
use DB;

class ComprasController extends Controller
{
    public function index($id) {
        $data = [
            'cliente' => Cliente::findOrFail($id)
        ];
        return view('compras.index', compact('data'));
        
    }

    public function create() {
        $data = [
            'clientes' => Cliente::all(),
            'produtos' => Produto::all()
        ];
        return view('compras.form', compact('data'));
    }
    
    public function store(Request $request) {
        DB::beginTransaction();
        try {
            $compra = new Compra;
            
            $compra->create([
                'data' => $compra->setData($request['compra']['data']),
                'cliente_id' => $request['compra']['cliente_id']
            ]);
            
            $compra->produto()->attach($request['produtos'][0]['produto_id'], ['quantidade' => $request['produtos'][0]['quantidade']]);
            DB::commit();
            return redirect('clientes')->with('success', 'Compra realizada com sucesso!');
        } catch(\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect('clientes')->with('error', 'Erro no servidor! Compra não realizada!'); 
        }
    }
}
