<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCEOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_e_o_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name');
            $table->year('year');
            $table->string('company_headquarters');
            $table->string('what_company_does');
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
        Schema::dropIfExists('c_e_o_s');
    }
}
