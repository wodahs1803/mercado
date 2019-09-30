<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

    protected $table = 'cliente';

    protected $fillable =  ['nome'];

    public function compra() {
        return $this->hasMany('App\Compra');
    }
    
}