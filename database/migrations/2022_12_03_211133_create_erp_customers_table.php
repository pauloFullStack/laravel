<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateErpCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_customers', function (Blueprint $table) {

            $table->uuid('id')
                ->primary('id', 'ec_id_primary');

            $table->string('name', 200);

            $table->string('telephone', 200);

            $table->string('email', 200)
                ->nullable();

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
        Schema::dropIfExists('erp_customers');
    }
}
