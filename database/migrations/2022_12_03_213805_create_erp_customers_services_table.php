<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpCustomersServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_customers_services', function (Blueprint $table) {

            $table->uuid('id')
                ->primary('id', 'ecs_id_primary');

            $table->unsignedBigInteger('services_id');

            $table->uuid('customers_id');

            $table->double('valor_service');

            $table->string('status_service');

            $table->string('payment_status');

            $table->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('deleted_at')
                ->nullable();



            /*|------------------|
              | Relacionamentos  |
              |------------------|  
            */


            $table->foreign('services_id', 'erp_services_id_fk')
                ->references('id')
                ->on('erp_services');

            $table->foreign('customers_id', 'erp_customers_id_fk')
                ->references('id')
                ->on('erp_customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('erp_customers_services');
    }
}
