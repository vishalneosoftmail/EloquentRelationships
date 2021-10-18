<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phone_no  = array(
            array('user_id'=> 1, 'phone_no'=>'7678654534', 'company_id' =>'2'),
            array('user_id'=> 2, 'phone_no'=>'9878654545', 'company_id' =>'3'),
            array('user_id'=> 3, 'phone_no'=>'8868654509', 'company_id' =>'1'),
            
        );
      Phone::insert($phone_no);
    }
}
