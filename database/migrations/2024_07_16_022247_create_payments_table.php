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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad');
            $table->string('numero');
            $table->string('concepto');
            $table->string('fecha_pago');

            $table->unsignedBigInteger('collaborator_id')->nullable();
            $table->foreign('collaborator_id')
            ->references('id')
            ->on('collaborators')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
