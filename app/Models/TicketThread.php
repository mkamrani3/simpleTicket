<?php

namespace simpleTicket;

use Illuminate\Database\Eloquent\Model;

class TicketThread extends Model
{
    protected $fillable = ['ticket_id', 'user_id', 'description', 'type'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
