<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->date('date');
            $table->unsignedBigInteger('user_id');
            $table->timestamps(); // <-- Añadido
        });
    }

    public function down() {
        Schema::drop('articles');
    }
};
