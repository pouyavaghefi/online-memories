<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Get the current year
        $currentYear = date('Y');

        // Generate an array of years from 2000 to the current year
        $years = range(2000, $currentYear);

        // Create records for each year in the database
        foreach ($years as $year) {
            DB::table('years')->insert([
                'year' => $year,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
