<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;

    public $table = 'Match';

    public function opponent(){
        return $this->belongsTo(Equipe::class,'id_adversaire','id');
    }
}
