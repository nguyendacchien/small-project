<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\food;
use Illuminate\Database\Eloquent\Factories\Factory;


class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = Category::pluck('id')->toArray();
        return [
            'name'=>$this->faker->name(),
            'category_id'=>$this->faker->randomElement($category),
            'image'=>$this->faker->text(),
            'price'=>$this->faker->numberBetween(),
            'desc'=>$this->faker->text(50),
        ];
    }
}
