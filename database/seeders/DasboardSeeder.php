<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DasboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert(
            [
                'cu_code' => 'CU75080V2',
                'name' => 'Framework Project 1',
                'credits' => 10,
                'passed_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        );

        DB::table('tests')->insert(
            [
                'course_id' => 1,
                'name' => 'Laravel php toets',
                'weiging_factor' => 1,
                'lowest_passing_grade' => 5.5,
                'best_grade' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
