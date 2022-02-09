<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserFriends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_friends', function (Blueprint $table) {
            $table->increments('id');// Id da tabela (chave primária e incremento)
           // $table->unsignedBigInteger('user_id');
            $table->integer('friend_id')->unsigned(); //Site
            $table->date('accepted_at');
            $table->boolean('status')->default(true); // Imagem do Produto
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
