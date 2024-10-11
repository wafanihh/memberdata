<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    protected $model = Member::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateTime = $this->faker->dateTimeBetween('1 month ago', 'now');

        return [
            'nama_siswa' => $this->faker->name(),
            'institution_id' => $this->faker->numberBetween(1, 3),
            'from' => $this->faker->randomElement([
                'Mikroskop',
                'Taung Reaksi',
                'Pipet',
                'Gelas Ukur',
                'Timbangan Analitik',
                'pH Meter',
            ]), 
            'nama_alat' =>'+62' . $this->faker->word(),
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $dateTime,
            'status_pengembalian' => 'Belum Dikembalikan',
            
        ];
    }
}
