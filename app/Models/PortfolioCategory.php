<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $guarded = [];

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class,'category_id');
    }
}
