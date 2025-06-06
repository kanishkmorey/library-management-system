<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds for the members table.
     */
    public function run(): void
    {
        // Generate 10 sample member records
        for ($i = 1; $i <= 10; $i++) {
            Member::create([
                'name' => 'Member ' . $i,                                  // Member's name
                'email' => 'member' . $i . '@example.com',                // Unique sample email
                'phone' => '9876543' . str_pad($i, 3, '0', STR_PAD_LEFT), // Simulated phone number
            ]);
        }
    }
}
