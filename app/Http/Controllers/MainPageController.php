<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventReserveRequest;
use App\Services\TicketGatewayService;

class MainPageController extends Controller
{
    public function __construct(private readonly TicketGatewayService $ticketGatewayService)
    {
    }

    public function shows()
    {
        return $this->ticketGatewayService->getShows();
    }

    public function showWithEvents(int $showId)
    {
        return $this->ticketGatewayService->getShowWithEvents($showId);
    }

    public function eventWithPlaces(int $eventId)
    {
        return $this->ticketGatewayService->getEventWithPlaces($eventId);
    }

    public function eventReserve(int $eventId, EventReserveRequest $request)
    {
        return $this->ticketGatewayService->eventReserve(
            $eventId,
            $request->validated(['client_name']),
            $request->validated(['places']
            ));
    }
}
