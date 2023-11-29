<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Department extends Model
{
    use HasFactory;

    protected $table = 'tbl_departments';

    public function user(){
        return $this->hasMany(Users::class, "department_id");
    }
    


}
