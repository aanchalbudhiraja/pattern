<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // Create main employees
        $ramesh = Employee::create(['name' => 'Ramesh']);
        $deepu = Employee::create(['name' => 'Deepu']);
        $prem = Employee::create(['name' => 'Prem Chopra']);

        // Create subordinates
        Employee::create(['name' => 'Gaurav', 'parent_id' => $ramesh->id]);
        Employee::create(['name' => 'Shalu', 'parent_id' => $ramesh->id]);

        $amit = Employee::create(['name' => 'Amit', 'parent_id' => $deepu->id]);
        Employee::create(['name' => 'Sham Lal', 'parent_id' => $amit->id]);
        Employee::create(['name' => 'Kapil', 'parent_id' => $deepu->id]);
    }
}
