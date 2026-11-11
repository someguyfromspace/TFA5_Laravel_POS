<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Temporary static PHP data source, as required by TFA5.
        $customers = [
            ['id' => 'C-001', 'name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917-555-0101', 'status' => 'Active'],
            ['id' => 'C-002', 'name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0917-555-0102', 'status' => 'Active'],
            ['id' => 'C-003', 'name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0917-555-0103', 'status' => 'Inactive'],
            ['id' => 'C-004', 'name' => 'Miguel Garcia', 'email' => 'miguel.garcia@example.com', 'phone' => '0917-555-0104', 'status' => 'Active'],
            ['id' => 'C-005', 'name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '0917-555-0105', 'status' => 'Active'],
        ];

        return view('customers.index', compact('customers'));
    }
}
