<?php

namespace Database\Seeders;

use App\Models\Institution;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create(['name' => 'Mikroskop']);
        Institution::create(['name' => 'Tabung Reaksi']);
        Institution::create(['name' => 'Pipet']);
        Institution::create(['name' => 'Gelas ukur']);
        Institution::create(['name' => 'Timbangan Analitik']);
        Institution::create(['name' => 'pH meter']);

        Member::factory(100)->create();
    }
}
