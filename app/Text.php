<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
	public function Diary() {
		return $this->belongsTo ( 'App\Diary' );
	}
	
}
