<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model  {

    use HasFactory;
   protected $fillable = [
       'full_name','salary','password','isAdmin',
   ];
   
    public function chicks()
    {
    return $this->hasMany(chick::class,'employee_id','id');
    }
}
