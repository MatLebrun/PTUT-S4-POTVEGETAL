<?php
require_once __DIR__.'/../../Core/Model.php';


class Data extends Model {

    public static function retreiveHumidity() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT datacapt, hum FROM `data` WHERE datacapt >= NOW() - INTERVAL 1 DAY ORDER BY datacapt asc');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return json_encode($results);
    }


    public static function retreiveTemp() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT datacapt, temp FROM `data` WHERE datacapt >= NOW() - INTERVAL 1 DAY ORDER BY datacapt asc');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return json_encode($results);
    }


    public static function retreiveLast() {
        $DB = static::DBConnect();
        $stmt  = $DB->prepare('SELECT * FROM `data` ORDER BY datacapt desc LIMIT 1');
        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }

}

