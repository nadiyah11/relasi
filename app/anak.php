<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    //
    protected $table = 'anaks';
    protected $fillable = ['nama','ortu_id','umur','alamat'];
    protected $visible = ['nama','ortu_id','umur','alamat'];
    public $timestamps = true;

    public function orangtua()
    {
    	return $this->belongsTo('App\orang_tua','ortu_id');
    }
}
