<?php

use Illuminate\Database\Seeder;

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
        $user_one = new User();
        $user_one->role_id = 1;
        $user_one->name = 'Anthony Ambunet';
        $user_one->about = 'My name is Anthony Ambunet';
        $user_one->address = '777 Ambunet Building, Katy, TX';
        $user_one->location = 'Katy, TX';
        $user_one->tel = '2817778888';
        $user_one->cert_Level = 'EMT - I';
        $user_one->licence_number = 'LI787878';
        $user_one->availability = 'Yes';
        $user_one->website = 'myambunet.com';
        $user_one->facebook = 'facebook.com/anthony.ambunet';
        $user_one->twitter = 'twitter.com/myambunet';
        $user_one->github = 'github.com/myambunet';
        $user_one->username = 'Anthony';
        $user_one->email = 'anthonymakanju@ambu-net.com';
        $user_one->password = bcrypt('Testing');
        $user_one->save();
    }
}
