<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{   
    public function create()
    {
        return view('ticket_form');
    }

    public function store(Request $request)
    {
        // Define pricing based on car type
        $prices = [
            'small' => 10.00,
            'suv' => 15.00,
            'truck' => 20.00,
        ];

        // Capture input and calculate price
        $carType = $request->input('car_type');
        $price = $prices[$carType] ?? 10.00;

        // Create a ticket
        $ticket = new Ticket();
        $ticket->car_type = $carType;
        $ticket->price = $price;
        $ticket->save();

        // Pass ticket details to view for display
        return view('auth.details', ['ticket' => $ticket]);
    }
}
