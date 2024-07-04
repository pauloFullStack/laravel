<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->uuid('id')
                ->primary('id', 'employees_id_primary');

            $table->string('name', 200);

            $table->string('telephone', 200);

            $table->string('email', 200)
                ->nullable();

            $table->string('street', 200);

            $table->string('number', 10);
            
            $table->string('district', 200);
            
            $table->string('city', 200);

            $table->string('cpf', 11);

            $table->string('bill', 50);
            
            $table->string('agency', 50);
            
            $table->string('operation', 50);

            $table->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

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
        Schema::dropIfExists('employees');
    }
}
