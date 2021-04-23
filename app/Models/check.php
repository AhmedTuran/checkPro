<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;
class check extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','entry','Leaving','employee_id'
    ];
    public function employee()
    {
    return $this->belongsTo(employee::class, 'employee_id');
    }
}
