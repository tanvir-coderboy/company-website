<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\OAuth1\Client\Server\Server;

class Service extends Model
{
    protected $guarded = [];


    public function serviceItems()
    {
        return $this->hasMany(ServiceItem::class,'service_id');
    }

  
}
