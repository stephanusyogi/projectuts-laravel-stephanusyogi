<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{

	use SoftDeletes;
	
    //define nama table 
    protected $table = "tbl_pelanggan";

    //define primary key

    //define fillable columns
    protected $fillable = [
    	"nama",
    	"alamat",
        "agama",
        "notelp"
    ];
}
