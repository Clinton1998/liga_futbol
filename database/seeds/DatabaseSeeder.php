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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Liga::class)->times(5)->create();
        factory(\App\Equipo::class)->times(30)->create();
        factory(\App\Jugador::class)->times(330)->create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('liga_equipo')->insert([
                'liga_id' => \App\Liga::all()->random()->id,
                'equipo_id' => \App\Equipo::all()->random()->id,
            ]);
        }

    }
}
