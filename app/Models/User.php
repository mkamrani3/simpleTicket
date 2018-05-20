<?php

namespace simpleTicket;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    private $current_panel = '';

    /**
     * @return string
     */
    public function getCurrentPanel()
    {
        if ($this->current_panel == '') return "guest";
        return $this->current_panel;
    }

    /**
     * @param string $current_panel
     */
    public function setCurrentPanel($current_panel)
    {
        $this->current_panel = $current_panel;
    }

    public function generateAccessLinks(){
        return view('links.' . $this->getCurrentPanel())->render();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role))
            return $this->roles->contains('name', $role);

        return !!$role->intersect($this->roles)->count();
    }
}
