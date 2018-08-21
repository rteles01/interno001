<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        $from = "financeiros";
//        $to   = "receitas";
//        Schema::rename($from, $to);
        Schema::create('financeiros', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name');
            $table->char('descricao');
            $table->integer('status');
            $table->integer('nivel');
            //nome despesa
            //descrição despesa
            //status despesa
            // nivel despesa

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financeiros');
    }
}
