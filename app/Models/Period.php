<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    
	public $table = "periods";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"date_start",
		"date_end",
		"status"
	];

	public static $rules = [
	    "name" => "required",
		"date_start" => "required",
		"date_end" => "required",
		"status" => "required"
	];

}
