<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\System;
use App\Http\Requests\RequestSystem;

class SystemController extends Controller
{
    
	public function __construct() {  }

	public function index()
	{
		return view('system.list')
					->with('systems', [])
					->with('action', 0);
	}

	public function search(Request $request) 
	{
		/* Ver onde eu coloco esse código */
		$description = $request->input('description');
		$initials = $request->input('initials');
		$email_support = $request->input('email_support');

		$where = [];

		if($description != null)
			array_push($where, ['description', 'like', '%'.$description.'%']);
		if($initials != null)
			array_push($where, ['initials', 'like', '%'.$initials.'%']);
		if($email_support != null)
			array_push($where, ['email_support', 'like', '%'.$email_support.'%']);

		$systems = System::where($where)->limit(5)->orderBy('id', 'desc')->paginate(1);

		return view('system.list')
				->with('systems', $systems)
				->with('action', 1);
	}

	public function create()
	{
		return view('system.create');
	}

	public function store(RequestSystem $request)
	{
		System::create($request->all());

		return redirect('/system')->with('success', trans('miscellany.success'));
	}

	public function edit(System $system)
	{
		return view('system.edit')
				->with('system', $system)
				->with('user', $system->user);
	}

	public function update(RequestSystem $request, System $system)
	{
		$system->update($request->all());
		
		return redirect('/system')->with('success', trans('miscellany.success'));
	}

}
