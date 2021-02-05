<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //foreign key
            $table->string('title')->nullable;
            $table->text('description')->nullable;
            $table->string('url')->nullable;
            $table->timestamps();

            $table->index('user_id'); //=> add an index for ANY foreign key you have, because some db like MySql requires it. (This is Eloquent behavior)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
