<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
	protected $fillable = array('id',
    							'text',
    							'priority',
    							'diary_id');
	
	public function Diary() {
		return $this->belongsTo ( 'App\Diary' );
	}
	
}
