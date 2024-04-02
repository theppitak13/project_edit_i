<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Database\Factories\CompanyFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Company::factory()->count(5)->create();
    }
}
