<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depi extends Model
{
    
	public $table = "depis";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_project",
		"line_investigation",
		"name_residence",
		"names_residents",
		"name_tesis",
		"names_tesis",
		"publications",
		"publications_number",
		"name_magazine",
		"type_publication",
		"name_article",
		"prototype",
		"patents",
		"validity_of",
		"valid_at",
		"others",
		"teacher_ids"
	];

	public static $rules = [
	    "name_project" => "required",
		"line_investigation" => "required",
		"name_residence" => "required",
		"names_residents" => "required",
		"name_tesis" => "required",
		"names_tesis" => "required",
		"publications" => "required",
		"publications_number" => "required",
		"name_magazine" => "required",
		"type_publication" => "required",
		"name_article" => "required",
		"prototype" => "required",
		"patents" => "required",
		"validity_of" => "required",
		"valid_at" => "required",
		"others" => "required"
	];

}
