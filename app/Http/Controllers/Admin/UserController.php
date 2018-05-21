<?php

namespace simpleTicket\Http\Controllers\Admin;

use Illuminate\Http\Request;
use simpleTicket\Http\Controllers\Controller;
use simpleTicket\Role;
use simpleTicket\Ticket;
use simpleTicket\TicketThread;
use simpleTicket\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(20);
        return view('admin.user.index', compact('users'));
    }


    public function roles(User $user){
        return view('admin.user.role', compact('user'));
    }

    public function doRoles(Request $request, User $user){
        $role_admin = Role::where('name', 'admin')->first();
        $role_expert = Role::where('name', 'expert')->first();
        $role_user = Role::where('name', 'user')->first();

        $roles = [];
        if ($request->has('user')) array_push($roles, $role_user->id);
        if ($request->has('expert')) array_push($roles, $role_expert->id);
        if ($request->has('admin')) array_push($roles, $role_admin->id);

        $user->Roles()->sync($roles, true);

        session()->flash('status', 'با موفقیت ثبت شد');
        return redirect(route('admin.user'));
    }

}
