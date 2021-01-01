<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('uuid');
            $table->string('featured_image')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->double('regular_price')->nullable();
            $table->double('sale_price')->nullable();
            $table->json('images')->nullable();
            $table->json('extra')->nullable();
            $table->json('offers')->nullable();
            $table->string('coupon')->nullable();
            $table->string('type')->default('product');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->string('link')->nullable();
            $table->softDeletes();
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
