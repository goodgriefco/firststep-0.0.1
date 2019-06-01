<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntakeResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('event_id');
            $table->string('form_id');
            $table->dateTime('submitted_at');
            $table->json('fields');
            $table->json('answers');
            $table->timestamps();
        });

        Schema::table('intake_responses', function($table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('responses', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']);
        //     $table->dropColumn(['user_id']);
        // });

        Schema::dropIfExists('intake_responses');
    }
}
