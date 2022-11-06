<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i=0; $i <100; $i++){

            $train = new Train();
        /*
            $departureTime = $faker->time();
            
            function getHour($time){
                
                $splitTime = explode(':', $time);

                return $splitTime[0];
                

            }

            function getArrivalTime(){
                
                $arrivalTime = $faker->time();

                $arrivalHour = getHour($arrivalTime);
                $departureHour = getHour($this->departureTime);

                if($arrivalHour < $departureHour ){

                    return $departureHour + 1 . ':00:00'; 

                }

            };
        */            
            $randomDate = $faker->date();

            $train->azienda = $faker->name();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->data_partenza = $randomDate;
            $train->data_arrivo = $randomDate;
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->isbn10();
            $train->numero_carrozze = $faker->numberBetween(1, 25);

            $train->save();
        }
        

    }
}
