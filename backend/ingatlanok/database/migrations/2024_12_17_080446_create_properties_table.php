<?php

use App\Models\Property;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('categories');
            $table->string('leiras');
            $table->date('hirdetesDatuma');
            $table->boolean('tehermentes')->default(1);
            $table->integer('ar');
            $table->string('kepUrl');
            $table->timestamps();
        });
        Property::create([
            'kategoria'=>'1',
            'leiras'=>'Dunabogdány szívében, egyedülálló befektetési lehetőség',
            'hirdetesDatuma'=>date(now()),
            'ar'=>2400000,
            'kepUrl'=>'https://cdn.prod.website-files.com/617b29a71cefe95708448f95/675dd7cfdf9032dc757de579_N%C3%A9vtelen%20terv%20(3).png',
        ]);
        Property::create([
            'kategoria'=>'1',
            'leiras'=>'HÉTVÉGI LUXUS A MÁTRÁBAN – ERDŐ SZÉLÉN, PANORÁMÁS ÁLOMHÁZ ELADÓ',
            'hirdetesDatuma'=>date(now()),
            'ar'=>2400000,
            'kepUrl'=>'https://cdn.prod.website-files.com/617b29a71cefe95708448f95/675de3a790d1e6a3a8ae1cb0_N%C3%A9vtelen%20terv%20(1)-p-800.png',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
