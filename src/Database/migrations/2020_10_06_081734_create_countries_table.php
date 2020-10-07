<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('province_id')->index();
            $table->string('name', 64);
            $table->string('en_name', 64);
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->boolean('approved')->default(true);
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
