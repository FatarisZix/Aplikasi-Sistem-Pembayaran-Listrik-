<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_pelanggan_id')->constrained('data_pelanggan')->onDelete('cascade');
            $table->integer('pemakaian_kwh');
            $table->decimal('tarif_per_kwh', 8, 2)->default(1500.00);
            $table->decimal('total_tagihan', 10, 2);
            $table->enum('status_bayar', ['belum_bayar', 'sudah_bayar'])->default('belum_bayar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tagihan');
    }
}