<?php

namespace App\Services\Api;

use App\Azuracast\Client;
use App\Services\Api\Contracts\AzuracastServiceInterface;

class AzuracastService extends BaseService implements AzuracastServiceInterface
{

    protected $api;

    public function __construct(){
        $this->api = Client::create(
            config('azuracast.host'),
            config('azuracast.api_key')
        );
    }

    public function getNowPlayings()
    {
        return api_success($this->api->nowPlaying());
    }

    public function getNowPlaying($stationId)
    {
        return api_success($this->api->station($stationId)->nowPlaying());
    }

    public function getAudioByStationId($stationId)
    {
        $link = $this->api->station($stationId)->nowPlaying()[0]['station']['listen_url'];
        return api_success($link);
    }

    public function getStations()
    {
        return api_success($this->api->stations());
    }

    public function getStation($stationId)
    {
        return api_success($this->api->station($stationId)->get());
    }

    public function getStationRequests($stationId)
    {
        return $this->api->station($stationId)->requests()->list();
    }

    public function postStationRequest($stationId, $requestId)
    {
        return $this->api->station($stationId)->requests()->submit($requestId);
    }

    public function getStationStatus($stationId)
    {
        return $this->api->station($stationId)->status();
    }

    public function postStationRestart($stationId)
    {
        return $this->api->station($stationId)->restart();
    }

    public function postStationFrontend($stationId, $action)
    {
        return $this->api->station($stationId)->frontend($action);
    }

    public function postStationBackend($stationId, $action)
    {
        return $this->api->station($stationId)->backend($action);
    }

    public function getStationHistory($stationId, $startTime, $endTime)
    {
        return $this->$api->station($stationId)->history($startTime, $endTime);
    }

    public function getStationListeners($stationId)
    {
        return $this->api->station($stationId)->listeners();
    }

    public function getStationPlaylists($stationId){
        return api_success($this->api->station($stationId)->playlists());
    }

    public function getStationPlaylist($stationId, $playlistId){
        return api_success($this->api->station($stationId)->playlist($playlistId));
    }
}
