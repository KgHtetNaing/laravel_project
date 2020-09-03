<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->longText('photo');
            $table->string('nature');
            $table->foreignId('hotelid')->references('id')->on('hotels')
            ->onDelete('cascade');
             $table->foreignId('restaurantid')->references('id')->on('restaurants')
            ->onDelete('cascade');
             $table->foreignId('transportationid')->references('id')->on('transportations')
            ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('locations');
    }
}
