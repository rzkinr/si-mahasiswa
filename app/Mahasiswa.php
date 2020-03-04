<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    protected $table = "table_mahasiswa";
    protected $fillable = [
    	'name', 'nim', 'address', 'foto'
    ];
    use SoftDeletes;
}
