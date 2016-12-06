<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        date_default_timezone_set('America/Mexico_City');
        $date = date('Y-m-d H:i:s', time());
         DB::table('users')->delete();
    DB::table('users')->insert([
        'name'     => 'Enrique Madrigal',
        'username' => 'enrique',
        'email'    => 'emadriga@gmail.com',
        'password' => Hash::make('enrumaju'),
        'created_at' => $date
    ]);
    }
}


//'created_at' => Carbon::now()->format('Y-m-d H:i:s')