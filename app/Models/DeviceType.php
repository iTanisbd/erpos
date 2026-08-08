<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceType extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
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
     * Brands available for this device type.
     */
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    /**
     * Repair problems available for this device type.
     */
    public function repairProblems()
    {
        return $this->hasMany(RepairProblem::class);
    }

    /**
     * Repair tickets of this device type.
     */
    public function repairTickets()
    {
        return $this->hasMany(RepairTicket::class);
    }
}
