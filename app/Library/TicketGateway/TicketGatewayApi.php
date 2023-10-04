<?php

namespace App\Library\TicketGateway;

use Illuminate\Support\Facades\Http;

class TicketGatewayApi extends TicketGatewayApiAbstract
{
    private const METHOD_GET_SHOWS = '/shows';
    private const METHOD_GET_SHOW_WITH_EVENTS = '/shows/%d/events';
    private const METHOD_GET_EVENT_WITH_PLACES = '/events/%d/places';
    private const METHOD_EVENT_RESERVE = '/events/%d/reserve';

    public const TICKET_GATEWAY_HOST = 'https://leadbook.ru/test-task-api';

    public function shows()
    {
        return Http::withToken(getenv('TICKET_GATEWAY_TOKEN'))
            ->get($this->getHost() . self::METHOD_GET_SHOWS)
            ->json();
    }

    public function showWithEvents(int $showId)
    {
        return Http::withToken(getenv('TICKET_GATEWAY_TOKEN'))
            ->get($this->getHost() . sprintf(self::METHOD_GET_SHOW_WITH_EVENTS, $showId))
            ->json();
    }

    public function eventWithPlaces(int $eventId)
    {
        return Http::withToken(getenv('TICKET_GATEWAY_TOKEN'))
            ->get($this->getHost() . sprintf(self::METHOD_GET_EVENT_WITH_PLACES, $eventId))
            ->json();
    }

    public function eventReserve(int $eventId, string $clientName, array $places)
    {
        return Http::withToken(getenv('TICKET_GATEWAY_TOKEN'))
            ->post($this->getHost() . sprintf(self::METHOD_EVENT_RESERVE, $eventId), [
                'name' => $clientName,
                'places' => $places,
            ])
            ->json();
    }
}
