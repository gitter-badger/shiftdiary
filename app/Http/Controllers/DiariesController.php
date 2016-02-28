<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Diary;
use Log;
use DateTime;

class DiariesController extends Controller
{
	public function index($id = null)
	{
		if($id==null)
		{
			return Diary::orderBy('id', 'asc')->with('notifications')->with('texts')->get();
		} else
		{
			return $this->show($id);
		}
	}
	
	public function store(Request $request)
	{
		$diary = new Diary();
		
		$diary->topic = $request->input('topic');
		$diary->employee_id = $request->input('employee_id');
		
		$diary->save();
		
		return 'Diary '.$diary->id.' successfully saved.';
	}
	public function show($id)
	{
		return Diary::find($id);
	}
	
	public function update(Request $request, $id) {
		$diary = Diary::find($id);
		
		$diary->topic = $request->input('topic');
		$diary->employee_id = $request->input('employee_id');
		
		$diary->save();
		
		return 'Diary ' . $diary->id . ' successfully updated.';
	}
	
	public function destroy(Request $request, $id) {
		$diary = Diary::find($id);
		
		$diary->delete();
		
		return 'Diary ' . $id . ' successfully deleted.';
	}
	
	public function daily() {
		return Diary::orderBy('id', 'asc')->where('created_at', '>=', new DateTime('today'))->with('notifications')->with('texts')->get();
	}
	
	
}
