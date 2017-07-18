<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class Api
{
    public function getNews($source)
    {
        try {
            $client = new GuzzleHttpClient();
            // получаем новости с нескольких источников
            $apiRequst  = $client->request('GET','https://newsapi.org/v1/articles?source='.$source.'&sortBy=top&apiKey=4f4711b9aeb8446bbdcf392d935916b8' );
            $content  = \GuzzleHttp\json_decode($apiRequst->getBody()->getContents(), true);

            return $content['articles'];
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()){
                echo Psr7\str($e->getResponse());
            }
        }
    }

    public function getAllSources()
    {
        try {
            $client    = new GuzzleHttpClient();
            $apiRequst = $client->request('GET', 'https://newsapi.org/v1/sources?language=en');
            $content   = \GuzzleHttp\json_decode(
                $apiRequst->getBody()
                    ->getContents(),
                true
            );

            return $content['sources'];
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->getResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}
