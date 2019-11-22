<?php
namespace spm\client;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class Guzzle extends Client
{
    /**
     * @param $url
     * @param $data
     */
    public function send($url, $data)
    {
        $client = new GuzzleClient(['base_uri' => $url]);
        try {
            $res = $client->request("POST", '', [
                'form_params' => $data,
            ]);
        } catch (GuzzleException $e) {
             // echo $e->getResponse()->getBody();
        }

    }
}