<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Gavin Atha',
            'email' => 'gavin@gmail.com',
            'password' => Hash::make('spasi1kali'),
          ]);

        $admin->assignRole('admin');

        
        $agent = User::create([
        'name' => 'Alfian Syarif',
        'email' => 'alfiansyarif@gmail.com',
        'password' => Hash::make('spasi1kali'),
        ]);
        
        $agent->assignRole('agent');

        $user = User::create([
            'name' => 'Kaka',
            'email' => 'kaka@gmail.com',
            'password' => Hash::make('spasi1kali'),
          ]);  
        
          $user->assignRole('user');
  
    }
}
