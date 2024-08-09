<?php

use App\Models\LandingPage;
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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->datetime('visited_at')->nullable();
            $table->datetime('lefted_at')->nullable();
            $table->datetime('clicked_at')->nullable();
            $table->datetime('country')->nullable();
            $table->foreignIdFor(LandingPage::class)->constrained()
            ->cascadeOnDelete()->cascadeOnUpdate();


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
