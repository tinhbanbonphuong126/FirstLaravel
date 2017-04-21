<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat1_2_id');
            $table->string('title'); // title
            $table->date('content_date'); //date
            $table->text('text')->comment('WYSIWYG Editer')->nullable(); // content
            $table->text('text2')->nullable();
            $table->string('img'); //thumbnail image
            $table->boolean('public_flag')->comment('0: false 1:true');
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
        Schema::dropIfExists('contents');
    }
}
