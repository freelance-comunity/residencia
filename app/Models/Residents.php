<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    
	public $table = "residents";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_project",
	    "area",
		"objective",
		"students",
		"applicant",
		"address",
		"contact",
		"phone",
		"cel",
		"email",
		"period",
		"status",
		"company_id"

	];

	public static $rules = [
	    "name_project" => "required",
	    "area" => "required",
		"objective" => "required",
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

	public function company()
	{
		return $this->belongsTo('App\Models\Company');
	}


}
