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
     *  @name : temperaturePage
     *  @param : void
     * 
     *  @return : void
     *  
     *  @brief : Historique des température
     * 
     */
    public function temperaturePage() {
        $listTemp = Data::retreiveTemp();
        View::render('Temperature/page', ['listTemperature' => $listTemp]);
    }// public function createCar()

    
    /**
     *  @name : humidityPage
     *  @param : void
     * 
     *  @return : void
     *  
     *  @brife : Historique de l'humidité
     * 
     */
    public function humidityPage() {
        $listTemp = Data::retreiveHumidity();
        View::render('Humidite/page', ['listTemperature' => $listTemp]);
    }// public function createCar()


    public function homePage() {
        $listInfos = Data::retreiveLast();
        View::render('homepage/page', ['listInfo' => $listInfos]);
    }
}
