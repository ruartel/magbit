<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->index();
            $table->string('fname');
            $table->string('lname');
            $table->string('prefix');
            $table->string('hebrew_name');
            $table->bigInteger('org_id');
            $table->integer('salut_id');
            $table->string('salutation');
            $table->integer('main_cat_id');
            $table->integer('sec_cat_id');
            $table->integer('status_id');
            $table->integer('donor_status_id');
            $table->integer('source_id');
            $table->integer('main_solicitor_id');
            $table->integer('lang_id');
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
