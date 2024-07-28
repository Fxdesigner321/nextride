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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('cnic_back_side',225);
            $table->string('cnic_front_side',225);
            $table->string('photo',225)->nullable();
            $table->string('driving_license',225);
            $table->string('vehicle_registration',225);
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('phonenumber');
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
        Schema::dropIfExists('drivers');
    }
};
