<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioAcreditacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_acreditacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on(config('admin.database.users_table'))->onDelete('cascade');;
            $table->unsignedBigInteger('tipo_acreditacion_id');
            $table->foreign('tipo_acreditacion_id')->references('id')->on('tipo_acreditacions');
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
        Schema::dropIfExists('usuario_acreditacions');
    }
}
