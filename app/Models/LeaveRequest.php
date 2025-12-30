<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveRequest extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['employee_id', 'leave_type', 'start_date', 'end_date', 'status'];

    public $casts = ['start_date' => 'date:Y-m-d', 'end_date' => 'date:Y-m-d',];

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
