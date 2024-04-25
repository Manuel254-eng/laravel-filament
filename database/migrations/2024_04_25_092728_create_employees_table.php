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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->constrained()->cascadeOnDelete();            
            $table->unsignedBigInteger('state_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('city_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('department_id')->constrained()->cascadeOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string("address");
            $table->string('zip_code');
            $table->date('date_of_birth');
            $table->date('date_hired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
