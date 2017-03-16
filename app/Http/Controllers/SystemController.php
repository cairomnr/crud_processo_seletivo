<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\System;
use App\Http\Requests\SystemRequest;
use App\Http\Requests\SearchSystemRequest;

class SystemController extends Controller
{
    
	public function __construct() {  }

	public function index()
	{
		return view('system.search');
	}

	public function search(SearchSystemRequest $request) 
	{
		$systems = System::where($this->whereLike($request->all()))
						->orderBy('id', 'desc')
						->paginate(10);

		return view('system.list')
				->with('systems', $systems);
	}

	public function create()
	{
		return view('system.create');
	}

	public function store(SystemRequest $request)
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

	public function update(SystemRequest $request, System $system)
	{
		$system->update($request->all());
		
		return redirect('/system')->with('success', trans('miscellany.success'));
	}

	private function whereLike(array $parameters, array $where = [])
	{
		foreach($parameters as $field => $parameter)
		{
			if($parameter != null && $field != "page")
				array_push($where, [$field, 'like', '%'.$parameter.'%']);
		}

		return $where;
	}
}
