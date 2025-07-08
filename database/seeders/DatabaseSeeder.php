<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //make seeders for users and members
        DB::table('users')->insert([
            ['fullname' => 'Admin User', 'username' => 'admin', 'phone' => '1234567890', 'password' => bcrypt('password'), 'access' => 0],
            ['fullname' => 'Regular User', 'username' => 'user', 'phone' => '0987654321', 'password' => bcrypt('password'), 'access' => 1],
        ]);

        DB::table('members')->insert([
            ['name' => 'Author One', 'address' => 'Address One', 'phone' => '1111111111', 'status' => 1, 'payment_receipt' => 'receipt1.jpg', 'photo' => 'photo1.jpg'],
            ['name' => 'Author Two', 'address' => 'Address Two', 'phone' => '2222222222', 'status' => 1, 'payment_receipt' => 'receipt2.jpg', 'photo' => 'photo2.jpg'],
            ['name' => 'Author Three', 'address' => 'Address Three', 'phone' => '3333333333', 'status' => 1, 'payment_receipt' => 'receipt3.jpg', 'photo' => 'photo3.jpg'],
            ['name' => 'Author Four', 'address' => 'Address Four', 'phone' => '4444444444', 'status' => 1, 'payment_receipt' => 'receipt4.jpg', 'photo' => 'photo4.jpg'],
        ]);
    }
}
