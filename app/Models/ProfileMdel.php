<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileMdel extends Model
{
    use HasFactory;

    protected $fillable=['profile'];

    public function utili(){
        return $this->hasMany(FormModel::class);
    }
}


