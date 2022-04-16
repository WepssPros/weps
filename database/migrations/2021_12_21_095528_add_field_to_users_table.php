<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('roles')->after('email')->default('USER');
            $table->string('phone')->after('email')->nullable();
            $table->string('username')->after('email')->nullable();
            $table->string('address')->after('email')->nullable();
            $table->date('tgl_lahir')->after('email')->nullable();
            $table->string('age')->after('email')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles');
            $table->dropColumn('phone');
            $table->dropColumn('username');
            $table->dropColumn('address');
            $table->dropColumn('tgl_lahir');
            $table->dropColumn('age');

        });
    }
}
