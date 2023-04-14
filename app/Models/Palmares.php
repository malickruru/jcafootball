<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palmares extends Model
{
    use HasFactory;
    
    public $table = 'Palmares';

    public function palmaresPerCup($cup){
        return $this->where('coupe','=',$cup)->get() ;
    }
}
