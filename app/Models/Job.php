<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $primaryKey = 'job_id';

    public function employees()
    {
        return $this->hasMany(Employee::class, 'job_id');
    }
}
