<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddWorkStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('erp_customers_services', function (Blueprint $table) {

            $table->unsignedBigInteger('work_status')
                ->nullable()
                ->after('responsible_collaborator');

            $table->foreign('work_status', 'work_status_id_fk')
                ->references('id')
                ->on('status_service');
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
