<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'risk_area_id',
        'description',
        'occurrence_date',
    ];

    public function riskArea()
    {
        return $this->belongsTo(RiskArea::class);
    }
}
