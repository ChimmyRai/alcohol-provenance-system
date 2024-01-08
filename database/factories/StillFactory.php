<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Still>
 */
class StillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stillType'=> fake()->randomElement(["Pot","Reflux"]),
            'stillName'=> fake()->randomElement(["Alembic Pot Still","Fractional Still","Hybrid Pot Still/Column Still","Reflux Column Still","Coffey Still"]),
            'stillBuildDate'=> fake()->date($format = 'Y-m-d', $min = "1945-01-01", $max = "2020-01-01"),
            'stillLocation'=> fake()->randomElement(["57 Watcombe Street,Wavell Heights,QLD,4012","54 Spencer Street,Coolabine,QLD,4574","27 Ranworth Road, Rossmoyne,Western Australia,6148",
            "26 Carolina Park Road,Toowoon Bay,New South Wales,2261","61 Mandible Street,Buckingham,Queensland,4825","99 Jones Street,Mole Creek,Tasmania,7304",
             "28 McKillop Street,Main Lead,Victoria"]),
            'account_id'=>1,
        ];
    }
}
