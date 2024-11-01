<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MitraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('mitra')->insert([
            [
                'id'    => 1, // Assuming there's at least one user with ID 1
                'name_mitra' => 'PT. Maju Bersama',
                'logo_mitra' => 'logo_pt_maju.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id'    => 2, // Assuming another user with ID 2
                'name_mitra' => 'CV. Karya Innovasi',
                'logo_mitra' => 'logo_cv_karya.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            // Add more entries as needed
        ]);
    }
}
