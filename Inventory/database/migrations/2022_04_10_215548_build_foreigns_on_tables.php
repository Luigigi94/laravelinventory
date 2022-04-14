<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuildForeignsOnTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->foreign('rolesId')
            ->references('rolesId')
            ->on('Roles')
            ->onDelete('cascade');
        });
        Schema::table('Sales', function (Blueprint $table){
           $table->foreign('userId')
           ->references('id')
           ->on('Users')
           ->onDelete('cascade');
        });
        Schema::table('Sales', function (Blueprint $table){
           $table->foreign('stateId')
           ->references('stateId')
           ->on('States')
           ->onDelete('cascade');
        });
        Schema::table('Sales', function (Blueprint $table){
           $table->foreign('productId')
           ->references('productId')
           ->on('Products')
           ->onDelete('cascade');
        });
        Schema::table('Tickets', function (Blueprint $table){
            $table->foreign('salesId')
                ->references('salesId')
                ->on('Sales')
                ->onDelete('cascade');
        });
        Schema::table('Pays', function (Blueprint $table){
            $table->foreign('salesId')
                ->references('salesId')
                ->on('Sales')
                ->onDelete('cascade');
        });
        Schema::table('Pays', function (Blueprint $table){
            $table->foreign('layawayId')
                ->references('layawayId')
                ->on('Layaways')
                ->onDelete('cascade');
        });
        Schema::table('Products', function (Blueprint $table){
            $table->foreign('assignmentId')
                ->references('assignmentId')
                ->on('Assignments')
                ->onDelete('cascade');
        });
        Schema::table('Assignments', function (Blueprint $table){
            $table->foreign('categoryId')
                ->references('categoryId')
                ->on('Categories')
                ->onDelete('cascade');
        });
        Schema::table('Assignments', function (Blueprint $table){
            $table->foreign('subcategoryId')
                ->references('subcategoryId')
                ->on('Subcategories')
                ->onDelete('cascade');
        });
        Schema::table('image_products', function (Blueprint $table){
            $table->foreign('productId')
                ->references('productId')
                ->on('Products')
                ->onDelete('cascade');
        });
        Schema::table('Orders', function (Blueprint $table){
            $table->foreign('productId')
                ->references('productId')
                ->on('Products')
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
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign(['rolesId']);
        });
        Schema::table('sales', function (Blueprint $table){
            $table->dropForeign(['userId']);
        });
        Schema::table('sales', function (Blueprint $table){
            $table->dropForeign(['stateId']);
        });
        Schema::table('sales', function (Blueprint $table){
            $table->dropForeign(['productId']);
        });
        Schema::table('tickets', function (Blueprint $table){
            $table->dropForeign(['salesId']);
        });
        Schema::table('pays', function (Blueprint $table){
            $table->dropForeign(['salesId']);
        });
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign(['assignmentId']);
        });
        Schema::table('assignments', function (Blueprint $table){
            $table->dropForeign(['categoryId']);
        });
        Schema::table('assignments', function (Blueprint $table){
            $table->dropForeign(['subcategoryId']);
        });
        Schema::table('image_products', function (Blueprint $table){
            $table->dropForeign(['productId']);
        });
        Schema::table('orders', function (Blueprint $table){
            $table->dropForeign(['productId']);
        });
    }
}
