<?php

use Illuminate\Database\Seeder;
use Albertgpdev\SpainProvinceSeeder\Models\Province;

class SeedSpainProvinces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            "Álava",
            "Albacete",
            "Alicante",
            "Almería",
            "Asturias",
            "Ávila",
            "Badajoz",
            "Barcelona",
            "Burgos",
            "Cáceres",
            "Cádiz",
            "Cantabria",
            "Castellón",
            "Ciudad Real",
            "Córdoba",
            "Cuenca",
            "Gerona",
            "Granada",
            "Guadalajara",
            "Guipúzcoa",
            "Huelva",
            "Huesca",
            "Islas Baleares",
            "Jaén",
            "La Coruña",
            "La Rioja",
            "Las Palmas",
            "León",
            "Lérida",
            "Lugo",
            "Madrid",
            "Málaga",
            "Murcia",
            "Navarra",
            "Orense",
            "Palencia",
            "Pontevedra",
            "Salamanca",
            "Santa Cruz de Tenerife",
            "Segovia",
            "Sevilla",
            "Soria",
            "Tarragona",
            "Teruel",
            "Toledo",
            "Valencia",
            "Valladolid",
            "Vizcaya",
            "Zamora",
            "Zaragoza"
        ];

        foreach($provinces as $province) {
            Province::create(['name' => $province]);
        }
    }
}
