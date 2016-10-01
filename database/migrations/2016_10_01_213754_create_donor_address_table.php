<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donor_id')->index();
            $table->string('type');
            $table->string('email');
            $table->string('email2');
            $table->string('name');
            $table->string('department');
            $table->string('position');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->string('logo');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('fax');
            $table->string('mobile');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('skype');
            $table->string('web_site');
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
}
