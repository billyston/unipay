<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SchoolAdmin extends Model
{
    public function School()
    {
        return $this -> belongsTo( School::class );
    }
}
