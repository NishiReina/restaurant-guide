<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_requests', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('phone');
            $table->char('postcode', 7);
            $table->string('address');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->foreignId('area_id')->constrained();
            $table->foreignId('shop_important_id')->constrained();
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
        Schema::dropIfExists('change_requests');
    }
}
