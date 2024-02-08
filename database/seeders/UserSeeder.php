<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'password' => bcrypt('spasi1kali'),
          ]);
        
        $agent = User::create([
        'name' => 'Alfian Syarif',
        'email' => 'alfiansyarif@gmail.com',
        'password' => bcrypt('spasi1kali'),
        ]);

        $user = User::create([
            'name' => 'Kaka',
            'email' => 'kaka@gmail.com',
            'password' => bcrypt('spasi1kali'),
          ]);  
  
    }
}
