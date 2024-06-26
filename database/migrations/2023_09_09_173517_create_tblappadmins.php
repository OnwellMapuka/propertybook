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
        Schema::create('tblappadmins', function (Blueprint $table) {
            $table->string('ecno')->primary();
            $table->string('firstname');
            $table->string('surname');
            $table->string('usertype');
            $table->string('password');
            $table->string('uniq_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblappadmins');
    }
};
