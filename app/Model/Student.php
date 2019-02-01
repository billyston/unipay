<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function School()
    {
        return $this -> belongsTo( School::class );
    }

    public function Transactions()
    {
        return $this -> hasMany( Transaction::class );
    }

    public function Issues()
    {
        return $this -> hasMany( Issues::class );
    }
}
