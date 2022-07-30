<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('description');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
