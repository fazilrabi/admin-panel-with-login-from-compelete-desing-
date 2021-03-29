<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_ps');
            $table->string('title_fa');
            $table->text('subtitle_en');
            $table->text('subtitle_ps');
            $table->text('subtitle_fa');
            $table->string('button_en')->nullable();
            $table->string('button_ps')->nullable();
            $table->string('button_fa')->nullable();
            $table->string('image');
            $table->text('link')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
