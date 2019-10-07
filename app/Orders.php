<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    
    protected $guarded = [];
    
    
    public function kit() {
        return $this->belongsTo(Kits::class);
    }

    public function extras() {
        return $this->belongsToMany(Extras::class, 'order_extra','order_id', 'extra_id');
    }
    
    public function getFormattedValueAttribute()
{
    return '$'.number_format($this->getAttribute('value'), 0);
}
     
}
