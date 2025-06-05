<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function issues()
    {
        return $this->hasMany(Issue::class); // defines that the member can have many issues.
    }
}
