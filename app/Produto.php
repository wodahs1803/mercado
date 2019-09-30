<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $table = 'produto';

    protected $fillable =  [
        'nome',
        'valor',
    ];

    public function compra()
    {
        return $this->belongsToMany('App\Compra', 'produto_has_compra')
                    ->withPivot('quantidade');
    }

}
