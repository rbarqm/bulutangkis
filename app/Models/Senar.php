<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Senar extends Model
{
    protected $table = 'senar';
	public $timestamps = false;
	protected $primaryKey = 'ID';
	protected $fillable = [
		'STRING_NAME', 'STRING_CATEGORY', 'STRING_FEELING', 'STRING_DIAMETER', 'POINT_REPULSION_POWER', 'POINT_DURABILITY', 'POINT_HITTING_SOUND', 'POINT_SHOCK_ABSORPTION', 'POINT_CONTROL', 'AVERAGE_PRICE'
	];
}
