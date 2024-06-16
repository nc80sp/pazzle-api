<?php

namespace Database\Seeders;

use App\Models\Accounts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Accounts::create([
            'name' => 'jobi',
            'password' => Hash::make('jobi')
        ]);
        for ($i = 1 ; $i <= 10 ; $i++) {
            Accounts::create([
                'name' => 'chiba' . $i,
                'password' => Hash::make('nobu')
            ]);
        }
    }
}
