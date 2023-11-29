<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Position extends Model
{
    use HasFactory;


    protected $table = 'tbl_positions';

    public function user(){
        return $this->hasMany(Users::class, "position_id");
    }
}
