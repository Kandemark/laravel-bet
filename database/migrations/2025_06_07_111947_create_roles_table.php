<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('level')->default(0); // Include if needed
            $table->timestamps();
            $table->softDeletes(); // Include for deleted_at column
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}