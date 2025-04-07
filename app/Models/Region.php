<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    protected $primaryKey = 'region_id';

    public function countries()
    {
        return $this->hasMany(Country::class, 'region_id');
    }
}
