<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesteCrudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teste_crud', function (Blueprint $table) {

            $table->uuid('id');

            $table->timestamps();

            $table->string('name')
            ->nullable();

            $table->string('telephone')
            ->nullable();

            $table->string('email')
            ->nullable();

            $table->string('gender')
            ->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teste_crud');
    }
}
