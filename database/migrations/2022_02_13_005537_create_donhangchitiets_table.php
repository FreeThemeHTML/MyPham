<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhangchitiets', function (Blueprint $table) {
            $table->increments('id');
            #đơn hàng
            $table->unsignedInteger('donhang_id');
            $table->foreign('donhang_id')->references('id')->on('donhangs');
            #sản phẩm
            $table->unsignedInteger('sanpham_id');
            $table->foreign('sanpham_id')->references('id')->on('sanphams');

            $table->integer('price');
            $table->integer('quantity');            
            $table->integer('total');            
            // $table->string('status');
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
        Schema::dropIfExists('donhangchitiets');
    }
};
