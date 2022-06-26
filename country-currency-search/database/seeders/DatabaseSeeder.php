<?php

namespace Database\Seeders;

use App\ImplementationService\CountryCurrencyImplementationService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $countryimplementationservice = new CountryCurrencyImplementationService();

        $countryimplementationservice->uploadCurrencyIntoDb();

        $countryimplementationservice->uploadCountryIntoDb();


    }
}
