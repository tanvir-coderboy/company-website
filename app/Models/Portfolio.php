<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(PortfolioCategory::class,'category_id');
    }
}
