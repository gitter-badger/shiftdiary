<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {
	
	protected $fillable = array('id',
								'diary_id',
								'employee_id');
	
	public function Diary() {
		return $this->belongsTo ( 'App\Diary' );
	}
}
