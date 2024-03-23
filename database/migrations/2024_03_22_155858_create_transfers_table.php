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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('type_trf');
            $table->string('acct_num');
            $table->string('acct_name');
            $table->string('bk_name');
            $table->string('swf_code')->nullable();
            $table->string('iban')->nullable();
            $table->string('recpt_name');
            $table->string('recpt_address');
            $table->decimal('amount', 10, 2);
            $table->text('description')->nullable();
            $table->string('narrative')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
