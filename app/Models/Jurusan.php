<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = [];
    protected $table = 'jurusans';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
