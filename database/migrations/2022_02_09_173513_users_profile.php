<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_profile', function (Blueprint $table) {
            $table->increments('id');// Id da tabela (chave primária e incremento)
          //  $table->unsignedBigInteger('user_id');
            $table->string('site', 200)->nullable(); //Site
            $table->binary('profile_image')->nullable(); // Imagem do Produto
            $table->string('phone', 14)->nullable(); // Imagem usuario
            $table->integer('age')->nullable(); // Imagem do Produto
            $table->string('gender', 1)->nullable(); // sexo
            $table->text('description')->nullable(); // Descrição pessoal
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users'); // Define o campo como chave extrangeira (foreign key)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
