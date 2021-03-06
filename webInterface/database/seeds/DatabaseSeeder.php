<?php

use Illuminate\Database\Seeder;
use App\Device;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DeviceTableSeeder');
        $this->command->info('Device table seeded!');
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }
}

class DeviceTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('devices')->delete();

        Device::create(['id' => '1010101', 'activeFlag' => '0']);
        Device::create(['id' => '2020202', 'activeFlag' => '1']);
        Device::create(['id' => '3030303', 'activeFlag' => '0']);
        Device::create(['id' => '4040404', 'activeFlag' => '1']);
    }

}

class UserTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'jordan',
            'email' => 'jordan@jordan.com',
            'password' => bcrypt('jordan'),
        ]);
    }
}
