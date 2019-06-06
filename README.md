# spain_province_seeder

composer require albertgpdev/spain_province_seeder

php artisan vendor:publish

composer dump-autoload

php artisan migrate

Add seeds to DatabaseSeeder.php

$this->call(SeedCountriesTable::class);
$this->call(SeedSpainStates::class);
$this->call(SeedSpainProvinces::class);
$this->call(SeedSpainCities::class);

