<?php

use Illuminate\Database\Seeder;
use Albertgpdev\SpainProvinceSeeder\Models\State;

class SeedSpainStates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();
            
        $states = array(
            [1, 'andalucia', 'Andalucía', 6152],
            [2, 'aragon', 'Aragón', 8113],
            [3, 'principado-de-asturias', 'Principado de Asturias', 5009],
            [4, 'illes-balears', 'Illes Balears', 836],
            [5, 'canarias', 'Canarias', 5252],
            [6, 'cantabria', 'Cantabria', 5823],
            [7, 'castilla-y-leon', 'Castilla y León', 7415],
            [8, 'castilla-la-mancha', 'Castilla - La Mancha', 6934],
            [9, 'cataluna', 'Cataluña', 881],
            [10, 'comunitat-valenciana', 'Comunitat Valenciana', 7219],
            [11, 'extremadura', 'Extremadura', 712],
            [12, 'galicia', 'Galicia', 2198],
            [13, 'comunidad-de-madrid', 'Comunidad de Madrid ', 4356],
            [14, 'region-de-murcia', 'Región de Murcia', 4588],
            [15, 'comunidad-foral-de-navarra', 'Comunidad Foral de Navarra', 4815],
            [16, 'pais-vasco', 'País Vasco', 46],
            [17, 'la-rioja', 'La Rioja', 4124],
            [18, 'ceuta', 'Ceuta', 8115],
            [19, 'melilla', 'Melilla', 8116]
        );

        // Create Spanish states
        foreach ($states as $state) {
            State::create([
                'id' => $state[0],
                'slug' => $state[1],
                'name' => $state[2],
                'capital_city_id' => $state[3],
                'country_id' => 60
            ]);
        }
    }
}
