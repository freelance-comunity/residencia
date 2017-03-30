<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
	public $table = "companies";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"sector",
		"rfc",
		"address",
		"phone",
		"director",
		"contact",
		"period"
	];

	public static $rules = [
	    "name" => "required",
		"sector" => "required",
		"rfc" => "required",
		"address" => "required",
		"phone" => "required",
		"director" => "required",
		"contact" => "required",
		"period" => "required"
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function vacancy()
    {
        return $this->hasOne('App\Models\Vacancy');
    }

}
