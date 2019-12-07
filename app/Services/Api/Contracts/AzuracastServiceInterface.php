<?php
namespace App\Services\Api\Contracts;

interface AzuracastServiceInterface extends BaseServiceInterface
{
    /*
    =============================================
    * Stations: Nowplaying
    =============================================
    */

    public function getNowPlayings();
    public function getNowPlaying($stationId);
    public function getAudioByStationId($stationId);

    /*
    =============================================
    * Stations: General
    =============================================
    */

    public function getStations();
    public function getStation($stationId);

    /*
    =============================================
    * Stations: Song Requests
    =============================================
    */

    public function getStationRequests($stationId);
    public function postStationRequest($stationId, $requestId);

    /*
    =============================================
    * Stations: Service Control
    =============================================
    */

    public function getStationStatus($stationId);
    public function postStationRestart($stationId);
    public function postStationFrontend($stationId, $action);
    public function postStationBackend($stationId, $action);

    /*
    =============================================
    * Stations: History
    =============================================
    */

    public function getStationHistory($stationId, $startTime, $endTime);

    /*
    =============================================
    * Stations: Listeners
    =============================================
    */

    public function getStationListeners($stationId);
    /*
    =============================================
    * Stations: Playlists
    =============================================
    */

    public function getStationPlaylists($stationId);
    public function getStationPlaylist($stationId, $playlistId);

}
