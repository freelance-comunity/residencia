<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    
	public $table = "residents";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_project",
		"objective",
		"students",
		"applicant",
		"email",
		"period",
		"company_id"

	];

	public static $rules = [
	    "name_project" => "required",
		"objective" => "required",
		"students" => "required",
		"applicant" => "required",
		"email" => "required",
		"period" => "required"
	];

	public function company()
	{
		return $this->belongsTo('App\Models\Company');
	}


}
