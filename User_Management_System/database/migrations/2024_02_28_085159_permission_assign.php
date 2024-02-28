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
        Schema::create('permission_assign', function(Blueprint $table){
            $table->id();
            $table->string('role_id');
            $table->string('permission_id');
            $table->timestamps();
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->foreign('permission_id')->references('permission_id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
