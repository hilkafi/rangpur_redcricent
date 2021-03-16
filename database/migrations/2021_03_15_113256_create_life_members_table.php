<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLifeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('life_members', function (Blueprint $table) {
            $table->id();
            $table->char('name', 100);
            $table->char('occupation', 100)->nullable();
            $table->boolean('is_executive')->nullable();
            $table->char('role', 100)->nullable();
            $table->char('img', 255)->nullable();
            $table->char('phone', 100)->nullable();
            $table->text('address')->nullabe();
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
        Schema::dropIfExists('life_members');
    }
}
