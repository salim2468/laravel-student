<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['fullName', 'dob', 'address'];

    public function gradeModels(){
        return $this->hasMany(Grade::class);
    }


}
