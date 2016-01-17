<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model {
    protected $table = 'alumni';
    protected $primaryKey = 'id';
    protected $fillable = array('nama_alumni', 'ttl', 'alamat', 'tahun_lulus', 'email', 'nohp', 'pekerjaan');
}