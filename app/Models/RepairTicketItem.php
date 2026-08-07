<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepairTicketItem extends Model
{
    /** @use HasFactory<\Database\Factories\RepairTicketItemFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'repair_ticket_id',
        'repair_problem_id',
        'service_id',
        'technician_id',
    ];

    /**
     * Repair Ticket
     */
    public function repairTicket()
    {
        return $this->belongsTo(RepairTicket::class);
    }

    /**
     * Repair Problem
     */
    public function repairProblem()
    {
        return $this->belongsTo(RepairProblem::class);
    }

    /**
     * Service
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Technician
     */
    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }
}
