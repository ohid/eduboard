<?php

namespace Eduboard;

use Eduboard\Board;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $fillable = [
		'roll',
		'name',
		'board',
		'fathers_name',
		'sub_group',
		'mothers_name',
		'type',
		'birth',
		'result',
		'year',
		'institute',
		'gpa',
		'examination',
		'bangla',
		'english',
		'math',
		'science',
		'religion',
		'int_to_busi',
		'accounting',
		'business_entre',
		'agriculture'
	];

    public function getGpaAttribute() 
	{	
		$all_sub_point = 
			$this->bangla + 
			$this->english + 
			$this->math + 
			$this->science + 
			$this->religion + 
			$this->int_to_busi + 
			$this->accouting + 
			$this->business_entre + 
			$this->agriculture -
			2;

		$gpa = $all_sub_point / 8;

		return $gpa;
	}

	// public function examinations() 
	// {
	// 	$this->bolongsTo(Examination::class);
	// }

	// public function boards() 
	// {
	// 	$this->bolongsTo(Board::class);
	// }
	// public function years() 
	// {
	// 	$this->bolongsTo(Year::class);
	// }

}
