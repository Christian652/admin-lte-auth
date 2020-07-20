<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('nome','Administrador')->first();

        $admin = User::create([
            'name'=>'Master User',
            'email'=>'masteruser@gmail.com',
            'password'=>Hash::make('administrador')
        ]);

        $admin->roles()->attach($adminRole);
    }
}
