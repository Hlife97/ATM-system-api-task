<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('denominations', function (Blueprint $table) {
            $table->id();
            $table->integer('value')->nullable();
            $table->timestamps();
        });

        DB::table('denominations')->insert([
            ['value' => 200],
            ['value' => 100],
            ['value' => 50],
            ['value' => 20],
            ['value' => 10],
            ['value' => 5],
            ['value' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denominations');
    }
};
