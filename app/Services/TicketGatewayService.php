<?php

namespace App\Services;

use App\Library\TicketGateway\TicketGatewayApiAbstract;

class TicketGatewayService
{
    public function __construct(private readonly TicketGatewayApiAbstract $api)
    {
    }

    public function getShows()
    {
        return $this->api->shows();
    }

    public function getShowWithEvents(int $showId)
    {
        return $this->api->showWithEvents($showId);
    }

    public function getEventWithPlaces(int $eventId)
    {
        return $this->api->eventWithPlaces($eventId);
    }

    public function eventReserve(int $eventId, string $clientName, array $places)
    {
        return $this->api->eventReserve($eventId, $clientName, $places);
    }
}
