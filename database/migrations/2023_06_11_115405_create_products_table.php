<?php

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(State::class)->nullable();
            $table->foreignIdFor(Country::class)->nullable();
            $table->foreignIdFor(City::class)->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->bigInteger('price');
            $table->boolean('featured')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
