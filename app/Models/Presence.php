<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presence extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['employee_id', 'check_in', 'check_out', 'date', 'status'];

    public $with = ['employee'];

    protected $casts = [
        'check_in' => 'date:Y-m-d',
        'check_out' => 'date:Y-m-d',
        'date' => 'date:Y-m-d'
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function scopeAvailableEmployee($query)
    {
        return $query->whereHas('employee', function ($q) {
            $q->whereNull('deleted_at');
        });
    }
}
