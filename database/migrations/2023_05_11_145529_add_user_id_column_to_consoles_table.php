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
        Schema::table('consoles', function (Blueprint $table) {
            // numero intero senza segno -> creiamo la colonna
            $table->unsignedBigInteger('user_id')->after('description')->nullable();


            // user id è una chiave esterna che fa riferimento alla colonna id della tabella users -> creiamo la chiave esterna
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consoles', function (Blueprint $table) {
            // sciogliere la chiave esterna
            $table->dropForeign(['user_id']);

            // cancellare la colonna
            $table->dropColumn(['user_id']);

        });
    }
};
