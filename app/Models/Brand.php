<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
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
     * Device types supported by this brand.
     */
    public function deviceTypes()
    {
        return $this->belongsToMany(DeviceType::class);
    }

    /**
     * Device models under this brand.
     */
    public function deviceModels()
    {
        return $this->hasMany(DeviceModel::class);
    }

    /**
     * Repair tickets of this brand.
     */
    public function repairTickets()
    {
        return $this->hasMany(RepairTicket::class);
    }
}
