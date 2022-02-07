<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /* collegamento con i tag */
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
