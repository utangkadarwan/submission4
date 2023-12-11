<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpustakaan extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','jurusan'];
    protected $table = 'perpustakaan';
    public $timestamps = false;
}
