<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websetups', function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->string("phone");
            $table->string("address");
            $table->string("fb")->nullable();
            $table->string("tw")->nullable();
            $table->string("ins")->nullable();
            $table->string("ldin")->nullable();
            $table->text("description");
            $table->string("icon");
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
        Schema::dropIfExists('websetups');
    }
}
