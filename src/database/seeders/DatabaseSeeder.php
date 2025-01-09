<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(ContactSeeder::class);
      
      // CategorySeederを呼び出して、カテゴリデータを挿入
      $this->call(CategorySeeder::class);
    }
}
