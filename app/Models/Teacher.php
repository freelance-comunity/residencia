<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
	public $table = "teachers";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"last_name",
		"rfc",
		"phone",
		"user_id"
	];

	public static $rules = [
	    "name" => "required",
		"last_name" => "required",
		"rfc" => "required",
		"phone" => "required"
	];

}
