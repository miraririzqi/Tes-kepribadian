<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasiltes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('jumlah_l');
            $table->string('jumlah_e');
            $table->string('jumlah_n');
            $table->foreignId('id_kepribadian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasiltes');
    }
};
