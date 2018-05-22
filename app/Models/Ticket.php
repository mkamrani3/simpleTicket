<?php

namespace simpleTicket;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['owner_id', 'assignee_id', 'title', 'description', 'status'];

    public function Owner()
    {
        return $this->belongsTo(User::class);
    }

    public function Assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }

    public function Threads(){
        return $this->hasMany(TicketThread::class);
    }

    public function getStatusDesc(){
        switch ($this->status){
            case 'OPEN': return 'باز';
            case 'DOING': return 'درحال انجام';
            case 'CLOSE': return 'بسته';
        }
        return '';
    }

    public static function UnAssignees()
    {
        return Ticket::all()->where('assignee', null)
            ->sortByDesc('created_at');
    }
}
