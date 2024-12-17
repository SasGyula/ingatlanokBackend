<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->timestamps();
        });

        Category::create([
            'nev'=>'Ház'
        ]);
        Category::create([
            'nev'=>'Lakás'
        ]);
        Category::create([
            'nev'=>'Építési telek'
        ]);
        Category::create([
            'nev'=>'Garázs'
        ]);
        Category::create([
            'nev'=>'Mezőgazdasági terület'
        ]);
        Category::create([
            'nev'=>'Ipari ingatlan'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
