<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_homes', function (Blueprint $table) {
            $table->id();
            $table->string('titreContact');
            $table->string('textContact');
            $table->string('sousTitreContact');
            $table->string('rueContact');
            $table->string('codePostalContact');
            $table->string('telContact');
            $table->string('emailContact');
            $table->string('btnContact');
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
        Schema::dropIfExists('contact_homes');
    }
}
