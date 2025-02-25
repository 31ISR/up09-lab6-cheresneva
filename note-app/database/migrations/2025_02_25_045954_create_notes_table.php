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
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->longText('note');

        $table->foreignId('user_id')->constrained('users');
        $table->timestamps();
    });

    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('name', length: 100);
        $table->boolean('done');
        $table->boolean('urgent');
        $table->timestamps();
    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
        
        Schema::dropIfExists('tasks');
    }
};
