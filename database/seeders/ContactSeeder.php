<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'lead_id' => 1, // Link contact to lead with ID 1
            'name' => 'John Doe',
            'email' => 'john.doe.contact@example.com',
            'phone' => '555-4321',
            'relationship' => 'Decision Maker',
        ]);

        Contact::create([
            'lead_id' => 2, // Link contact to lead with ID 2
            'name' => 'Jane Smith',
            'email' => 'jane.smith.contact@example.com',
            'phone' => '555-8765',
            'relationship' => 'Influencer',
        ]);

        // Add more sample data as needed...
    }
}
