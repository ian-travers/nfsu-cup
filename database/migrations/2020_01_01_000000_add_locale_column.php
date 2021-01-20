<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddLocaleColumn extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('locale')->default(config('app.locale'));
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('locale');
        });
    }
}
