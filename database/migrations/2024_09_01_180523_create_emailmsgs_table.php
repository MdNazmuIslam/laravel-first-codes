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
        Schema::create('emailmsgs', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('email',40);
            $table->string('subject',40);
            $table->string('message',340);
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emailmsgs');
    }
};
