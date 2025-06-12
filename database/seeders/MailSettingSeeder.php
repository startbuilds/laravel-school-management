<?php

namespace Database\Seeders;

use DB;
use App\Models\MailSetting;
use Illuminate\Database\Seeder;

class MailSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mail_settings')->delete();
        
        $mail_settings = MailSetting::create([

            'driver'=>'smtp',
            'host'=>'',
            'port'=>'2525',
            'username'=>'',
            'password'=>'',
            'encryption'=>'tls',
            'sender_email'=>'',
            'sender_name'=>'Info Company',
            'reply_email'=>'info@mail.com',
            'status'=>'1',
            
        ]);
    }
}
