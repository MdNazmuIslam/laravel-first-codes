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
        Schema::create('regdatas', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('email',56);
            $table->integer('class');
            $table->string('subject');
            $table->integer('number');
            $table->integer('age');
            $table->string('city');
            $table->string('cuntry');
            $table->string('address');
            $table->integer('postCode');
            $table->string('message');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regdatas');
    }
};
