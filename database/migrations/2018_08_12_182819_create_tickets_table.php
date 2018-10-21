<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('language')->default('english');
            $table->longtext('details');
            $table->integer('category_id')->unsigned();
            $table->string('sub_category_name');
            $table->enum('status',array('Open','Closed','Pending','Spam'))->default('Open');
            $table->string('added_categories')->nullable();
            $table->string('added_tags')->nullable();
            $table->enum('publish_state',array('published','draft'))->default('published');
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
        Schema::dropIfExists('tickets');
    }
}
