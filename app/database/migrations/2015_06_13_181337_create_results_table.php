<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::Create('results',function(Blueprint $table) {
            $table->increments("id") ;
            $table->string("regno");
            $table->string("c_code");
            $table->float("cat1");
            $table->float("cat2");
            $table->float("total1");
            $table->float("final");
            $table->float("total2");
            $table->string("grade");
            $table->float("gpa");
            $table->integer("student_id")->unsigned();
            $table->foreign("student_id")->refences('id')->on("students")->onDelete("cascade");
            $table->timestamp("created_at");
            $table->timestamp("updated_at");
        });
		//
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
