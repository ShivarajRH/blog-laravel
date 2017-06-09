<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	// protected $fillable=['title','body']; // Globally - allowed to edit fields
	// protected $guarded=['user_id']; // Globally - Restricted to edit 

	protected $fillable = ['title','body','ispublish','user_id'];
}
