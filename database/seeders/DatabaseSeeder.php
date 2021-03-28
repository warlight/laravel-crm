<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
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
        $this->call([
            RolesSeeder::class,
        ]);
//        User::factory(5)->create();
//        Ticket::factory()->create();
        User::factory(1)->admin()->create();
        User::factory(5)
            ->client()
            ->has(Ticket::factory()->count(3))
            ->create();
    }
}
