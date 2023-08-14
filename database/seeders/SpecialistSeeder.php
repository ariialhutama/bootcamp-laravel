<?php

namespace Database\Seeders;

use App\Models\Master_data\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialist = [
             [
                'name' => 'Dermatology',
                'price' => '230000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'name' => 'Dentist',
                'price' => '240000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'name' => 'Neurology',
                'price' => '5000000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'name' => 'Urology',
                'price' => '65000000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'name' => 'Periodontics',
                'price' => '750000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'name' => 'Radiology',
                'price' => '560000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                
             ],
             
        ];

        Specialist::insert($specialist);
    }
}
