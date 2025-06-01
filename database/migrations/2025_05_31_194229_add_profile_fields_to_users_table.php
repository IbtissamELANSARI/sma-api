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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('address')->nullable()->after('phone');
            $table->date('birthdate')->nullable()->after('address');
            $table->string('gender')->nullable()->after('birthdate');
            $table->string('profile_picture')->nullable()->after('gender');
            $table->boolean('is_active')->default(true)->after('profile_picture');
            $table->timestamp('last_login_at')->nullable()->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'address', 'birthdate', 'profile_picture', 'is_active', 'last_login_at']);
        });
    }
};
