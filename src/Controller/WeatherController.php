<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use WeatherModel;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class WeatherController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @Route("/weather/montaigne", name="weather_montaigne")
     */

    public function home()
    {
        $weatherModel = new WeatherModel();
        $weathers = $weatherModel->getWeatherData();
        return $this->render('weather/homepage.html.twig' , [
            "weathers"=>$weathers
        ]);
    }
    /**
     * @Route("/", name="show_montaine")
     * @Route("/weather/montaigne", name="weather_montaigne")
     */

    public function showMontaine()
    {
        $weatherModel = new WeatherModel();
        $weathers = $weatherModel->getWeatherData();
        return $this->render('weather/montaigne.html.twig' , [
            "weathers"=>$weathers
        ]);
    }
    /**
     * @Route("/", name="show_beatch")
     * @Route("/weather/beatch", name="weather_beatch")
     */

    public function showBeatch()
    {
        $weatherModel = new WeatherModel();
        $weathers = $weatherModel->getWeatherData();
        return $this->render('weather/beatch.html.twig' , [
            "weathers"=>$weathers
        ]);
    }


    /**
     * @Route("/weather/{id}", name="weather_detail", requirements={"id"="\d+"})
     */
    public function WeatherDetail(int $id, SessionInterface $session) {

        $session->set('last_weather_id', $id);
        $weatherModel= new WeatherModel();
        $weather = $weatherModel->getWeather($id);

        if($weather==false){
            throw  $this->createNotFoundException("Cette ville n'existe pas");
        }

        return $this->render('weather/detail.html.twig', [
            "weather" => $weather]);
    }
}
