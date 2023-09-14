<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    use HasFactory;
    protected $table = 'murid';
    protected $fillable = ['nis','nama','gender','religion',
    'ultah','kelas','alamat'];
}