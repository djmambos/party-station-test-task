<?php

namespace App\Library\TicketGateway;

abstract class TicketGatewayApiAbstract
{
    protected const TICKET_GATEWAY_HOST = '';

    abstract public function shows();

    abstract public function showWithEvents(int $showId);

    abstract public function eventWithPlaces(int $eventId);

    abstract public function eventReserve(int $eventId, string $clientName, array $places);

    protected function getHost(): string
    {
        if (empty(static::TICKET_GATEWAY_HOST)) {
            throw new \RuntimeException('Host is empty!');
        }

        return static::TICKET_GATEWAY_HOST;
    }
}
