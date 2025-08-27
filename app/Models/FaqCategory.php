<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->hasMany(Faq::class,'category_id');
    }
}
