<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey_o extends Model
{
    
	public $table = "survey_os";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "o_text",
		"o_value",
		"survey_id",
		"survey_q_id",
		"o_status"
	];

	public static $rules = [
	    "o_text" => "required",
		"o_value" => "required",
		"survey_id" => "required",
		"survey_q_id" => "required",
		"o_status" => "required"
	];


	public function question()
	{
		return $this->belongsTo('App\Models\Survey_q');
	}
}
