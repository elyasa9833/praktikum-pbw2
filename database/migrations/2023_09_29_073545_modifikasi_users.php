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
    /**
     * NIM: 6706220043
     * NAMA: Amri Elyasa
     * KELAS: 46-04
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // penambahan kolom baru
            $table->string('username', 100)->unique();
            $table->string('address', 1000);
            $table->string('phoneNumber', 20);
            $table->date('birthdate')->nullable();
            
            // tambah baru lagi
            $table->string('agama');
            $table->tinyInteger('gender');
            

            // modifikasi kolom
            $table->renameColumn('name', 'fullname');
            $table->string('email')->nullable()->change();
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
            //
        });
    }
};
