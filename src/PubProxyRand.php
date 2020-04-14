<?php 
namespace Ozyab;

use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\RequestException;

/**
* PubProxyRand class
*
* @package    PubProxyRand Class
* @author     Maxim Yu <github.com/ozyab>
*/
class PubProxyRand {

	private const PUB_PROXY_URL = 'http://pubproxy.com/api/proxy?format=txt';

	/**
     * Get response as text/plain
     * @return text or null
     */
    public function fetch() : ?string {
		header('Content-Type: text/plain');
	    $client = new Client();
	    try {
            $response = $client->request('GET', self::PUB_PROXY_URL, [
                'headers' => [
                    'Accept'     => 'text/plain',
                ]
            ]);
            return $response->getBody() . PHP_EOL;
        } catch (RequestException $e) {
			return "Error: " . $e->getMessage() . PHP_EOL;
        }
		return null;
    }
}
