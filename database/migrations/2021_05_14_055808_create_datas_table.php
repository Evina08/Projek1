<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users')->unsigned();
            $table->string('name',255);
            $table->string('no_hp',15);
            $table->string('no_hp_orangtua',15);
            $table->string('jenis_kelamin',255);
            $table->string('agama',30);
            $table->string('nik',20);
            $table->char('avatar',255);
            
            $table->timestamps();

            $table->foreign('users')->references('id')->on('users')->onDelete('cascade');
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datas');
    }
}
