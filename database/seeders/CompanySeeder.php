<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $company = array(
           array('company_name'=> 'Airtel'),
           array('company_name'=> 'Vodafone'),
           array('company_name'=> 'Jio'),
           
       );

       Company::insert($company);
    }
}
