<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPelangganTable extends Migration
{
    public function up()
    {
        Schema::create('data_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('no_kwh');
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
            $table->string('no_ktp');
            $table->text('alamat');
            $table->string('no_telepon');
            $table->enum('status', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_pelanggan');
    }
}