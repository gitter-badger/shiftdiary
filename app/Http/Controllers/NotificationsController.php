<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
use App\Notification;

class NotificationsController extends Controller
{
	public function index($id = null)
	{
		if($id==null)
		{
			return Notification::orderBy('id', 'asc')->get();
		} else
		{
			return $this->show($id);
		}
	}
	public function store(Request $request)
	{
		$notification = new Notification();
		
		$notification->diary_id = $request->input('diary_id');
		$notification->employee_id = $request->input('employee_id');
		
		$notification->save();
		
		return 'Notification '.$notification->id.' successfully saved.';
	}
	public function show($id)
	{
		return Notification::find($id);
	}
	public function update(Request $request, $id)
	{
		if($id)
		{
			Log::info("ID on annettu");
		} else
		{	Log::info("ID puuttuu");
		}
		$notification = Notification::find($id);
		
		$notification->diary_id = $request->input('diary_id');
		$notification->employee_id = $request->input('employee_id');
		
		$notification->save();
		
		return 'Notification '.$notification->id.' successfully updated.';
	}
	public function destroy(Request $request, $id)
	{
		$notification = Notification::find($id);
		
		$notification->delete();
		
		return 'Notification '.$id." successfully deleted.";
	}
}
