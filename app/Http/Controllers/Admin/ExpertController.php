<?php

namespace simpleTicket\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use simpleTicket\Http\Controllers\Controller;
use simpleTicket\Role;
use simpleTicket\Ticket;
use simpleTicket\TicketThread;
use simpleTicket\User;

class ExpertController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function unAssignee()
    {
        $tickets = Ticket::UnAssignees();
        $experts = User::getExperts();

        return view('admin.expert.un_assignee', compact('tickets', 'experts'));
    }

    public function doAssignee(Request $request, Ticket $ticket)
    {
        $u = User::find($request->get('user'));
        $ticket->assignee_id = $u->id;
        $ticket->save();

        $ticket->touch();

        $tt = new TicketThread();
        $tt->ticket_id = $ticket->id;
        $tt->user_id = auth()->user()->id;
        $tt->description = sprintf('درخواست را به %s اختصاص داد', $u->name);
        $tt->type = 1;
        $tt->save();

        session()->flash('status', 'درخواست با موفقیت به کاربر اختصاص داده شد');
        return redirect(route('admin.ticket.un_assignee'));
    }

    public function ticket()
    {
        $tickets = auth()->user()->assignees;
        return view('admin.expert.tickets', compact('tickets'));
    }


    public function showTicket(Request $request, Ticket $ticket)
    {
        return view('admin.expert.ticket_show', compact('ticket'));
    }

    public function replyTicket(Request $request, Ticket $ticket)
    {
        $tt = new TicketThread();
        $tt->ticket_id = $ticket->id;
        $tt->user_id = auth()->user()->id;
        $tt->description = $request->get('description');
        $tt->type = 0;
        $tt->save();

        if ($ticket->status == $request->get('status'))
            $ticket->touch();
        else {
            $ticket->status = $request->get('status');
            $ticket->save();

            $tt = new TicketThread();
            $tt->ticket_id = $ticket->id;
            $tt->user_id = auth()->user()->id;
            $tt->description = sprintf('وضعیت درخواست را به %s تغییر داد', $ticket->getStatusDesc());
            $tt->type = 1;
            $tt->save();
        }

        session()->flash('status', 'پاسخ شما با موفقیت ثبت شد');
        return redirect(route('expert.ticket.show', [$ticket]));
    }
}
