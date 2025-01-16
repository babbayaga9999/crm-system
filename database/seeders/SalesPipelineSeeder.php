<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SalesPipeline;

class SalesPipelineSeeder extends Seeder
{
    public function run()
    {
        SalesPipeline::create([
            'lead_id' => 1,  // Assuming the lead with ID 1 exists
            'stage' => 'Qualification',
            'expected_value' => 5000,
            'closing_date' => '2025-02-28',
            'status' => 'Open',
        ]);

        SalesPipeline::create([
            'lead_id' => 2,  // Assuming the lead with ID 2 exists
            'stage' => 'Negotiation',
            'expected_value' => 3000,
            'closing_date' => '2025-03-15',
            'status' => 'In Progress',
        ]);

        // Add more sample data as needed...
    }
}
