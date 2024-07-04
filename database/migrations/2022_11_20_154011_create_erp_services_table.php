<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_services', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name_service', 200);

            $table->double('valor_service');

            $table->text('note_service')
                  ->nullable();

            $table->timestamp('created_at')
                ->default(DB:: raw('CURRENT_TIMESTAMP')); 

            $table->timestamp('updated_at')
                ->default(DB:: raw('CURRENT_TIMESTAMP'));

            $table->timestamp('deleted_at')
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
        Schema::dropIfExists('erp_services');
    }
}
