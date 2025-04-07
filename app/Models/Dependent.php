<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dependent extends Model
{
    use HasFactory;

    protected $primaryKey = 'dependent_id';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
