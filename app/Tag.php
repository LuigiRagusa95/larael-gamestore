<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /* collegamento con i prodotti */
    public function products() {
        return $this->belongsToMany('App\Product');
    }
}
