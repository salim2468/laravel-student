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


    // mutator i.e. before storing in a tabel fullName 'harry kc' is transformed to 'Harry Kc'
    public function setFullNameAttribute($value){
        $this->attributes['fullName'] = ucwords($value);
    }
    // mutator
    public function setAddressAttribute($value){
        $this->attributes['address'] = ucwords($value);
    }


    // relationship
    public function gradeModels(){
        return $this->hasMany(Grade::class);
    }

}
