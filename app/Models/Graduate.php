<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    
	public $table = "graduates";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"last_name",
		"curp",
		"sex",
		"birthday",
		"address",
		"phone",
		"user_id"
	];

	public static $rules = [
	    "name" => "required",
		"last_name" => "required",
		"curp" => "required",
		"sex" => "required",
		"birthday" => "required",
		"address" => "required",
		"phone" => "required"
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
