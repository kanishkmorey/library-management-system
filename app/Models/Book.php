<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function issues()
    {
        return $this->hasMany(Issue::class); // Defines that a book can have many issues.
    }   
}
