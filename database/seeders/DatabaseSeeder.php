<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::query()->create([
            'name' => 'Cluster Coding',
            'email' => 'clustercoding@gmail.com',
        ]);*/

        Plan::query()->create([
            'name' => 'Starter',
            'slug' => 'starter',
            'post_limit' => 5,
            'price' => 0,
        ]);

        Plan::query()->create([
            'name' => 'Business',
            'slug' => 'business',
            'post_limit' => 10,
            'price' => 5,
            'stripe_plan_id' => 'price_xxxx_business' // Stripe থেকে আসবে
        ]);

        Plan::query()->create([
            'name' => 'Platinum',
            'slug' => 'platinum',
            'post_limit' => 25,
            'price' => 10,
            'stripe_plan_id' => 'price_xxxx_platinum' // Stripe থেকে আসবে
        ]);
    }
}
