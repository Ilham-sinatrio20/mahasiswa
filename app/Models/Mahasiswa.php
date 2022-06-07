<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa_Matakuliah;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    public $timestamps = false;
    protected $primaryKey = 'nim';
    protected $fillable = [
        'id',
        'nim',
        'email',
        'nama',
        'images',
        'tgl_lahir',
        'jurusan',
        'no_hp',
        'kelas_id',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mahasiswa_matakuliah(){
        return $this->hasMany(Mahasiswa_Matakuliah::class);
    }

    use HasFactory;
}
