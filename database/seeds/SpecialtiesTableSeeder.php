<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = array(
            array('id' => '1','name' => 'Alergolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '5','name' => 'Anatomopatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '7','name' => 'Aneztesist','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '8','name' => 'Dermatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '9','name' => 'Endokrinolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '11','name' => 'Endoscopi','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '12','name' => 'Ekografi','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '13','name' => 'Farmacist','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '14','name' => 'Fizioterapist','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '15','name' => 'Gastroenterolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '17','name' => 'Gastrohepatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '18','name' => 'Gastrolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '20','name' => 'Gastropatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '21','name' => 'Gjinekolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '22','name' => 'Imazheri','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '23','name' => 'Imunolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '24','name' => 'Kardiolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '26','name' => 'Kirurg Ortoped','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '28','name' => 'Mjek Familje','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '30','name' => 'Mjeksi e Pergjithshme','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '32','name' => 'Mjeksi Interne','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '34','name' => 'Mjekesi Hiperbarike','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '36','name' => 'Netrolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '37','name' => 'Neurolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '39','name' => 'Gjineokolog Obsterik','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '41','name' => 'Onkolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '42','name' => 'Otorinolaringolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '44','name' => 'Patolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '45','name' => 'Pediater','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '46','name' => 'Pneumolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '47','name' => 'Reumatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '48','name' => 'Reanimator','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '49','name' => 'Stomatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '51','name' => 'Toksikologe','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '52','name' => 'Toksikolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '53','name' => 'Traumatolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
            array('id' => '54','name' => 'Urolog','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44')
        );

        DB::table('specialties')->insert($specialties);

    }
}
