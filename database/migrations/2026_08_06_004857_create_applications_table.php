<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            // User yang melakukan pendaftaran
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            // Data pribadi
            $table->string('name');
            $table->string('class');
            $table->string('major');
            $table->string('phone');

            // Data basket
            $table->string('position');
            $table->integer('height')->nullable();
            $table->text('experience')->nullable();

            // Alasan bergabung
            $table->text('reason');

            // Status pendaftaran
            $table->enum('status', [
                'pending',
                'accepted',
                'rejected'
            ])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Batalkan migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};