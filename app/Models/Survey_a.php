<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey_a extends Model
{
    
	public $table = "survey_as";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "survey_q_id",
		"o_value",
		"survey_id",
		"graduate_id"
	];

	public static $rules = [
	    /*"survey_q_id" => "required",
		"o_value" => "required",
		"survey_id" => "required"*/
	];

	public function question()
	{
		return $this->belongsTo('App\Models\Survey_q');
	}

}
