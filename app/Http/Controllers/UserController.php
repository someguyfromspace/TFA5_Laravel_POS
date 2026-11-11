<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Temporary static PHP data source, as required by TFA5.
        $users = [
            ['id' => 'U-001', 'name' => 'Alex Rivera', 'email' => 'alex.rivera@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 'U-002', 'name' => 'Bianca Cruz', 'email' => 'bianca.cruz@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 'U-003', 'name' => 'Carlos Lim', 'email' => 'carlos.lim@example.com', 'role' => 'Inventory Staff', 'status' => 'Active'],
            ['id' => 'U-004', 'name' => 'Diana Flores', 'email' => 'diana.flores@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['id' => 'U-005', 'name' => 'Ethan Navarro', 'email' => 'ethan.navarro@example.com', 'role' => 'Manager', 'status' => 'Active'],
        ];

        return view('users.index', compact('users'));
    }
}
