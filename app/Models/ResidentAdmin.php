<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResidentAdmin extends Model
{
    
	public $table = "resident_admins";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	     "name_project",
	    "area",
		"objetive",
		"students",
		"applicant",
		"address",
		"contact",
		"phone",
		"cel",
		"email",
		"period",
		"status",
	];

	public static $rules = [
	    "name_project" => "required",
	    "area" => "required",
		"objetive" => "required",
		"students" => "required",
		"applicant" => "required",
		"address" => "required",
		"contact" => "required",
		"phone" => "required",
		"cel" => "required",
		"email" => "required",
		"status" => "required",
		"period" => "required"
	];

}
