<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
    use HasFactory;

    // Daftar kolom yang bisa diisi mass-assignment
    protected $fillable = ['nama'];
}
