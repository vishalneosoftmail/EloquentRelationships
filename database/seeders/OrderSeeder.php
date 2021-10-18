<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $orders = array(
          array('user_id' => 1, 'product_name' => 'Parle-G', 'product_price' => 10.00, 'created_at' =>'2021-10-07 12:18:18'),
          array('user_id' => 1, 'product_name' => 'Shirt', 'product_price' => 500.00, 'created_at' =>'2021-10-09 18:00:30'),
          array('user_id' => 1, 'product_name' => 'Watch', 'product_price' => 1200.00, 'created_at' =>'2021-10-11 13:30:45'),
          array('user_id' => 3, 'product_name' => 'Shoes', 'product_price' => 700.00, 'created_at' =>'2021-10-01 10:17:18'),
          array('user_id' => 3, 'product_name' => 'Pant', 'product_price' => 900.00, 'created_at' =>'2021-10-05 16:45:09'),
          array('user_id' => 2, 'product_name' => 'Mobile', 'product_price' => 10000.00, 'created_at' =>'2021-10-11 10:40:00'),
      );
      Order::insert($orders);
    }
}
