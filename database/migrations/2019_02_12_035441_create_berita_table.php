<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->increments('id');
            $table->string('berita_judul',150);
            $table->string('berita_subjudul',100);
            $table->string('berita_slug',100);
            $table->text('berita_isi');
            $table->integer('berita_tanggal')->timestamps();
            $table->integer('berita_tulisan_views')->nullable();
            $table->string('berita_gambar')->nullable();
            $table->integer('berita_pengguna_id')->nullable();
            $table->string('berita_author',40)->nullable();
            $table->boolean('berita_img_slider')->nullable();
            $table->boolean('berita_status')->nullable();
            $table->integer('berita_like')->nullable();
            $table->integer('berita_dislike')->nullable();  
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
        Schema::dropIfExists('berita');
    }
}
