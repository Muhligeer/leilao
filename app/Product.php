<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    //


    protected $fillable = [
        'nome_product',
        'valor',
        'user_id'
    ];

    public function products() {
        return $this->belongsTo('App\User');
    }
}
