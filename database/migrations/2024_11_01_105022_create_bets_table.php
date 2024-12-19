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
        Schema::create('bets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index(); // User_id
            $table->string('game_provide_name', 100);    // GameProvideName field
            $table->string('game_name', 100);            // GameName field
            $table->string('operator_id', 20);
            $table->string('request_date_time', 50);
            $table->string('signature', 50);
            $table->string('player_id', 50);
            $table->string('currency', 5);
            $table->string('round_id', 30);
            $table->string('bet_id', 30)->unique();
            $table->string('game_code', 50);
            $table->decimal('bet_amount', 18, 4);
            $table->string('tran_date_time', 100)->default(now());
            $table->string('auth_token', 500)->nullable();
            $table->string('status')->default('active'); // Default to 'active' for new transactions
            $table->timestamp('cancelled_at')->nullable(); // Set when transaction is cancelled
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bets');
    }
};