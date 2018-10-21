<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTicketPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_ticket_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('Category_label')->nullable();
            $table->string('Sub_Category_label')->nullable();
            $table->string('Subject_Label')->nullable();
            $table->string('Description_Label')->nullable();
            $table->string('Sidebar_Title')->nullable();
            $table->string('Submit_button')->nullable();
            $table->string('Sidebar_Tips1')->nullable();
            $table->string('Sidebar_Tips1_details')->nullable();
            $table->string('Sidebar_Tips2')->nullable();
            $table->string('Sidebar_Tips2_details')->nullable();
            $table->string('Sidebar_Tips3')->nullable();
            $table->string('Sidebar_Tips3_details')->nullable();
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
        Schema::dropIfExists('new_ticket_pages');
    }
}
