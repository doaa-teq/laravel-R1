<?php

namespace Database\Seeders;
use App\Models\Car;
use App\Models\User;
use App\Models\Journal;
use App\Models\Entry;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(10)->create();
        Car::factory(10)->create();
        User::factory(10)->create();
        Journal::factory(10)->create();
        Entry::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
