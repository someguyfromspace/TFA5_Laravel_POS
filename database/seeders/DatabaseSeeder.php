<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            ['customer', 'Maria Santos', 'maria.santos@example.com', '09171234501', 'Active'],
            ['customer', 'Juan Dela Cruz', 'juan.delacruz@example.com', '09171234502', 'Active'],
            ['customer', 'Angela Reyes', 'angela.reyes@example.com', '09171234503', 'Active'],
            ['customer', 'Carlos Mendoza', 'carlos.mendoza@example.com', '09171234504', 'Inactive'],
            ['customer', 'Sofia Garcia', 'sofia.garcia@example.com', '09171234505', 'Active'],
            ['user', 'Admin User', 'admin@example.com', '09179876501', 'Active'],
            ['user', 'Cashier One', 'cashier1@example.com', '09179876502', 'Active'],
            ['user', 'Cashier Two', 'cashier2@example.com', '09179876503', 'Active'],
            ['user', 'Inventory Staff', 'inventory@example.com', '09179876504', 'Active'],
            ['user', 'Manager User', 'manager@example.com', '09179876505', 'Inactive'],
        ];

        foreach ($records as [$type, $name, $email, $phone, $status]) {
            DB::table('sample_accounts')->insert([
                'account_type' => $type,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'status' => $status,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
