<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateErpCustomersServicesNameAlterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('erp_customers_services', function (Blueprint $table) {

            $table->foreign('status_service_id', 'erp_status_service_id_fk')
                ->references('id')
                ->on('status_service');

            $table->foreign('payment_status_id', 'erp_payment_status_id_fk')
                ->references('id')
                ->on('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
