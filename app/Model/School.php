<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function SchoolAdmins()
    {
        return $this -> hasMany( SchoolAdmin::class );
    }

    public function SchoolAccounts()
    {
        return $this -> hasMany( SchoolAccount::class );
    }

    public function Students()
    {
        return $this -> hasMany( Student::class );
    }
}
