<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    
	public $table = "vacancies";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "position",
		"task",
		"abilities",
		"area",
		"salary",
		"contact",
		"period",
		"company_id"

	];

	public static $rules = [
	    "position" => "required",
		"task" => "required",
		"abilities" => "required",
		"area" => "required",
		"salary" => "required",
		"contact" => "required",
		"period" => "required"
	];
	public function company()
	{
		return $this->belongsTo('App\Models\Company');
	}

}
