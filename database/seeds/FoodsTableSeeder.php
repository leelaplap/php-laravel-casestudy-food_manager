<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new \App\Food();
        $food->name = 'lòng xào dưa';
        $food->desc = 'lòng xào dưa rất ngon';
        $food->image = 'image/long-xao-dua.jpg';
        $food->price = 100000;
        $food->save();

        $food = new \App\Food();
        $food->name = 'nem chua';
        $food->desc = 'nem chua rất ngon';
        $food->image = 'image/nem-chua.jpg';
        $food->price = 150000;
        $food->save();

        $food = new \App\Food();
        $food->name = 'bánh đa';
        $food->desc = 'bánh đa rất ngon';
        $food->image = 'image/banh-da.jpg';
        $food->price = 125000;
        $food->save();

        $food = new \App\Food();
        $food->name = 'đậu phụ lướt ván';
        $food->desc = 'đậu phụ lướt ván rất ngon';
        $food->image = 'image/dau-phu.jpg';
        $food->price = 70000;
        $food->save();

        $food = new \App\Food();
        $food->name = 'rau bầu xào tỏi ớt';
        $food->desc = 'rau bầu xào tỏi ớt rất ngon';
        $food->image = 'image/rau-bau.jpg';
        $food->price = 85000;
        $food->save();

        $food = new \App\Food();
        $food->name = 'cút lộn xào me';
        $food->desc = 'cút lộn xào me rất ngon';
        $food->image = 'image/cut-lon.jpg';
        $food->price = 60000;
        $food->save();


    }
}
