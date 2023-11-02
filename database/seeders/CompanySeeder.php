<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $company = [
            ['name' => 'Web Design', 'description' => 'Web Design'],
            ['name' => 'Web Development', 'description' => 'Web Development'],
            ['name' => 'Graphic Design', 'description' => 'Graphic Design'],
            ['name' => 'Digital Marketing', 'description' => 'Digital Marketing'],
            ['name' => 'UI / UX Design', 'description' => 'UI / UX Design'],
            ['name' => 'Video Editing', 'description' => 'Video Editing'],
            ['name' => 'Database Design', 'description' => 'Database Design'],
            ['name' => 'Graphic Animation', 'description' => 'Graphic Animation'],
        ];

        foreach ($company as $company) {
            Company::create($company);
        }
    }
}
