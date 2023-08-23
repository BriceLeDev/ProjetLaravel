<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\ProfileMdel;

class FormModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'prenom'
    ];

   public function monprofile(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
       return $this->belongsTo(\App\Models\ProfileMdel::class);
   }
}
