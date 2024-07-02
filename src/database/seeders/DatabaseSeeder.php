<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['content' => '商品の交換について', 'created_at' => now(), 'updated_at' => now()],
            ['content' => '商品のトラブル', 'created_at' => now(), 'updated_at' => now()],
            ['content' => '商品の配送について', 'created_at' => now(), 'updated_at' => now()],
            ['content' => 'ショップへのお問い合わせ', 'created_at' => now(), 'updated_at' => now()],
            ['content' => 'その他', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
    public function run()
    {
        $this->call(UserSeeder::class); 
    }
}

