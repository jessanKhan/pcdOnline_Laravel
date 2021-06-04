<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('name');
            $table->string('gender')->after('name');
            $table->string('dob')->after('name');
            $table->string('nationality')->after('name');
            $table->string('phone')->after('name');
            $table->string('address')->after('name');
            $table->string('qualification')->after('name');
            $table->string('image')->nullable()->after('qualification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('nationality');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('qualification');
        });
    }
}
