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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('vehicle_id');
            $table->string('start_location', 100);
            $table->string('end_location',100);
            $table->timestamp('start_time')->nullable();  /*start_time*/
            $table->timestamp('end_time')->nullable();   /*end_time*/
            $table->float('distance',100);
            $table->decimal('fare',10,2);
            $table->boolean('status');
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
        Schema::dropIfExists('rides');
    }
};
