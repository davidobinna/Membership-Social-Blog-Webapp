<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;


class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Plan::create([
            'name'               => 'Monthly Plan',
            'slug'               => 'monthly-plan',
            'stripe_name'        => 'monthly',
            'stripe_product_id'  => 'prod_copystripeidforymonthlyplan', //paste stripe id
            'stripe_price_id'    => 'price_copystripeidforymonthlyplan',
            'price'              => 2,
            'abbreviation'       => '/month',
         ]);

         Plan::create([
            'name'               => 'Yearly Plan',
            'slug'               => 'yearly-plan',
            'stripe_name'        => 'yearly',
            'stripe_product_id'  => 'prod_copystripeidforymonthlyplan',
            'stripe_price_id'    => 'price_copystripeidforymonthlyplan',
            'price'              => 20,
            'abbreviation'       => '/yearly',
         ]);
    }
}
