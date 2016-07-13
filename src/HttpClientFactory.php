<?php
namespace Vzaar;

use Guzzle\Http\Client;
use GuzzleHttp\Adapter\AdapterInterface;
use GuzzleHttp\Adapter\StreamAdapter;
use GuzzleHttp\Message\MessageFactory;

class HttpClientFactory
{
    /**
     * Returns default adapter for new client.
     *
     * @return AdapterInterface
     */
    public static function getAdapter()
    {
        return new StreamAdapter(new MessageFactory());
    }

    /**
     * Returns guzzle http client with chosen adapter. By default uses php http stream wrapper.
     *
     * @return Client
     */
    public static function create()
    {
        return new Client(
            '',
            [
                'adapter' => static::getAdapter(),
                'exceptions' => false
            ]
        );
    }
}