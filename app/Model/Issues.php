<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    public function Transaction()
    {
        return $this -> belongsTo( Transaction::class );
    }

    public function Student()
    {
        return $this -> belongsTo( Student::class );
    }
}