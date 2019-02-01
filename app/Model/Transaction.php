<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function Student()
    {
        return $this -> belongsTo( Student::class );
    }

    public function TransactionLogs()
    {
        return $this -> hasMany( TransactionLog::class );
    }

    public function Issues()
    {
        return $this -> hasMany( Issues::class );
    }
}
