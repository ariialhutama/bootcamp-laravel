<?php

namespace Database\Seeders;

use App\Models\Master_data\Type_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_user = [
            [
                'name' => 'Pasien'
            ],
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Dokter'
            ],
            
        ];

        Type_user::insert($type_user);
    }
}
