<?php

namespace Database\Seeders;

use App\Models\InstalledApp;
use Illuminate\Database\Seeder;

class InstalledAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $installedApp = array(
          array('phone_id'=>2, 'app_name'=>'Facebook'),
          array('phone_id'=>2, 'app_name'=>'Instagram'),
          array('phone_id'=>2, 'app_name'=>'Whatsapp'),
          array('phone_id'=>2, 'app_name'=>'Twitter'),
          array('phone_id'=>3, 'app_name'=>'Facebook'),
          array('phone_id'=>3, 'app_name'=>'Twitter'),
          array('phone_id'=>1, 'app_name'=>'Whatsapp'),
          array('phone_id'=>1, 'app_name'=>'Facebook'),
         
      );
      InstalledApp::insert($installedApp);
    }
}
