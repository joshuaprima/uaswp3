<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('idbarang');
            $table->string('namabarang');
            $table->integer('idjenis')->unsigned()->index();
            $table->integer('jumlah');
            $table->integer('idsupplier')->unsigned()->index();
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('idjenis')
                ->references('idjenis')
                ->on('jenis')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idsupplier')
                ->references('idsupplier')
                ->on('supplier')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
