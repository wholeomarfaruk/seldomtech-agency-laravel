<?php

namespace Database\Seeders;

use App\Models\Panel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PanelSeeder::class,
            RoleSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user = User::find(1);
        $user->assignRole('superadmin');

        //Sync all panels to this user
        $user->panels()->sync(
            Panel::all()->pluck('id')->toArray()
        );
    }
}
