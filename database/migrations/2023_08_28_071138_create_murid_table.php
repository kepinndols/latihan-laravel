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
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('nama', 150);
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('religion', 100);
            $table->date('ultah');
            $table->string('kelas');
            $table->text('alamat');
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
        Schema::dropIfExists('murid');
    }
};