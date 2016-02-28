<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Text;
use Log;

class TextsController extends Controller
{
	public function index($id = null)
	{
		if($id==null)
		{
			return Text::orderBy('id', 'asc')->get();
		} else
		{
			return $this->show($id);
		}
	}
	public function store(Request $request)
	{
		$text = new Text();
	
		$text->text = $request->input('text');
		$text->priority = $request->input('priority');
		$text->diary_id = $request->input('diary_id');
	
		$text->save();
	
		return 'Text '.$text->id.' successfully saved.';
	}
	public function show($id)
	{
		return Text::find($id);
	}
	public function update(Request $request, $id)
	{
		$text = Text::find($id);

		$text->text = $request->input('text');
		$text->priority = $request->input('priority');
		$text->diary_id = $request->input('diary_id');
	
		$text->save();
	
		return 'Text '.$text->id.' successfully updated.';
	}
	public function destroy(Request $request, $id)
	{
		$text = Text::find($id);
	
		$text->delete();
	
		return 'Text '.$id." successfully deleted.";
	}
}
