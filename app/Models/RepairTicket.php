<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairTicket extends Model
{
    /** @use HasFactory<\Database\Factories\RepairTicketFactory> */
    use HasFactory;

    /**
     * Repair Ticket Items
     */
    public function items()
    {
        return $this->hasMany(RepairTicketItem::class);
    }
}
