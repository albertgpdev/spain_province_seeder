<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->unsignedInteger('province_id')->foreign('province_id')->references('id')->on('provinces');
            $table->double('latitude')->deafult(0.0);
            $table->double('longitude')->deafult(0.0);
            $table->timestamps();
        });
    

        if (Schema::hasTable('states')) {
            Schema::table('states', function (Blueprint $table) {
                $table->unsignedInteger('capital_city_id')->foreign('capital_city_id')->nullable()->references('id')->on('cities')->onDelete('cascade');
            });
        };
        if (Schema::hasTable('provinces')) {
            Schema::table('provinces', function (Blueprint $table) {
                $table->unsignedInteger('capital_city_id')->foreign('capital_city_id')->references('id')->on('cities');
            });
        };

        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
