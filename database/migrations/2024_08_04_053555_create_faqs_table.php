<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id')->nullable(); 
            $table->string('question');
            $table->text('answer');
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faqs', function (Blueprint $table) {
        
            $table->dropForeign(['blog_id']);
        });

        Schema::dropIfExists('faqs');
    }
};
