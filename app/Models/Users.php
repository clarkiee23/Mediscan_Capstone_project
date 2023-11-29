<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;





class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'id_number',
        'first_name', 
        'middle_name',
        'last_name',
        'suffix', 
        'sex_id', 
        'birthdate', 
        'position_id', 
        'yearlevel_id',
        'department_id', 
        'username', 
        'password',
    ];


    public function department(){
        return $this->belongsTo(Department::class, "department_id");
    }
    public function position(){
        return $this->belongsTo(Position::class, "position_id");
    }
    public function sex(){
        return $this->belongsTo(Sex::class, "sex_id");
    }
    public function transaction(){
        return $this->hasMany(Transaction::class, "id_number");
    }
    public function yearlevel(){
        return $this->belongsTo(Yearlevel::class, "yearlevel_id");
    }
   
}
