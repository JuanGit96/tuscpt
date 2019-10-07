<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function ($table) {

            $table->string('city');
            $table->string('neighborhood');
            $table->string('hora_entrega');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::table('orders', function ($table) {

            $table->dropColumn('city');
            $table->dropColumn('neighborhood');
            $table->dropColumn('hora_entrega');

        });
    }
}
