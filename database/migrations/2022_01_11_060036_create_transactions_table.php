<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');


            $table->text('name_acara')->nullable();
            $table->date('tgl_acara')->nullable();
            $table->text('address')->nullable();

            $table->bigInteger('deposito')->default(0);
            $table->bigInteger('total_price')->default(0);
            $table->bigInteger('shipping_price')->default(0);

            $table->string('status')->default('PENDING');

            $table->string('payment')->default('MANUAL');

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
        Schema::dropIfExists('transactions');
    }
}
