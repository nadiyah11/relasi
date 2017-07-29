<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orang_tua extends Model
{
    //
    protected $table = 'orang_tuas';
    protected $fillable = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = true;

    public function anak()
    {
    	return $this->hasMany('App\anak','ortu_id');
    }
}
