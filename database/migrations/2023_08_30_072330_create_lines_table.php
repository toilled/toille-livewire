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
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('page_id')->unsigned();
            $table->string('value');
        });

        DB::table('lines')->insert([
            'page_id' => 1,
            'value' => 'This is my home page for testing ideas built using Solid JS. This will change a lot as I experiment with ideas I have.'
        ]);

        DB::table('lines')->insert([
            'page_id' => 1,
            'value' => 'The source code for this site is available on <a href="https://github.com/toilled/toille-solid" target="_blank">this GitHub repository</a>.'
        ]);

        DB::table('lines')->insert([
            'page_id' => 2,
            'value' => 'I am a BSc (Hons) graduate who has been confident working with computers in some way for most of my life.'
        ]);

        DB::table('lines')->insert([
            'page_id' => 2,
            'value' => 'I am currently based in the Gloucestershire area and available for local or remote work.'
        ]);

        DB::table('lines')->insert([
            'page_id' => 3,
            'value' => 'I develop new code ideas as a hobby in my spare time'
        ]);

        DB::table('lines')->insert([
            'page_id' => 3,
            'value' => 'I keep up to date with music and play musical instruments including the guitar.'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lines');
    }
};
