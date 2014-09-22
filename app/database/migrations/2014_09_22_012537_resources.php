<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resources extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resources', function ($table) {
	      $table->create();          // 生成表对象
	 
	      // 创建各个字段
	      $table->increments('id');  // id     自增
	      $table->string('name'); //资源名称
	      $table->text('desc');
	      $table->string('type');
	      $table->string('address');
	      $table->string('uploader');
	      $table->string('datetime');
	      $table->timestamps();      // created_at && updated_at
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
		Schema::drop('res');
	}

}
