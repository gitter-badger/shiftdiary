<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    public function texts() {
		return $this->hasMany('App\Text');
	}
	public function notifications() {
		return $this->hasMany('App\Notification');
	}
	
	public function employee() {
		return $this->hasOne('App\Employee');
	}
}
