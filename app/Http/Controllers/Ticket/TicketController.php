<?php

namespace simpleTicket\Http\Controllers\Ticket;

use Illuminate\Http\Request;
use simpleTicket\Http\Controllers\Controller;
use simpleTicket\Ticket;
use simpleTicket\TicketThread;

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
        $tickets = auth()->user()->tickets;
        return view('ticket.index', compact('tickets'));
    }

    public function add()
    {
        return view('ticket.add');
    }

    public function store(Request $request)
    {
        $t = new Ticket();
        $t->owner_id = auth()->user()->id;
        $t->assignee_id = null;
        $t->title = $request->get('title');
        $t->description = $request->get('description');
        $t->status = 'OPEN';
        $t->save();

        $tt = new TicketThread();
        $tt->ticket_id = $t->id;
        $tt->user_id = $t->owner_id;
        $tt->description = 'درخواست را ایجاد کرد';
        $tt->type = 1;
        $tt->save();

        session()->flash('status', 'درخواست شما با موفقیت ثبت شد');
        return redirect(route('ticket.index'));
    }

    public function show(Request $request, Ticket $ticket)
    {
        return view('ticket.show', compact('ticket'));
    }

    public function reply(Request $request, Ticket $ticket)
    {
        $ticket->touch();

        $tt = new TicketThread();
        $tt->ticket_id = $ticket->id;
        $tt->user_id = auth()->user()->id;
        $tt->description = $request->get('description');
        $tt->type = 0;
        $tt->save();

        session()->flash('status', 'پاسخ شما با موفقیت ثبت شد');
        return redirect(route('ticket.show', [$ticket]));
    }
}
