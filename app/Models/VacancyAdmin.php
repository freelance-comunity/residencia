<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacancyAdmin extends Model
{
    
	public $table = "vacancy_admins";

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
		"period"	
	];

	public static $rules = [
	    "position" => "required|max:1000",
		"task" => "required|max:1000",
		"abilities" => "required|max:1000",
		"area" => "required|max:1000",
		"salary" => "required|regex:/^[1-9]\d*$/",
		"contact" => "required|max:1000",
		"phone" => "required|regex:/^[1-9]\d*$/|min:6|max:10",
		"email" => "required",
		"period" => "required"
	];

}
