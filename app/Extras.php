<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extras extends Model {

	//

	protected $guarded = [];

	public function orders() {
		return $this->belongsToMany(Orders::class, 'order_extra', 'extra_id', 'order_id');
	}

}
