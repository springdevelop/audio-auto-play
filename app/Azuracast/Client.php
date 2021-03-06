<?php
declare(strict_types=1);

namespace App\AzuraCast;
use GuzzleHttp\Psr7\Uri;

class Client extends AbstractClient
{

    /**
     * @return Dto\NowPlayingDto[]
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function nowPlaying()
    {
        return $this->request('GET', 'nowplaying');
    }

    /**
     * @return Dto\StationDto[]
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function stations()
    {
        return $this->request('GET', 'stations');
    }

    /**
     * @param string|int $stationId
     *
     * @return StationClient
     */
    public function station($stationId): StationClient
    {
        return new StationClient($this->httpClient, $stationId);
    }

    /**
     * @param string $host
     * @param string|null $apiKey
     * @param \GuzzleHttp\Client|null $existingClient An existing HTTP client to pull configuration from.
     *
     * @return Client
     */
    public static function create(
        string $host,
        ?string $apiKey = null,
        ?\GuzzleHttp\Client $existingClient = null
    ): self {
        if ($existingClient instanceof \GuzzleHttp\Client) {
            $options = $existingClient->getConfig();
        } else {
            $options = [];
        }

        $baseUri = new Uri($host);
        if (empty($baseUri->getScheme())) {
            $baseUri = $baseUri->withScheme('http');
        }
        $baseUri = $baseUri->withPath('/api/');

        $options['base_uri'] = (string)$baseUri;

        $options['allow_redirects'] = true;
        $options['http_errors'] = false;

        if (null !== $apiKey) {
            $options['headers']['Authorization'] = 'Bearer ' . $apiKey;
        }

        $httpClient = new \GuzzleHttp\Client($options);
        return new self($httpClient);
    }
}
