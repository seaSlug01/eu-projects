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
            $table->foreignId('coordinator')
            ->nullable()
            ->constrained('partners')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Remove the new coordinator column
            $table->dropForeign(['coordinator']);
            $table->dropColumn('coordinator');
            
            // Re-add the old columns
            $table->unsignedBigInteger('coordinatorable_id');
            $table->string('coordinatorable_type');
        });
    }
};
