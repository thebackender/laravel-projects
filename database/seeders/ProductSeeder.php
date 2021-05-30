<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LG mobile',
                'price' => '200',
                'description' => 'A smartphone with coolasd asdfa lorem',
                'category' => 'mobile',
                'gallery' => 'https://thumb.tildacdn.com/tild3961-6437-4134-b830-623164363764/-/cover/720x800/center/center/-/format/webp/Apple-iPhone-12-Grap.png'
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'description' => 'A smartphone with coolasd asdfa lorem',
                'category' => 'mobile',
                'gallery' => 'https://thumb.tildacdn.com/tild3961-6437-4134-b830-623164363764/-/cover/720x800/center/center/-/format/webp/Apple-iPhone-12-Grap.png'
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'description' => 'A smartphone with coolasd asdfa lorem',
                'category' => 'mobile',
                'gallery' => 'https://thumb.tildacdn.com/tild3961-6437-4134-b830-623164363764/-/cover/720x800/center/center/-/format/webp/Apple-iPhone-12-Grap.png'
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'description' => 'A smartphone with coolasd asdfa lorem',
                'category' => 'mobile',
                'gallery' => 'https://thumb.tildacdn.com/tild3961-6437-4134-b830-623164363764/-/cover/720x800/center/center/-/format/webp/Apple-iPhone-12-Grap.png'
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'description' => 'A smartphone with coolasd asdfa lorem',
                'category' => 'mobile',
                'gallery' => 'https://thumb.tildacdn.com/tild3961-6437-4134-b830-623164363764/-/cover/720x800/center/center/-/format/webp/Apple-iPhone-12-Grap.png'
            ]
        ]);
    }
}
