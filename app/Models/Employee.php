<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'fullname',
        'email',
        'phone_number',
        'address',
        'birth_date',
        'hire_date',
        'department_id',
        'role_id',
        'status',
        'salary'
    ];

    protected $casts = [
        'hire_date' => 'date:Y-m-d',
        'birth_date' => 'date:Y-m-d',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function Role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    protected function formattedSalary(): Attribute
    {
        return Attribute::get(
            fn() =>
            'Rp' . number_format($this->salary, 2, ',', '.')
        );
    }
}
