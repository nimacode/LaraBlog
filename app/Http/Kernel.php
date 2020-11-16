<?php

use GuzzleHttp;
class Adsl extends Shahkar {

    public static $createActualServiceRoute = "";
    public static $createLegalServiceRoute = "";

    public static function createActualService($params) {
        $data = json_encode($params);

        if ($params['nationality'] !== 'iranian') {
            self::createActualService = ""; // TODO Non Iranian Route
        }

        $client = new GuzzleHttp\Client();
        $res = $client->request('POST', self::createActualService, [
                'auth' => "Basic" . $this->token;
            
        ]);

        if ($res->getStatusCode() != 200) {
            //TODO throw exception
        }
        //TODO return success alert
    }


    public static function createLegalService($params) {
        $data = json_encode($params);

        if ($params['nationality'] !== 'iranian') {
            self::createLegalServiceRoute = ""; // TODO Non Iranian Route
        }

        $client = new GuzzleHttp\Client();
        $res = $client->request('POST', self::createLegalServiceRoute, [
            'auth' => $this->token;
            
        ]);
        
        if ($res->getStatusCode() != 200) {
            //TODO throw exception
        }
        //TODO return success alert
    }


    public static function updateActualService($params) {
        $data = json_encode($params);

        if ($params['nationality'] !== 'iranian') {
            self::createActualService = ""; // TODO Non Iranian Route
        }

        $client = new GuzzleHttp\Client();
        $res = $client->request('POST', self::createActualService, [
                'auth' => "Basic" . $this->token;
            
        ]);

        if ($res->getStatusCode() != 200) {
            //TODO throw exception
        }
        //TODO return success alert
    }


    public static function updateLegalService($params) {
        $data = json_encode($params);

        if ($params['nationality'] !== 'iranian') {
            self::createLegalServiceRoute = ""; // TODO Non Iranian Route
        }

        $client = new GuzzleHttp\Client();
        $res = $client->request('POST', self::createLegalServiceRoute, [
            'auth' => $this->token;
            
        ]);
        
        if ($res->getStatusCode() != 200) {
            //TODO throw exception
        }
        //TODO return success alert
    }



}
