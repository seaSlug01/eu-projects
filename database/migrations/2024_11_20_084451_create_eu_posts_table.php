<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('eu_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('starts_from');
            $table->date('ends_at');
            $table->json('partners'); // Store partners as a JSON array
            $table->string('website')->nullable();
            $table->string('authority');
            $table->string('program_managing_entity');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eu_posts');
    }
};
