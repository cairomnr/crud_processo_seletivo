<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 100);
            $table->string('initials', 10);
            $table->string('email_support', 100)->nullable();
            $table->string('url', 50)->nullable();
            $table->boolean('status')->default(0);
            $table->string('justification_update', 500)->nullable();
            $table->integer('user_id')->unsigned()->default(1);

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('systems');
    }
}
