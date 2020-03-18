<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Camping extends Model
{

	use SoftDeletes;
	
    //define nama table 
    protected $table = "tbl_barang";

    //define primary key

    //define fillable columns
    protected $fillable = [
    	"nama_barang",
    	"merk_barang",
        "harga_barang"
    ];
}
