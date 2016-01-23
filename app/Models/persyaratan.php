<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class persyaratan extends Model {

    
    protected $table = 'tbl_persyaratan';
    protected $primaryKey = 'id_persyaratan';
    protected $fillable = array('id_mahasiswa', 'id_jurusan', 'absen', 'tanggal', 'bulan', 'tahun');
    public $timestamps = false;

    public function jurusan() {
        return $this->belongsTo('App\Models\Jurusan', 'id_jurusan');
    }

    public function mahasiswa() {
        return $this->belongsTo('App\Models\Mahasiswa', 'id_mahasiswa');
    }

}
