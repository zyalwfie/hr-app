<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use NumberFormatter;

class Payroll extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['employee_id', 'salary', 'bonuses', 'deductions', 'net_salary', 'pay_date'];

    protected $casts = [
        'pay_date' => 'date:Y-m-d'
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

    private function formatRupiah($value): string
    {
        return 'Rp' . number_format($value ?? 0, 2, ',', '.');
    }

    protected function formattedSalary(): Attribute
    {
        return Attribute::get(fn() => $this->formatRupiah($this->salary));
    }

    protected function formattedBonuses(): Attribute
    {
        return Attribute::get(fn() => $this->formatRupiah($this->bonuses));
    }

    protected function formattedDeductions(): Attribute
    {
        return Attribute::get(fn() => $this->formatRupiah($this->deductions));
    }

    protected function formattedNetSalary(): Attribute
    {
        return Attribute::get(fn() => $this->formatRupiah($this->net_salary));
    }
}
