<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enforcer extends Model
{
	public $timestamps = false;
	protected $table = 'tblEnforcer';
	protected $primaryKey = 'intEnforcerID';
}
