<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raket extends Model
{
    protected $table = 'raket';
	public $timestamps = false;
	protected $primaryKey = 'ID';
	protected $fillable = [
		'NAME', 'CATEGORY', 'WEIGHT', 'GRIP', 'MAX_TENSION', 'PRICE'
	]
}
