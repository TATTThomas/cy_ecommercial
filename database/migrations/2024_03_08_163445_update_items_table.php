<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('items',function ($table){
            $table->string('item_id')->change();
            $table->renameColumn('avaliable','available');
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
        Schema::table('items',function ($table){
            $table->integer('item_id')->change();
            $table->renameColumn('available','avaliable');
        });
    }
}
