<?php

namespace simpleTicket\Http\Controllers\Admin;

use Illuminate\Http\Request;
use simpleTicket\Http\Controllers\Controller;
use simpleTicket\Role;
use simpleTicket\Ticket;
use simpleTicket\TicketThread;
use simpleTicket\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $users = User::paginate(20);
        return view('admin.dashboard', compact('users'));
    }
}
