<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTimeInvitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settingTimeInvite = new \App\Models\SettingTimeInvite();
        $settingTimeInvite->start_time = now();
        $settingTimeInvite->end_time = now();
        $settingTimeInvite->save();
    }
}
