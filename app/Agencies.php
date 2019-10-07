<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencies extends Model {

    //
    
    protected $guarded = [];

    public function agents() {
        return $this->hasMany(Agents::class);
    }
    
    public function getCodeNameAttribute($value)
    {
        return $this->code . "-" . $this->name ;
    }

}
