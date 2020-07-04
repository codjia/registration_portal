<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin01@gmail.com',
            'password' => bcrypt('admin123456'),
//            'role'=>'admin',
//            'status'=>'active'
        ]);

         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin02@gmail.com',
            'password' => bcrypt('admin123456'),
//            'role'=>'admin',
//            'status'=>'active'
        ]);

        DB::table('users')->insert([
            'name' => 'YMC_ADMIN',
            'email' => 'ymcadmin@gmail.com',
            'password' => bcrypt('admin123456'),
//            'role'=>'admin',
//            'status'=>'active'
        ]);
    }
}
