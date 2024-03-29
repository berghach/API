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
        Schema::create('table_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('table')->constrained('task_tables', 'id', 'table_id')->cascadeOnDelete();
            $table->foreignId('list')->constrained('task_lists', 'id', 'list_id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_lists');
    }
};
