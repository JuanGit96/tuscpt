<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model {

    //
    
    protected $guarded = [];

    public function user() {
        return $this->BelongsTo(User::class);
    }
    
    public function agencie() {
        return $this->BelongsTo(Agencies::class);
    }

}
