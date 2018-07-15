<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    protected $table = 'tugas';
    protected $fillable = ['judul','deskripsi'];
}
