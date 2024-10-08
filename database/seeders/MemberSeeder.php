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
        Institution::create(['name' => 'Osis']);
        Institution::create(['name' => 'Pramuka']);
        Institution::create(['name' => 'Paskibra']);
        Institution::create(['name' => 'Palang Merah Remaja']);

        Member::factory(100)->create();
    }
}
