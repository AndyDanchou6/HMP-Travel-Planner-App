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

        $avatarPath1 = 'avatars/maki.jpg';
        $avatarPath2 = 'avatars/1.jpg';
        $avatarPath3 = 'avatars/logo.jpg';


        User::factory()->create([
            'role' => 'Admin',
            'avatar' => $avatarPath1,
            'name' => 'E-Mart',
            'email' => 'e.mart@admin.me',
            'phone' => 639638753244,
            'fb_link' => 'https://www.facebook.com/',
            'address' => 'Rizal Street, Sogod, Southern, Leyte',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory()->create([
            'role' => 'Admin',
            'avatar' => $avatarPath2,
            'name' => 'Melchard Lina',
            'email' => 'e.mart@eridiano.admin',
            'phone' => 639232423,
            'fb_link' => 'https://www.facebook.com/',
            'address' => 'Kagwapo Street, kapogian, Southern Gwapo',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory()->create([
            'role' => 'Customer',
            'avatar' => $avatarPath3,
            'name' => 'Elessa Fermano',
            'email' => 'esang@ungo.com',
            'phone' => 639232423,
            'fb_link' => 'https://www.facebook.com/',
            'address' => 'Kagwapo Street, kagwapahan, Southern Gwapa',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory()->create([
            'role' => 'Courier',
            'avatar' => $avatarPath3,
            'name' => 'Antonette Lozares',
            'email' => 'tonette@ungo.com',
            'phone' => 639232423,
            'fb_link' => 'https://www.facebook.com/',
            'address' => 'Kagwapo Street, kagwapahan, Southern Gwapa',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory()->create([
            'role' => 'Courier',
            'avatar' => $avatarPath3,
            'name' => 'Janine Rosales',
            'email' => 'anine@ungo.com',
            'phone' => 639232423,
            'fb_link' => 'https://www.facebook.com/',
            'address' => 'Kagwapo Street, kagwapahan, Southern Gwapa',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
