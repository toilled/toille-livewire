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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('title');
        });

        DB::table('pages')->insert([
            'id' => 1,
            'name' => 'Home',
            'title' => 'Home',
        ]);

        DB::table('pages')->insert([
            'id' => 2,
            'name' => 'About',
            'title' => 'About Me',
        ]);

        DB::table('pages')->insert([
            'id' => 3,
            'name' => 'Interests',
            'title' => 'My Interests',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
