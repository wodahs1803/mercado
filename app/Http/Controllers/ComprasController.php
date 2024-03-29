<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Compra, Produto, Cliente};
use DB;

class ComprasController extends Controller
{
    public function index($id) {

        $data = [
            'cliente' => Cliente::findOrFail($id),
            //'compras' => Compra::where('cliente_id', $id)->get(),
            //'produto' => Produto::where('id', $produto_id['id'])->get()
        ];

        //return($data);
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
            
            $compra = Compra::create([
                'data' => ($request['compra']['data']),
                'cliente_id' => $request['compra']['cliente_id']
            ]);
            // return $request;
            // $id = $compra->id;
            // dd($id);
            // dd($request['produtos'][0]['produto_id']);
            // $compra->produto()->sync($compra);
            /*
            $compra->produto()->attach($request['produtos'][0]['produto_id'], ['quantidade' => $request['produtos'][0]['quantidade']]);
            */
            $compra->produto()->attach($request['produtos']);
            DB::commit();
            return redirect('clientes')->with('success', 'Compra realizada com sucesso!');
        } catch(\Exception $e) {
            DB::rollback();
            return redirect('clientes')->with('error', 'Erro no servidor! Compra não realizada!'); 
        }
    }
}
