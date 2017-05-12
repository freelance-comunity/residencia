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
		"phone",
		"email",
		"period",
		"company_id"

	];

	public static $rules = [
	    "position" => "required|max:255",
		"task" => "required|max:1000",
		"abilities" => "required|max:1000",
		"area" => "required|max:255",
		"salary" => "required|regex:/^[1-9]\d*$/",
		"contact" => "required|max:255",
		"phone" => "required|regex:/^[1-9]\d*$/|min:6|max:10",
		"email" => "required",
		"period" => "required"
	];
	
	public function company()
	{
		return $this->belongsTo('App\Models\Company');
	}

}
