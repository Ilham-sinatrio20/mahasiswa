<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matakuliah extends Model
{
    protected $table = "mahasiswa_matakuliah";
    public $timestamps = false;
    protected $primaryKey = 'id_nilai';
    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_id',
        'nilai',
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class);
    }
    use HasFactory;
}
