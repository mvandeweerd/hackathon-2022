<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Ikea',
            'slug' => 'ikea',
            'website' => 'ikea.com',
            'phone_number' => '+31641023222',
            'email_address' => 'info@ikea.com',
        ]);
    }
}
