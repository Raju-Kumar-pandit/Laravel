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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('title',10);
            $table->string('name',50);
            $table->string('email',100);
            $table->string('phone',10);
            $table->string('git',100);
            $table->string('rank',100);
            $table->string('district',50);
            $table->string('state',50);
            $table->string('pcode',50);
            $table->string('nation',50);
            $table->string('objective',300);
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
        Schema::dropIfExists('resumes');
    }
};
