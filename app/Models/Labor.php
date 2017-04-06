<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    
	public $table = "labors";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "company_name",
		"company_phone",
		"position",
		"work_area",
		"salary",
		"sector",
		"graduate_id"
	];

	public static $rules = [
	    "company_name" => "required",
		"company_phone" => "required",
		"position" => "required",
		"work_area" => "required",
		"salary" => "required",
		"sector" => "required"
	];

	public function graduate()
	{
		return $this->belongsTo('App\Models\Graduate');
	}

}
