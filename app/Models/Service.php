<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'code',
        'category',
        'name',
        'slug',
        'description',
        'default_price',
        'minimum_price',
        'estimated_minutes',
        'requires_parts',
        'warranty_enabled',
        'warranty_days',
        'status',
        'sort_order',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'default_price' => 'decimal:2',
        'minimum_price' => 'decimal:2',
        'estimated_minutes' => 'integer',
        'requires_parts' => 'boolean',
        'warranty_enabled' => 'boolean',
        'warranty_days' => 'integer',
        'status' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Repair problems that can be solved by this service.
     *
     * Future:
     * Many-to-Many
     */
    public function repairProblems()
    {
        return $this->belongsToMany(RepairProblem::class);
    }

    /**
     * Repair ticket items using this service.
     */
    public function repairTicketItems()
    {
        return $this->hasMany(RepairTicketItem::class);
    }
}
