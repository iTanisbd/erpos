<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepairTicket extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'customer_id',
        'ticket_number',
        'device_type_id',
        'brand_id',
        'device_model_id',
        'device_name',
        'imei_1',
        'imei_2',
        'serial_number',
        'color',
        'password',
        'estimated_delivery_at',
        'notes',
        'status',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'estimated_delivery_at' => 'datetime',
        'status' => 'boolean',
    ];

    /**
     * Customer who owns this repair ticket.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Device type of this repair ticket.
     */
    public function deviceType()
    {
        return $this->belongsTo(DeviceType::class);
    }

    /**
     * Brand of this repair ticket.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Device model of this repair ticket.
     */
    public function deviceModel()
    {
        return $this->belongsTo(DeviceModel::class);
    }

    /**
     * Repair items under this repair ticket.
     */
    public function items()
    {
        return $this->hasMany(RepairTicketItem::class);
    }
}
