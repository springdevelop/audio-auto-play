<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\Api\Contracts\AzuracastServiceInterface;

/**
 * @authenticated
 *
 * APIs for azuracast
 */
class AzuracastController extends BaseController
{

    protected $service;

    public function __construct(AzuracastServiceInterface $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * @group Azuracast : Nowplaying
     * nowplayings
     * @method get
     */
    public function getNowplayings()
    {
        return $this->service->getNowPlayings();
    }

    /**
     * @group Azuracast : Nowplaying
     * nowplaying
     * @method get
     * @bodyParam stationId integer required
     */
    public function getNowplaying($stationId)
    {
         return $this->service->getNowPlaying($stationId);
    }

    /*
    =============================================
    * Stations: General
    =============================================
    */

    /**
     * @group Stations : General
     * stations
     * @method get
     * Returns a list of stations
     */
    public function getStations()
    {
         return $this->service->getStations();
    }

    /**
     * @group Stations : General
     * station
     * @method get
     * @bodyParam $stationId integer required
     * Return information about a single station
     */
    public function getStation($stationId)
    {
         return $this->service->getStation($stationId);
    }

    /**
     * @group Stations : Song Request
     * songs-request
     * @method get
     * @bodyParam stationId integer required
     * @bodyParam requestId integer required
     * Return information about a single station
     */
    public function getStationRequests($stationId, $requestId){
        return $this->service->getStationRequests($stationId);
    }

    /**
     * @group Stations : Song Request
     * song-request
     * @method get
     * @bodyParam stationId integer required
     * @bodyParam requestId integer required
     * Return information about a single station
     */
    public function postStationRequest($stationId, $requestId){
        return $this->service->getStationRequests($stationId, $requestId);
    }

    /*
    =============================================
    * Stations: Service Control
    =============================================
    */

    /**
     * @group Stations : Service Control
     * status
     * @method get
     * @bodyParam stationId integer required
     * Retrieve the current status of all serivces associated with the radio broadcast
     */
    public function getStationStatus($stationId)
    {
         return $this->service->getStationStatus($stationId);
    }

    /**
     * @group Stations : Service Control
     * restart
     * @method post
     * @bodyParam stationId integer required
     * Restart all services associated with the radio broadcast
     */
    public function postStationRestart($stationId)
    {
         return $this->service->postStationRestart($stationId);
    }

    /**
     * @group Stations : Service Control
     * frontend
     * @method post
     * @bodyParam stationId integer required
     * @bodyParam action string required (start, stop, restart)
     * Perform service control actions on the radio frontend (Icecast, SHOUTcast, etc.)
     */
    public function postStationFrontend($stationId, $action)
    {
         return $this->service->postStationFrontend($stationId);
    }

    /**
     * @group Stations : Service Control
     * backend
     * @method post
     * @bodyParam stationId integer required
     * @bodyParam action string required (start, stop, restart)
     * Perform service control actions on the radio backend (Liquidsoap)
     */
    public function postStationBackend($stationId, $action)
    {
         return $this->service->postStationBackend($stationId);
    }

    /*
    =============================================
    * Stations: History
    =============================================
    */

    /**
     * @group Stations : History
     * history
     * @method get
     * @bodyParam stationId integer required
     * Return song playback history items for a given station
     */
    public function getStationHistory($stationId)
    {
         return $this->service->getStationHistory($stationId);
    }

    /*
    =============================================
    * Stations: Listeners
    =============================================
    */

    /**
     * @group Stations : Listeners
     * listeners
     * @method get
     * @bodyParam stationId integer required
     * Return detailed information about current listeners
     */
    public function getStationListeners($stationId)
    {
         return $this->service->getStationListeners($stationId);
    }

    /**
     * @group Stations : Playlist
     * listeners
     * @method get
     * @bodyParam stationId integer required
     * Return detailed information about current listeners
     */
    public function getStationPlaylists($stationId)
    {
         return $this->service->getStationPlaylists($stationId);
    }

    /**
     * @group Stations : Playlist
     * listeners
     * @method get
     * @bodyParam stationId integer required
     * Return detailed information about current listeners
     */
    public function getStationPlaylist($stationId, $playlistId)
    {
         return $this->service->getStationPlaylist($stationId, $playlistId);
    }

}
