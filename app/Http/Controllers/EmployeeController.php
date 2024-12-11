<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Create an array of employees with Name, Position, and Salary
        $employees = [
            ['name' => 'John Doe', 'position' => 'Manager', 'salary' => 50000],
            ['name' => 'Jane Smith', 'position' => 'Developer', 'salary' => 45000],
            ['name' => 'Alex Johnson', 'position' => 'Designer', 'salary' => 40000],
            ['name' => 'Sam Brown', 'position' => 'Developer', 'salary' => 42000],
            ['name' => 'Chris Davis', 'position' => 'HR', 'salary' => 35000],
            ['name' => 'Kelly Green', 'position' => 'Marketer', 'salary' => 47000],
            ['name' => 'Rachel Adams', 'position' => 'Manager', 'salary' => 53000],
            ['name' => 'Mike Lee', 'position' => 'Support', 'salary' => 32000],
            ['name' => 'Sara White', 'position' => 'Sales', 'salary' => 41000],
            ['name' => 'Ethan Walker', 'position' => 'Developer', 'salary' => 46000],
        ];

        // Sort the employees by salary in descending order
        usort($employees, function($a, $b) {
            return $b['salary'] <=> $a['salary'];
        });

        // Pass the sorted data to the view
        return view('employees.index', ['employees' => $employees]);
    }
}