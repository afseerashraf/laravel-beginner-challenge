<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('laravelTable', function (Blueprint $table) {
            $table->date('dob')->after('email');
            $table->string('place')->after('dob');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laravelTable', function (Blueprint $table) {//when it run the table name must mention in user.php model
            $table->dropcolumn('dob');
            $table->dropColumn('place');
        });
    }
};
