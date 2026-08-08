<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepairProblem extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'device_type_id',
        'category',
        'code',
        'name',
        'slug',
        'description',
        'status',
        'sort_order',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'status' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Device type of this repair problem.
     */
    public function deviceType()
    {
        return $this->belongsTo(DeviceType::class);
    }

    /**
     * Services that can solve this repair problem.
     *
     * Future:
     * Many-to-Many
     */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    /**
     * Repair ticket items using this repair problem.
     */
    public function repairTicketItems()
    {
        return $this->hasMany(RepairTicketItem::class);
    }
}
