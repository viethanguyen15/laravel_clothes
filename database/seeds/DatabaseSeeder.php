<?php

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
        //viet theo thu tu bang chinh truoc bang phu sau
        // $this->call(UsersTableSeeder::class);
        $this->call(Users::class);
        $this->call(Category::class);
        $this->call(Product::class);
        //$this->call(Order::class);
        //$this->call(ProductOrder::class);
    }
}
