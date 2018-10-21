<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('tickets', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('feedback', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('feedback', function (Blueprint $table) {
            
            $table->foreign('article_id')
            ->references('id')
            ->on('tickets')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('menu_items', function (Blueprint $table) {
            
            $table->foreign('menu_id')
            ->references('id')
            ->on('menus')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('first_replies', function (Blueprint $table) {
            
            $table->foreign('ticket_id')
            ->references('id')
            ->on('tickets')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('assign_users_to_tickets', function (Blueprint $table) {
            
            $table->foreign('ticket_id')
            ->references('id')
            ->on('tickets')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('assign_users_to_tickets', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('replies', function (Blueprint $table) {
            
            $table->foreign('ticket_id')
            ->references('id')
            ->on('tickets')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('replies', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('parent_child_categories', function (Blueprint $table) {
            
            $table->foreign('parent_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        
        Schema::table('parent_child_categories', function (Blueprint $table) {
            
            $table->foreign('child_id')
            ->references('id')
            ->on('child_categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('permissions', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('permissions', function (Blueprint $table) {
            
            $table->foreign('permission_id')
            ->references('id')
            ->on('all_permissions')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('roles', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('assign_users_groups', function (Blueprint $table) {
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('assign_users_groups', function (Blueprint $table) {
            
            $table->foreign('group_id')
            ->references('id')
            ->on('groups')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('groups_permissions', function (Blueprint $table) {
            
            $table->foreign('group_id')
            ->references('id')
            ->on('groups')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('groups_permissions', function (Blueprint $table) {
            
            $table->foreign('permission_id')
            ->references('id')
            ->on('all_permissions')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
    }
}
