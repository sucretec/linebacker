<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacebookIdColumnToLbUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lb_users', function(Blueprint $table){
            $table->string('facebook_id')->after('confirmation_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lb_users', function(Blueprint $table){
            $table->dropColumn('facebook_id');
        });
    }
}
