<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // 変更申請が必要
            $table->string('phone');
            $table->char('postcode', 7);
            $table->string('address');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->foreignId('area_id')->constrained();
            $table->foreignId('gunre_id')->constrained();
            // 店舗側がいつでも修正可能
            $table->string('img_url');
            $table->string('title');
            $table->string('pr');
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
        Schema::dropIfExists('shops');
    }
}
