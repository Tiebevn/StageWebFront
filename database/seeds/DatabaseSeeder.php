<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $device = new \App\Device();
        $device->name = "Test";
        $device->ip = "12.34.56.78";
        $device->created_at = \Carbon\Carbon::now();
        $device->updated_at = \Carbon\Carbon::now();
        $device->save();

        for ($i = 1; $i<=24; $i++) {
            $port = new \App\Port([
                'name' => 'G0/'.$i,
                'vlan' => 1,
                'device_id' => 1
            ]);
            $port->save();
        }
    }
}
