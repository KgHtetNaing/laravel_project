<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreatePackagedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packagedetails', function (Blueprint $table) {
            $table->id();
             $table->foreignId('packageid')->references('id')->on('packages')
            ->onDelete('cascade');
             $table->foreignId('locationid')->references('id')->on('locations')
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
        Schema::dropIfExists('packagedetails');
    }
}
