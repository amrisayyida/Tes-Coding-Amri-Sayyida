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
        Schema::create('tbl_guru', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_guru')->index();
            $table->unsignedBigInteger('id_kelas')->index();
            $table->unsignedBigInteger('id_tipekelas')->index();
            $table->timestamps();
            
            $table->foreign('id_guru')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('tbl_kelas')->onDelete('cascade');
            $table->foreign('id_tipekelas')->references('id')->on('tbl_tipekelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_guru');

        Schema::dropForeign('lists_id_guru_foreign');
        Schema::dropIndex('lists_id_guru_index');
        Schema::dropForeign('id_guru');

        Schema::dropForeign('lists_id_kelas_foreign');
        Schema::dropIndex('lists_id_kelas_index');
        Schema::dropForeign('id_kelas');

        Schema::dropForeign('lists_id_tipekelas_foreign');
        Schema::dropIndex('lists_id_tipekelas_index');
        Schema::dropForeign('id_tipekelas');
    }
};
