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
        Schema::table('trains', function (Blueprint $table) {
            $table->timestamp("departure_time")->after("arrival_station");
            $table->timestamp("arrival_time")->after("departure_time");
            $table->string("train_code")->after("arrival_time");
            $table->integer("train_total_coaches")->after("train_code");
            $table->boolean("in_time")->after("train_total_coaches");
            $table->boolean("is_deleted")->after("in_time");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("departure_time");
            $table->dropColumn("arrival_time");
            $table->dropColumn("train_code");
            $table->dropColumn("train_total_coaches");
            $table->dropColumn("in_time");
            $table->dropColumn("is_deleted");
        });
    }
};
