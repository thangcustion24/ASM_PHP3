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
        Schema::create('tb_san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_sp');
            $table->string('hinh_anh')->nullable();
            $table->float('gia_sp', 8, 2);
            $table->float('giam_gia', 8, 2);
            $table->text('mo_ta');
            $table->integer('so_luong');
            $table->integer('so_luot_xem');
            $table->unsignedInteger('id_dm');
            $table->foreign('id_dm')->references('id')->on('tb_danh_muc')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_san_pham');
    }
};
