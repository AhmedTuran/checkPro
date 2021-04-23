<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\check;
class employee extends Model  {

    use HasFactory;
   protected $fillable = [
       'id','full_name','salary','password','isAdmin',
   ];
   
    public function chicks()
    {
    return $this->hasMany(chick::class,'employee_id');
    }
}
