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
	    "task" => "required|max:1000",
		"area" => "required|max:1000",
		"contact" => "required|max:1000",
		"period" => "required"
	];

}
