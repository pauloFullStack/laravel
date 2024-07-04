<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCreateRolesEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table->string('state')
                ->after('city');

            $table->unsignedBigInteger('employee_roles_id')
                ->after('state');

            $table->foreign('employee_roles_id', 'employee_roles_id_fk')
                ->references('id')
                ->on('employee_roles');
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
