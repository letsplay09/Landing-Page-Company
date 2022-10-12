<?php

namespace Database\Factories;

use App\Models\Kelurahan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KelurahanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kelurahan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kelurahan' => 'Ngadirejo',
            'kecamatan' => 'Pogalan',
            'kota' => "TGLK",
            'id' => 1
        ];
    }
}
