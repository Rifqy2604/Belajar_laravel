<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catatan_hasil_belajar', function (Blueprint $table) {
            $table->id();
            $table->date('hari_tanggal');
            $table->time('waktu')->nullable();
            $table->string('materi',255);
            $table->text('ringkasan')->nullable();
            $table->string('kesulitan', 50)->nullable();
            $table->text('link_referensi')->nullable();
            $table->text('rencana_selanjutnya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_hasil_belajar');
    }
};
