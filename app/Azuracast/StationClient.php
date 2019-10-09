<?php
declare(strict_types=1);

namespace App\AzuraCast;

use AzuraCast\Api\Exception;
use DateTime;

class StationClient extends AbstractStationClient
{
    /**
     * @return Dto\StationDto
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function get()
    {
        $stationData = $this->request('GET', sprintf(
            'station/%s',
            $this->stationId
        ));

        return $stationData;
    }

    /**
     * @return Dto\NowPlayingDto
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function nowPlaying()
    {
        $nowPlayingData = $this->request('GET', sprintf(
            'nowplaying/%s',
            $this->stationId
        ));

        return $nowPlayingData;
    }

    /**
     * @return Dto\StationStatusDto
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function status()
    {
        $stationStatusData = $this->request('GET', sprintf(
            'station/%s/status',
            $this->stationId
        ));

        return $stationStatusData;
    }

    /**
     * @return void
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function restart(): void
    {
        $this->request('POST', sprintf(
            'station/%s/restart',
            $this->stationId
        ));
    }

    /**
     * @param string $action
     *
     * @return void
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function frontend(string $action): void
    {
        $this->request('POST', sprintf(
            'station/%s/frontend/%s',
            $this->stationId,
            $action
        ));
    }

    /**
     * @param string $action
     *
     * @return void
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function backend(string $action): void
    {
        $this->request('POST', sprintf(
            'station/%s/backend/%s',
            $this->stationId,
            $action
        ));
    }

    /**
     * @param DateTime|null $start
     * @param DateTime|null $end
     *
     * @return Dto\SongHistoryDto[]
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function history(?DateTime $start = null, ?DateTime $end = null)
    {
        $songHistoryDataArray = $this->request('GET', sprintf(
            'station/%s/history',
            $this->stationId
        ));

        return $songHistoryDataArray;
    }

    /**
     * @return Dto\ListenerDto[]
     *
     * @throws Exception\AccessDeniedException
     * @throws Exception\ClientRequestException
     */
    public function listeners()
    {
        $listenerDataArray = $this->request('GET', sprintf(
            'station/%s/listeners',
            $this->stationId
        ));

        return $listenerDataArray;
    }

    /**
     * @return Playlists
     *
     */
    public function playlists()
    {
        $playlists = $this->request('GET', sprintf(
            'station/%s/playlists',
            $this->stationId
        ));

        return $playlists;
    }

    /**
     * @return Playlists
     *
     */
    public function playlist($playlistId)
    {
        $playlist = $this->request('GET', sprintf(
            'station/%s/playlist/%s',
            $this->stationId, $playlistId
        ));

        return $playlist;
    }
}
