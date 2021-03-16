<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->char('name', 100);
            $table->char('occupation', 100)->nullable();
            $table->enum('unit_type', ['zila', 'upzila', 'city_corporation'])->nullable();
            $table->char('volunteer_type', 100)->nullable();
            $table->char('role', 100)->nullable();
            $table->char('img', 255)->nullable();
            $table->char('phone', 100)->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
