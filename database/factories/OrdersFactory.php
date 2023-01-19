<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $contact_no =['Facebook','Instagran'];   
        $order_type =['Pickup' , 'Delivery'];
        return [
            'schedules_id'  => fake()->numberBetween(1,3),
            'branch_id' => fake()->numberBetween(1,3),
            'fname' => fake()->firstName(),
            'lname' => fake()->lastName(),
            'email' => fake()->email(),
            'contact_no' => fake()->phoneNumber(),
            'contact_type' => $contact_no[fake()->numberBetween(0,1)],
            'username' => fake()->userName(),
            'status' => fake()->numberBetween(1,3),
            'order_type' => $order_type[fake()->numberBetween(0,1)],
            'address_line_1' => fake()->address(),
            'address_line_2' => fake()->address(),
            'city' => fake()->city(),
            'province' => fake()->city(),
            'landmark' => fake()->paragraph(1),
            'rep_fname' => fake()->firstName(),
            'rep_lname' =>  fake()->lastName(),
            'rep_contact_no'=> fake()->phoneNumber(),
            'admin_notes' => fake()->paragraph(1),
            'date' => fake()->date(),
        ];
    }
}
