<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransactionLog extends Model
{
    public function Transaction()
    {
        return $this -> belongsTo( Transaction::class );
    }
}
