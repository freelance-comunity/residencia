<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey_a extends Model
{
    
	public $table = "survey_as";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "q_id",
		"o_value",
		"survey_id"
	];

	public static $rules = [
	    "q_id" => "required",
		"o_value" => "required",
		"survey_id" => "required"
	];

}
