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
        Schema::create('tbl_siswakelas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_siswa')->index();
            $table->unsignedBigInteger('id_kelas')->index();
            $table->unsignedBigInteger('id_tipekelas')->index();
            $table->timestamps();

            $table->foreign('id_siswa')->references('id')->on('tbl_siswa')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('tbl_kelas')->onDelete('cascade');
            $table->foreign('id_tipekelas')->references('id')->on('tbl_tipekelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_siswakelas');

        Schema::dropForeign('lists_id_siswa_foreign');
        Schema::dropIndex('lists_id_siswa_index');
        Schema::dropForeign('id_siswa');

        Schema::dropForeign('lists_id_kelas_foreign');
        Schema::dropIndex('lists_id_kelas_index');
        Schema::dropForeign('id_kelas');

        Schema::dropForeign('lists_id_tipekelas_foreign');
        Schema::dropIndex('lists_id_tipekelas_index');
        Schema::dropForeign('id_tipekelas');
    }
};
