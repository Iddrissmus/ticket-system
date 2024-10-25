<?php

namespace App\Http\Controllers;
use App\Models\AmusementParkTicket;
use Illuminate\Http\Request;

class AmusementParkTicketController extends Controller
{   
    //Display the form for creating a new amusement park ticket.
    public function create()
    {
        return view('amusement_park_ticket_form');
    }

    public function store(Request $request)
    {
        // Define pricing based on ticket type
        $prices = [
            'general' => 20.00,
            'vip' => 50.00,
            'family' => 70.00,
        ];

        // Capture input and calculate price
        $ticketType = $request->input('ticket_type');
        $price = $prices[$ticketType] ?? 20.00;

        // Create an amusement park ticket
        $ticket = new AmusementParkTicket();
        $ticket->ticket_type = $ticketType;
        $ticket->price = $price;
        $ticket->save();

        return view('amusement_park_ticket_display', ['ticket' => $ticket]);
    }
}
