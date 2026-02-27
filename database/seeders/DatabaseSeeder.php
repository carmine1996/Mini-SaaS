<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\SubscriptionPlansSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //creo utente se non esiste
        User::factory()->create([
            'name' => 'Test User',
            'first_name' => 'Test',
            'surname' => 'User',
            'email' => 'test@example.com',
            'password' => '12345',
            'role' => 'admin',
        ]);

        SubscriptionPlansSeeder::run();
    }
}
