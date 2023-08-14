<?php

namespace Database\Seeders;

use App\Models\Master_data\Config_payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config_payment = [
            [
               'fee' => '140000',
               'vat' => '20',
               'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            
            
       ];

       Config_payment::insert($config_payment);
    }
}
