<?php

namespace simpleTicket\Http\Controllers\Ticket;

use Illuminate\Http\Request;
use simpleTicket\Http\Controllers\Controller;

class TicketController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ticket.index');
    }
}
