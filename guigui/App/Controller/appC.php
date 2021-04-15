<?php

/**
 * 
 *  @name : appC.php
 *  
 *  @brief :  application pages
 * 
 * 
 */



// required models
require_once __DIR__.'/../../Core/PopUp.php';
require_once __DIR__.'/../Model/Data.php';


 class AppC {
    /**
     *  @name : temperatureExtPage
     *  @param : void
     * 
     *  @return : void
     *  
     *  @brief : Historique des température extérieure
     * 
     */
    public function temperatureExtPage() {
        $listTemp = Data::retreiveTempExt();
        View::render('Temperature/page', ['listTemperature' => $listTemp]);
    }// public function createCar()

    
    /**
     *  @name : humidityExtPage
     *  @param : void
     * 
     *  @return : void
     *  
     *  @brife : Historique de l'humidité extérieure
     * 
     */
    public function humidityExtPage() {
        $listTemp = Data::retreiveHumidityExt();
        View::render('Humidite/page', ['listTemperature' => $listTemp]);
    }// public function createCar()

    /**
     *  @name : temperatureIntPage
     *  @param : void
     * 
     *  @return : void
     *  
     *  @brife : Historique de la température intérieure
     * 
     */
    public function temperatureIntPage() {
        $listTemp = Data::retreiveTempInt();
        View::render('TemperatureInt/page', ['listTemperature' => $listTemp]);
    }// public function createCar()

    /**
     *  @name : humidityIntPage
     *  @param : void
     * 
     *  @return : void
     *  
     *  @brife : Historique de l'humidité intérieure
     * 
     */
    public function humidityIntPage() {
        $listTemp = Data::retreiveHumidityInt();
        View::render('HumiditeInt/page', ['listTemperature' => $listTemp]);
    }// public function createCar()


    public function homePage() {
        $listInfos = Data::retreiveLast();
        View::render('homepage/page', ['listInfo' => $listInfos]);
    }
}
