<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
	public $table = "services";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "task",
		"area",
		"contact",
		"period"
	];

	public static $rules = [
	    "task" => "required",
		"area" => "required",
		"contact" => "required",
		"period" => "required"
	];

}
