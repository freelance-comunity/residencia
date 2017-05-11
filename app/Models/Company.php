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
		"period",
		"user_id"
	];

	public static $rules = [
	    "name" => "required",
		"sector" => "required",
		"rfc" => "required",
		"address" => "required",
		"phone" => "required",
		"director" => "required",
		"contact" => "required",
		"period" => "required",
		'email' => 'required|email|max:255|unique:users',
		'password' => 'required|confirmed|min:6',
		'terms' => "required",
	];

	public static $rulesAdmin = [
	    "name" => "required",
		"sector" => "required",
		"rfc" => "required",
		"address" => "required",
		"phone" => "required",
		"director" => "required",
		"contact" => "required",
		"period" => "required",
		'email' => 'required|email|max:255|unique:users',
		
	];
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function vacancy()
    {
        return $this->hasMany('App\Models\Vacancy');
    }
    public function service()
    {
        return $this->hasMany('App\Models\Service');
    }
    public function residents()
    {
        return $this->hasMany('App\Models\Residents');
    }

}
