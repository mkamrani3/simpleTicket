<?php

namespace simpleTicket;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'label'];

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }


}
