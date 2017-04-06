<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{

	public $table = "graduates";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	"name",
	"last_name",
	"curp",
	"sex",
	"birthday",
	"address",
	"phone",
	"user_id"
	];

	public static $rules = [
	'name' => 'required|max:255',
	"last_name" => "required",
	"curp" => "required",
	"sex" => "required",
	"birthday" => "required",
	"address" => "required",
	"phone" => "required",
	'email' => 'required|email|max:255|unique:users',
	'password' => 'required|confirmed|min:6',
	'terms' => "required",
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function labor()
    {
        return $this->hasOne('App\Models\Labor');

    }

    public function poll()
    {
    	return $this->hasOne('App\Models\Poll');
    }

}
