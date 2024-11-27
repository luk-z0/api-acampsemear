<?php

namespace Database\Seeders;

use App\Models\SupportMotivation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportMotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SupportMotivation::insert([['motivation' => 'Sugestão'], ['motivation' => 'Ajuda'], ['motivation' => 'Outros']]);
    }
}
