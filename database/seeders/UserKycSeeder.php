<?php

namespace Database\Seeders;

use App\Models\UserKyc;
use Illuminate\Database\Seeder;

class UserKycSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $userkyc = array(
           array('phone_id'=>1, 'kyc_document'=>'Aadhar Card'),
           array('phone_id'=>2, 'kyc_document'=>'PAN Card'),
           array('phone_id'=>3, 'kyc_document'=>'Voter ID '),
       );
       UserKyc::insert($userkyc);
    }
}
