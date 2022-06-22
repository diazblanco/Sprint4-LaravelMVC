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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->date('match_date');
            $table->time('match_time');
            //clave foranea local
            $table->unsignedBigInteger('team_id_local');
            $table->foreign('team_id_local')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            //clave foranea visitante
            $table->unsignedBigInteger('team_id_visiting');
            $table->foreign('team_id_visiting')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('category', ['Benjamín', 'Alevín', 'Infantil', 'Cadete', 'Juvenil']);
            $table->tinyInteger('local_goals')->nullable();
            $table->tinyInteger('visiting_goals')->nullable();
            $table->enum('local_points', ['3', '1', '0'])->nullable();
            $table->enum('visiting_points', ['3', '1', '0'])->nullable();
            
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
        Schema::dropIfExists('matches');
    }
};
