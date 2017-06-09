<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('profiles', function (Blueprint $table) {
          $table->string('thumbnail_id')->nullable();
          $table->string('gender')->nullable();
          $table->string('education')->nullable();
          $table->string('company')->nullable();
          $table->string('designation')->nullable();
          $table->string('about')->nullable();
          $table->string('facebook')->nullable();
          $table->string('twitter')->nullable();
          $table->string('github')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('profiles', function (Blueprint $table) {
          $table->dropColumn('thumbnail_id');
          $table->dropColumn('gender');
          $table->dropColumn('education');
          $table->dropColumn('company');
          $table->dropColumn('designation');
          $table->dropColumn('about');
          $table->dropColumn('facebook');
          $table->dropColumn('twitter');
          $table->dropColumn('github');

      });
    }
}
