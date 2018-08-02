<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
        array('id' => '1','name' => 'Tirane','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '2','name' => 'Durres','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '3','name' => 'Elbasan','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '4','name' => 'Kavaje','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '5','name' => 'Struge','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '6','name' => 'Lezhe','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '7','name' => 'Berat','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '8','name' => 'Prishtine','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '9','name' => 'Gramsh','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '10','name' => 'Kukes','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '11','name' => 'Kruje','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '12','name' => 'Lushnje','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '13','name' => 'Vlore','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '14','name' => 'Fier','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '15','name' => 'Tepelene','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '16','name' => 'Permet','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '17','name' => 'Sarande','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '18','name' => 'Pogradec','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '19','name' => 'Librazhd','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '20','name' => 'Bulqize','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '21','name' => 'Tropoje','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '22','name' => 'Mat','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '23','name' => 'Kurbin','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '24','name' => 'Has','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '25','name' => 'Mirdite','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '26','name' => 'Gramsh','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '27','name' => 'Devoll','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '28','name' => 'Skrapar','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '29','name' => 'Kucove','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '30','name' => 'Mallakaster','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '31','name' => 'Gjirokaster','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'),
        array('id' => '32','name' => 'Delvine','visible' => '1','created_at' => '2018-07-05 11:45:44','updated_at' => '2018-07-05 11:45:44'));

        DB::table('cities')->insert($cities);
    }
}
