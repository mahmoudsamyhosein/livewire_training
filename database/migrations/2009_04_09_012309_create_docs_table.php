<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('introd')->nullable();
            $table->string('link_introd')->nullable();
            $table->string('link')->unique()->nullable();
            $table->string('link_subject')->unique()->nullable();
            $table->string('copy_right')->nullable();
            $table->string('copy_right_link')->unique()->nullable();
            $table->string('image_cover')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('doc_name')->nullable();
            $table->string('doc_title')->nullable();
            $table->string('doc_color')->nullable();
            $table->string('pre')->nullable();
            $table->string('doc_subject')->nullable();
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
        Schema::dropIfExists('docs');
    }
}
