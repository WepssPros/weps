<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonvendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calonvendors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');

            $table->string('name_vendor');
            $table->string('provinsi_vendor');
            $table->string('kota_vendor');
            $table->string('alamat_vendor')->nullable();
            $table->string('umur_vendor')->nullable();
            $table->string('total_acara')->nullable();
            $table->string('kategori_vendor')->nullable();
            $table->string('status')->default('PENDING');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calonvendors');
    }
}
