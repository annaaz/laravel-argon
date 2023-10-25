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
        Schema::table('kerjasama', function (Blueprint $table) {
            $table->renameColumn('new_field', 'link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // You can define a down method to reverse the renaming if needed.
        Schema::table('kerjasama', function (Blueprint $table) {
            $table->renameColumn('link', 'new_field');
        });
    }
};
