<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'isbn', 'category', 'copies'];

    public function issues()
    {
        return $this->hasMany(Issue::class); // Defines that a book can have many issues.
    }   
}
