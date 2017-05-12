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
	    "name_project" => "required|max:1000",
	    "area" => "required|max:1000",
		"objetive" => "required|max:1000",
		"students" => "required",
		"applicant" => "required|max:1000",
		"address" => "required|max:255",
		"contact" => "required|max:1000",
		"phone" => "required|regex:/^[1-9]\d*$/|min:6|max:10",
		"cel" => "required|regex:/^[1-9]\d*$/|min:6|max:10",
		"email" => "required",
		"status" => "required",
		"period" => "required"
	];

}
