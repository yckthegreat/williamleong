<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::firstOrCreate([
            "name" => "Superadmin"
        ],[
            "name" => "Superadmin",
            "email" => "superadmin@william.test",
            "password" => Hash::make("asdf1234")
        ]);
    }
}
