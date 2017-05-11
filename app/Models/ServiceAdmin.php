<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceAdmin extends Model
{
    
	public $table = "service_admins";

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
