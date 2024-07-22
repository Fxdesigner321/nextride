<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ride_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('user_id');
            $table->json('trip_data');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_histories');
    }
};
