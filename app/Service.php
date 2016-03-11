<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $table      = "servicio";
	protected $primaryKey = "ser_id";
	public $timestamps    = false;
	protected $fillable   = ['ser_id','ser_categoria','ser_subcategoria'];

}
