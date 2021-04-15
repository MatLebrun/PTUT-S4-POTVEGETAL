<?php
require_once __DIR__.'/../../Core/Model.php';


class Data extends Model {

    public static function retreiveHumidityExt() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT date, humidity FROM `Ptuts4` WHERE date >= NOW() - INTERVAL 1 DAY ORDER BY date asc');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return json_encode($results);
    }

    public static function retreiveTempExt() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT date, temperature FROM `Ptuts4` WHERE date >= NOW() - INTERVAL 1 DAY ORDER BY date asc');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return json_encode($results);
    }


    public static function retreiveTempInt() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT date, temp_ground FROM `Ptuts4` WHERE date >= NOW() - INTERVAL 1 DAY ORDER BY date asc');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return json_encode($results);
    }

    public static function retreiveHumidityInt() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT date, moisture FROM `Ptuts4` WHERE date >= NOW() - INTERVAL 1 DAY ORDER BY date asc');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return json_encode($results);
    }

    public static function retreiveLast() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT * FROM `Ptuts4` ORDER BY date desc LIMIT 1');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }

}

