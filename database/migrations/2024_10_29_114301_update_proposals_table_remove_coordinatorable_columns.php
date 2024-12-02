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
        Schema::table('proposals', function (Blueprint $table) {
            // Remove polymorphic columns
            // $table->dropColumn(['coordinatorable_id', 'coordinatorable_type']);
            // $table->dropForeign('coordinator');
            // $table->dropColumn('coordinator');

            // Add foreign key for coordinator
            // $table->foreignId('coordinator')->nullable()->constrained('partners')->onDelete('cascade');
            $table->foreignId('coordinator_id')->nullable()->constrained('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proposals', function (Blueprint $table) {
            // Re-add polymorphic columns
            $table->unsignedBigInteger('coordinatorable_id')->nullable();
            $table->string('coordinatorable_type')->nullable();

            // Drop the foreign key
            $table->dropForeign(['coordinator']);
        });
    }
};
