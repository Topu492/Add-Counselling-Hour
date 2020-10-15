<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AreaTableSeeder::class,
            CategoryTableSeeder::class,
            RoleTableSeeder::class,
            SiteSettingsTableSeeder::class,
            UsersTableSeeder::class,
            TeacherTableSeeder::class,
            StatusTableSeeder::class,
            StudentTableSeeder::class,
        ]);
    }
}
