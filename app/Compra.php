<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compra extends Model
{
    use SoftDeletes;

    protected $table = 'compra';

    protected $fillable =  [
        'data',
        'cliente_id'
    ];

    public function cliente() {
        return $this->belongsTo('App\Cliente');
    }

    public function produto(){
        return $this->belongsToMany('App\Produto', 'produto_has_compra');
    }


}
