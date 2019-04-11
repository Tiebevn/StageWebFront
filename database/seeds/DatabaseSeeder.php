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
        $devicelist = [];
        for ($i = 1; $i <=40; $i++) {
            $device = new \App\Device();
            $device->name = "HSR-".$i;
            $device->ip = "10.34.5.".$i;
            $device->created_at = \Carbon\Carbon::now();
            $device->updated_at = \Carbon\Carbon::now();
            $device->save();
            $devicelist[$i] = $device;
        }

        for ($i = 1; $i <= sizeof($devicelist); $i++) {
            for ($j = 1; $j<=48; $j++) {
                $port = new \App\Port([
                    'name' => 'G0/'.$j,
                    'vlan' => 1,
                    'device_id' => $i
                ]);
                $port->save();
            }
        }


    }
}
