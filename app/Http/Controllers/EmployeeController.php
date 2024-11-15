<?php
namespace App\Http\Controllers;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function showHierarchy()
    {
        $employees = Employee::whereNull('parent_id')->get();

        return view('employees.hierarchy', compact('employees'));
    }
    public function displayHierarchy($employees, $level = 0)
    {
        $output = '';

        foreach ($employees as $employee) {
            $output .= str_repeat('&nbsp;', $level * 4);
            $output .= ($level == 0 ? '.' : '-') . $employee->name . "<br>";

            if ($employee->children->isNotEmpty()) {
                $output .= $this->displayHierarchy($employee->children, $level + 1);
            }
        }

        return $output;
    }
}
