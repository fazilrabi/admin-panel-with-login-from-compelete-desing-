<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('title_en');
            $table->text('title_ps');
            $table->text('title_fa');
            $table->text('excerpt_en');
            $table->text('excerpt_ps');
            $table->text('excerpt_fa');
            $table->longText('description_en');
            $table->longText('description_ps');
            $table->longText('description_fa');
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
        Schema::dropIfExists('blogs');
    }
}
