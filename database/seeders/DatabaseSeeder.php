<?php

namespace Database\Seeders;

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
        require_once database_path('seeders/EmployeeSeeder.php');
        
        // Call the seeder manually
        $seeder = new \Database\Seeders\EmployeeSeeder();
        $seeder->run();
    }
}
