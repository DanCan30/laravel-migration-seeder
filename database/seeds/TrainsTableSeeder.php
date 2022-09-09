<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "agency" => "Frecciarossa",
                "departureRailway" => "Roma Termini",
                "arrivalRailway" => "Milano Centrale",
                "departureHour" => "14:50",
                "arrivalHour" => "17:58",
                "trainCode" => "9540",
                "carriageNo" => "12",
                "isTrainLate" => true,
                "isTrainDeleted" => false,
            ],
            [
                "agency" => "Ferrovie dello Stato Trenitalia",
                "departureRailway" => "Roma Termini",
                "arrivalRailway" => "Pisa Centrale",
                "departureHour" => "14:12",
                "arrivalHour" => "18.15",
                "trainCode" => "4134",
                "carriageNo" => "7",
                "isTrainLate" => true,
                "isTrainDeleted" => false,
            ],
            [
                "agency" => "Italo",
                "departureRailway" => "Napoli Centrale",
                "arrivalRailway" => "Firenze Santa Maria Novella",
                "departureHour" => "8:20",
                "arrivalHour" => "11.17",
                "trainCode" => "9920",
                "carriageNo" => "18",
                "isTrainLate" => false,
                "isTrainDeleted" => false,
            ],
            [
                "agency" => "Italo",
                "departureRailway" => "Bari Centrale",
                "arrivalRailway" => "Bologna Centrale",
                "departureHour" => "13.00",
                "arrivalHour" => "20.03",
                "trainCode" => "9952",
                "carriageNo" => "18",
                "isTrainLate" => false,
                "isTrainDeleted" => true,
            ],
            [
                "agency" => "Frecciargento",
                "departureRailway" => "Salerno",
                "arrivalRailway" => "Reggio Di Calabria Centrale",
                "departureHour" => "10.31",
                "arrivalHour" => "14.06",
                "trainCode" => "8333",
                "carriageNo" => "20",
                "isTrainLate" => true,
                "isTrainDeleted" => false,
            ],
        ];

        foreach($trains as $train) {
            $newTrain = new Train();
            $newTrain->agency = $train["agency"];
            $newTrain->departure_railway = $train["departureRailway"];
            $newTrain->arrival_railway = $train["arrivalRailway"];
            $newTrain->departure_hour = $train["departureHour"];
            $newTrain->arrival_hour = $train["arrivalHour"];
            $newTrain->train_code = $train["trainCode"];
            $newTrain->carriage_number = $train["carriageNo"];
            $newTrain->is_train_late = $train["isTrainLate"];
            $newTrain->is_train_deleted = $train["isTrainDeleted"];
            $newTrain->save();

        };
    }
}
