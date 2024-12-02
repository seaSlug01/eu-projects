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
            // Remove the polymorphic columns
            $table->dropColumn(['coordinatorable_id', 'coordinatorable_type']);
            
            // Rename the 'coordinator' column to 'coordinator_id'
            $table->renameColumn('coordinator', 'coordinator_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
