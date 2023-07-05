<?php

use App\Models\Card;
use App\Models\City;
use App\Models\Country;
use App\Models\OrderGroup;
use App\Models\Product;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(OrderGroup::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Product::class);
            $table->foreignIdFor(Card::class);
            $table->foreignIdFor(State::class)->nullable();
            $table->foreignIdFor(Country::class)->nullable();
            $table->foreignIdFor(City::class)->nullable();
            $table->integer('price');
            $table->integer('subtotal');
            $table->integer('total');
            $table->integer('tax');
            $table->integer('shipping');
            $table->integer('quantity');
            $table->string('house');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
