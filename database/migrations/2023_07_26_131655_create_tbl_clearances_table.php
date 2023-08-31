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
        Schema::create('tbl_clearances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('purok');
            $table->date('date');
            $table->integer('ctc_no');
            $table->text('issued_at');
            $table->date('date_issued');
            $table->integer('or_no');
            $table->float('amount_paid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_clearances');
    }
};
