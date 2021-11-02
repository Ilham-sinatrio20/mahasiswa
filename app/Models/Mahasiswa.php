<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    public $timestamps = false;
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'email',
        'nama',
        'tgl_lahir',
        'jurusan',
        'no_hp',
        'kelas_id',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    use HasFactory;
}
