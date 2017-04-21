<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->string('text4');
            $table->string('text5');
            $table->string('text6');
            $table->string('text7');
            $table->string('text8');
            $table->string('text9');
            $table->string('text10');
            $table->string('text11');
            $table->string('text12'); // Number of people planned to be adopted
            $table->string('text13');
            $table->string('text14');
            $table->string('text15');
            $table->boolean('public_flg');
            $table->integer('sortnum');
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
        Schema::dropIfExists('recruits');
    }

//    public function up()
//    {
//        Schema::create('recruits', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('industry');
//            $table->string('job_category');
//            $table->string('business_content');
//            $table->string('application_condition');
//            $table->string('work_place');
//            $table->string('employment_status');
//            $table->string('working_hours');
//            $table->string('salary_form');
//            $table->string('holiday_vacation');
//            $table->string('treatment_benefits');
//            $table->string('recruitment_period');
//            $table->integer('recruitment_num'); // Number of people planned to be adopted
//            $table->string('selection_process');
//            $table->string('other');
//            $table->string('application_method');
//            $table->boolean('public_flag');
//            $table->integer('display_no');
//            $table->timestamps();
//        });
//    }
}
