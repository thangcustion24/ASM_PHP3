<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Danhmuc;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sanpham>
 */
class SanphamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ten_sp' => $this->faker->word,
            'gia_sp' => $this->faker->randomFloat(2, 1, 100),
            'giam_gia' => $this->faker->randomFloat(2, 1, 100),
            'mo_ta' => $this->faker->text(),
            'so_luong' => $this->faker->randomNumber,
            'so_luot_xem' => $this->faker->randomNumber,
            'id_dm' => Danhmuc::all()->random()->id,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
