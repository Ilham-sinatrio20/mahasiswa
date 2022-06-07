<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class Mahasiswa_Matakuliah extends Model
{
    use HasFactory;
    protected $table = "mahasiswa_matakuliah";
    protected $with = ['mahasiswa', 'matakuliah'];
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
        return $this->belongsTo(Matakuliah::class, 'id');
    }
    use HasFactory;
}
