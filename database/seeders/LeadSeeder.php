<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    public function run()
    {
        Lead::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '555-1234',
            'status' => 'New',
            'source' => 'Website',
            'assigned_to' => 1, // Assuming user ID 1 is assigned to this lead
        ]);

        Lead::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '555-5678',
            'status' => 'In Progress',
            'source' => 'Referral',
            'assigned_to' => 2,
        ]);

        // Add more sample data as needed...
    }
}
