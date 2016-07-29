<?php

namespace Lpphan;

use GuzzleHttp\Client;

/**
 * Description of Client
 *
 * @author lamphuong
 */
class HttpClient implements ClientInterface
{
    /**
     *
     * @var Client
     */
    protected $guzzle;

    /**
     * 
     * @param string $url
     */
    public function get($url)
    {
        return $this->guzzle->get($url);
    }

    public function setBaseUrl($baseUrl)
    {
        $this->guzzle = new Client(['base_uri' => $baseUrl]);
    }
}