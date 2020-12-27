<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
	use HasFactory;

	protected $table = 'penyewa';
	protected $fillable = ['id','username','jam_sewa','alamat','id_lapangan','nohp'];
	public $timestamps = false;

}
