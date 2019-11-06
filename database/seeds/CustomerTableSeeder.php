<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->name = "Alex";
        $customer->phone = "0358463366";
        $customer->address = "Chicago";
        $customer->save();

        $customer = new \App\Customer();
        $customer->name = "Ashley";
        $customer->phone = "0358888888";
        $customer->address = "Singapore";
        $customer->save();

        $customer = new \App\Customer();
        $customer->name = "Adam";
        $customer->phone = "0356666666";
        $customer->address = "San Diego";
        $customer->save();

    }
}
