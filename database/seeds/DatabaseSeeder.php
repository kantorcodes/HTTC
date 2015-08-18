<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AttributesTableSeeder::class);

        $mike =  [
         'email'     => 'info@empathynyc.com',
          'password' => env('MIKE_PASSWORD'), 
        ];

        $permission = [
            'user_id' => 2,
            'role_id' => 1
        ];

        DB::table('users')->insert($mike);
        DB::table('role_users')->insert($permission);

        Model::reguard();
    }
}
