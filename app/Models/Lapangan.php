<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
	protected $table = 'lapangan';
	protected $fillable = ['id','nama_lapangan','status','harga'];
	public $timestamps = false;

}
