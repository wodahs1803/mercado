<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoCompra extends Model
{
    use SoftDeletes;

    protected $table = 'produto_has_compra';

    protected $fillables =  [
        'produto_id',
        'compra_id',
        'quantidade'
    ];

    public function compra() {
        return $this->belongsTo('App\Compra');
    }

    public function produto() {
        return $this->belongsTo('App\Produto');
    }
}
