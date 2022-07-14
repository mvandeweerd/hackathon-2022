<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

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
        User::create([
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'password' => bcrypt('test123'),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
