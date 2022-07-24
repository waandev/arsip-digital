<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Officer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $officer = [
            [
                'name'           => 'Super Officer',
                'username'       => 'Super Officer',
                'email'          => 'officer@mail.com',
                'password'       => Hash::make('Officer@12345'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        Officer::insert($officer);
    }
}
