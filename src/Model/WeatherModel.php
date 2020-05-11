<?php

class WeatherModel
{
    public static function getWeatherData()
    {
        return self::$weatherData;
    }

    public static function getWeatherByCityIndex($index)
    {
        if (!isset(self::$weatherData[$index])) {
            return false;
        }

        return self::$weatherData[$index];
    }
    public function getWeather($id) {
        // Je recupère le tabelau complet
        $weathers = $this->getWeatherData();

        // je verifie que l'id existe
        if(!isset($weathers[$id])) {
            return false;
        }

        // je renvoi l'oiseau correspondant
        return $weathers[$id];
    }
    private static $weatherData = [
        [
            'city' => 'Annecy',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => '-4°',
            'max' => '2°',
        ],

        [
            'city' => 'Biarritz',
            'weather' => 'rain',
            'date' => '29-01-2020',
            'min' => '-5°',
            'max' => '0°',
        ],

        [
            'city' => 'Bordeaux',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => '0°',
            'max' => '10°',
        ],

        [
            'city' => 'Bruxelles',
            'weather' => 'storm',
            'date' => '29-01-2020',
            'min' => '-3°',
            'max' => '5°',
        ],

        [
            'city' => 'Chambéry',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => '-2°',
            'max' => '6°',
        ],

        [
            'city' => 'Grenoble',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => '-3°',
            'max' => '3°',
        ],

        [
            'city' => 'Lille',
            'weather' => 'clouds',
            'date' => '29-01-2020',
            'min' => '1°',
            'max' => '7°',
        ],

        [
            'city' => 'Lyon',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => '3°',
            'max' => '12°',
        ],

        [
            'city' => 'Marseille',
            'weather' => 'sun',
            'date' => '16-05-2020',
            'min' => '17°',
            'max' => 28,
        ],

        [
            'city' => 'Metz',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => '2°',
            'max' => '7°',
        ],

        [
            'city' => 'Montpellier',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => '3°',
            'max' => '11°',
        ],

        [
            'city' => 'Nantes',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => '0°',
            'max' => '6°',
        ],

        [
            'city' => 'Nice',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => '-3°',
            'max' => '3°',
        ],

        [
            'city' => 'Paris',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => '2°',
            'max' => '12°',
        ],

        [
            'city' => 'Rouen',
            'weather' => 'sun',
            'date' => '29-01-2020',
            'min' => '0°',
            'max' => '8°',
        ],

        [
            'city' => 'Toulouse',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => '1°',
            'max' => '9°',
        ],
    ];


}
