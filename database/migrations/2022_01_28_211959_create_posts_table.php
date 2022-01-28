<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('subtitle')->nullable(true);
            $table->longtext('content')->nullable(false);
            $table->string('coverImg')->nullable(true);
            $table->string('category')->nullable(true);

            $table->unsignedBigInteger('author_id')
                ->foreignId('author_id')
                ->references('id')
                ->on('users');

            
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
        Schema::dropIfExists('posts');
    }
}
