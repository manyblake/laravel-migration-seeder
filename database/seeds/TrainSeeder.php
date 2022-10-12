<?php

use Add\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
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
                'azienda' => 'Trenord',
                'stazione_di_partenza' => 'Milano Centrale',
                'stazione_di_arrivo' => 'Torino Porta Nuova',
                'orario_di_partenza' => '14:03',
                'orario_di_arrivo' => '16:25',
                'codice_treno' => rand(10000, 32768),
                'numero_carrozze' => rand(7, 10),
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();

            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];

            $newTrain->save();
        }
    }
}
