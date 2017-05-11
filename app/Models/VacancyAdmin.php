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
	    "position" => "required",
		"task" => "required",
		"abilities" => "required",
		"area" => "required",
		"salary" => "required",
		"contact" => "required",
		"phone" => "required",
		"email" => "required"
	];

}
