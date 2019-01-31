<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_admins', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('admin_code', 15 ) -> unique();
            $table -> string('school_code', 15 ) -> unsigned();
            $table -> string('department', 30 );
            $table -> string('position', 30 );
            $table -> string('phone', 15 );
            $table -> string('mobile', 15 );
            $table -> string('email', 50 ) -> unique();
            $table -> string('password', 200 );
            $table -> timestamp( 'email_verified_at' );
            $table -> string( 'remember_token', 250 );
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_admins');
    }
}
