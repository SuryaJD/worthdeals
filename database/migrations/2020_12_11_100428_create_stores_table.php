<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('support_page')->nullable();
            $table->text('description')->nullable();
            $table->json('extra')->nullable();
            $table->string('icon')->nullable();
            $table->string('website')->unique();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('stores');
    }
}
