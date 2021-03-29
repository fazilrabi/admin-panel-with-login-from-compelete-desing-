<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ps');
            $table->string('name_fa');
            $table->string('title_en');
            $table->string('title_ps');
            $table->string('title_fa');
            $table->text('bio_en');
            $table->text('bio_ps');
            $table->text('bio_fa');
            $table->string('image');
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
        Schema::dropIfExists('advisors');
    }
}
