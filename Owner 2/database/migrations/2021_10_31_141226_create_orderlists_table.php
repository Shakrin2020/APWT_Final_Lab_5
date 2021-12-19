<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderlists', function (Blueprint $table) {
            $table->increments('o_id');
            $table-> string ('o_name', 20);
            $table-> string ('o_type', 20);

            $table-> string ('o_description', 50);
            $table-> string('o_price', 50);
            $table-> integer ('o_ordered_by');

            $table-> dateTime ('o_time')->timestamp('created_at');
            $table-> dateTime ('o_updatetime')->timestamp('updated_at');
            
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderlists');
    }
}
