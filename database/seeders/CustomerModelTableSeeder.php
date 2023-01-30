<?php

namespace Database\Seeders;

use App\Models\CustomerModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        CustomerModel::Factory(5)->create();
    }
}
