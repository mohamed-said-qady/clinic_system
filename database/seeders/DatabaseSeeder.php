<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Acount;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {

        $this->call(LaratrustSeeder::class);

        $acount = Acount::factory()->create([
            'name'           => 'Test User',
            'email'          => 'test@example.com',
            'password'       =>Hash::make('1234554321'),
            'description'    =>'admin',
            'user_id'        =>'1',
            'specialisity_id'=>'1'
         ]);
         $acount->addRole('Admin');

    }
}
