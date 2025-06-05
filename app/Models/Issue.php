<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class); // Defines that an issue can belong to a specific book.
    }

    public function member()
    {
        return $this->belongsTo(Member::class); // Defines that an issue can belong to a specific member.
    }

}
