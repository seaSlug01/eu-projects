<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEuPostEuCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('eu_post_eu_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eu_post_id')->constrained('eu_posts')->onDelete('cascade');
            $table->foreignId('eu_category_id')->constrained('eu_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eu_post_eu_category');
    }
}