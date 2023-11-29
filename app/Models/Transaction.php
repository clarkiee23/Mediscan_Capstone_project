<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Transaction extends Model
{
    use HasFactory;

    protected $table = 'tbl_transactions';

    public function user(){
        return $this->belongsTo(Users::class, "id_number");
    }

}
