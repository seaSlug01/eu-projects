<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->timestamp('submission_date')->useCurrent();;
            $table->unsignedBigInteger('coordinatorable_id');
            $table->string('coordinatorable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('submission_date');
            $table->dropColumn('coordinatorable_id');
            $table->dropColumn('coordinatorable_type');
        });
    }
};
