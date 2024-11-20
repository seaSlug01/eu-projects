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
        Schema::table('posts', function (Blueprint $table) {
            $table->date('duration')->nullable();
            $table->decimal('budget', 15, 2)->nullable();
            $table->string('website')->nullable();
            $table->string('code')->nullable();
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['duration', 'budget', 'website', 'program_code']);
        });
    }
};
