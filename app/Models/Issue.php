<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['book_id', 'member_id', 'issued_at', 'returned_at'];

    public function book()
    {
        return $this->belongsTo(Book::class); // Defines that an issue can belong to a specific book.
    }

    public function member()
    {
        return $this->belongsTo(Member::class); // Defines that an issue can belong to a specific member.
    }

}
