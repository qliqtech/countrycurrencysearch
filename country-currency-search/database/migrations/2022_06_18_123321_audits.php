<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //  ['guid','request_url','response_body','created_by'];

        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->string('guid',50)->nullable();
            $table->text('request_url')->nullable();
            $table->text('response_body')->nullable();
            $table->integer('created_by')->nullable();




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
        //
    }
};
