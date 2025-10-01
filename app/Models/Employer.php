<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // Optional: define relationship to Job
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
