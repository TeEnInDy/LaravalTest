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
        Schema::create('d_a_t_a_b_a_s_e__s_e__camps', function (Blueprint $table) {
            $table->integer('td_id')->autoIncrement()->nullable(false)->$primaryKey();
            $table->string('td_name',225)->nullable(false);
            $table->string('td_des',1000)->nullable();
            $table->boolean('td_status')->nullable(false)->default(false);
            $table->timestaps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_a_t_a_b_a_s_e__s_e__camps');
    }
};
