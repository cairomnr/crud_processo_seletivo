<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    
	protected $fillable = [
		'description',
		'initials',
		'email_support',
		'url',
		'status',
		'justification_update'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
