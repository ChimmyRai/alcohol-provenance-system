<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'accountStatus'=> fake()->randomElement(["enabled","disabled"]),
            'acountname'=> fake()->randomElement(["BWS","LiquorLand","Independent Liquor Group","Liquid Specialty Beverage","Domaine Wine Shippers"]),
            'businessnumber'=> fake()->numberBetween(10000000000,99999999999),
            'businessAddress'=>fake()-> randomElement(["57 Watcombe Street,Wavell Heights,QLD,4012","54 Spencer Street,Coolabine,QLD,4574","27 Ranworth Road, Rossmoyne,Western Australia,6148",
            "26 Carolina Park Road,Toowoon Bay,New South Wales,2261","61 Mandible Street,Buckingham,Queensland,4825","99 Jones Street,Mole Creek,Tasmania,7304",
             "28 McKillop Street,Main Lead,Victoria"]),
        ];
    }
}
