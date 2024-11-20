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
        DB::table('proposal_partner')
        ->whereNull('order')
        ->update(['order' => 0]);
        Schema::table('proposal_partner', function (Blueprint $table) {
            $table->integer('order')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proposal_partner', function (Blueprint $table) {
            //
        });
    }
};
