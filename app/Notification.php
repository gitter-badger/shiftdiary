<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {
	public function Diary() {
		return $this->belongsTo ( 'App\Diary' );
	}
}
