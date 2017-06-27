<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    
	public $table = "surveys";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "survey_title",
		"survey_text",
		"survey_status"
	];

	public static $rules = [
	    "survey_title" => "required",
		"survey_text" => "required",
		"survey_status" => "required"
	];

	public function questions()
	{
		return $this->hasMany('App\Models\Survey_q');
	}

}
