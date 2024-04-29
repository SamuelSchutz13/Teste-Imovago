<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->string('cpf')->after('telefone')->nullable();
            // Adiciona o campo 'cpf' após o campo 'telefone'
        });
    }

    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->dropColumn('cpf');
        });
    }
};
