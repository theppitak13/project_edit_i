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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อบริษัท');
            $table->string('address')->comment('ที่อยู่');
            $table->string('city')->comment('เมือง');
            $table->string('country')->comment('ประเทศ');
            $table->string('phone')->comment('โทรศัพท์');
            $table->string('email')->comment('อีเมล');
            $table->string('website')->comment('เว็บไซต์');
            $table->text('description')->nullable()->comment('คำอธิบาย');
            $table->string('income')->comment('รายได้');
            $table->string('total_assets')->comment('สินทรัพย์รวม');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
