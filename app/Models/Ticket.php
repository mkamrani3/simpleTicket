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

    public function Threads(){
        return $this->hasMany(TicketThread::class);
    }
}
