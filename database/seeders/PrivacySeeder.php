<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Privacy;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Privacy::truncate();
        Privacy::factory(1)->create();
    }
}
